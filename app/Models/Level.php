<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Level extends Model
{
    use HasFactory;

    /**
     * Get all of the users for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Level::getLevelInfos($this->cycle, $this->classe, $this->serie)["name"]
        );
    }

    public function fullName(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Level::getLevelInfos($this->cycle, $this->classe, $this->serie)["fullName"]
        );
    }

    // TODO : refactorer pour prendre en compte les niveaux universitaires.
    public static function getPreUnivLevel($cycle, $classe, $serie=null) {
        $serie = $serie ? $serie : null; // To convert "" or other null value into `null`
        // Get si existe
        $level = Level::all()->where("cycle", $cycle)->where("classe", $classe)->where("serie", $serie)->first();
        if ($level) {
            return $level;
        }
        // Create if not
        if(! Level::isLevelInPreUnivLevelTree($cycle, $classe, $serie)) {
            throw new Exception("No repertoried level cycle={$cycle}, classe={$classe}, serie={$serie} in preUnivLevelTree.", 1);
            return null;
        }
        $newLevel = new Level();
        $newLevel->cycle = $cycle;
        $newLevel->classe = $classe;
        $newLevel->serie = $serie;
        $newLevel->save();
        return $newLevel;
    }


    // TODO fonction à ettendre vers les niveaux universitaires.
    public static function getLevelInfos($cycle, $classe, $serie=null) {
        if (Level::isLevelInPreUnivLevelTree($cycle, $classe, $serie)) {
            if ($cycle == "lycee") {
                $level = Level::$preUnivLevelTree[$cycle]["series"][$serie]["classes"][$classe];
            } else {
                $level = Level::$preUnivLevelTree[$cycle]["classes"][$classe];
            }
            return $level;
        }

        return null;
    }


    // TODO fonction à ettendre vers les niveaux universitaires.
    public static function isLevelInLevelTree($cycle, $classe, $serie=null) {
        if ($cycle == "primaire" || $cycle == "college" || $cycle == "lycee") {
            return Level::isLevelInPreUnivLevelTree($cycle, $classe, $serie);
        }

        return false;
    }

    public static function getAllCyclesInfos() {
        // Not static to make it dependent on the tree
        $cyclesInfos = [];
        foreach (Level::$preUnivLevelTree as $key => $value) {
            $cyclesInfos[$key] = [
                "name" => $value["name"],
                "fullName" => $value["fullName"],
            ];
        }
        return $cyclesInfos;
    }

    public static function getAllSeriesInfos() {
        // Not static to make it dependent on the tree
        $seriesInfos = [];
        foreach (Level::$preUnivLevelTree as $value) {
            if(isset($value["series"])) {
                foreach ($value["series"] as $key => $value) {
                    $seriesInfos[$key] = [
                        "name" => $value["name"],
                        "fullName" => $value["fullName"],
                    ];
                }
            }
        }
        return $seriesInfos;
    }

    /**
     * Gest all classes without leaving duplicats.
     * For example, We won't have Terminale C and Terminale A4; only Terminale.
     * Usefull for forms.
     */
    public static function getGlobalClassesInfos() {
        // Not static to make it dependent on the tree
        $classesInfos = [];
        foreach (Level::$preUnivLevelTree as $value) {
            $cycleClassList = [];
            if(isset($value["series"])) {
                foreach ($value["series"] as $value) {
                    $cycleClassList[] = $value["classes"];
                }
            } else {
                $cycleClassList[] = $value["classes"];
            }
            foreach ($cycleClassList as $key => $subClassList) {
                foreach ($subClassList as $key => $value) {
                    /*
                    If the class alredy exist, that means it is hight school level
                    and we need to put the fullName same as the name since we don't need it.
                    */
                    $classAreadyExists = isset($classesInfos[$key]);
                    $classesInfos[$key] = [
                        "name" => $value["name"],
                        "fullName" => $classAreadyExists? $value["name"] : $value["fullName"],
                    ];
                }
            }
        }
        return $classesInfos;
    }

    public static function isLevelInPreUnivLevelTree($cycle, $classe, $serie=null) {
        try {
            if ($cycle == "lycee") {
                $levelExists = Level::$preUnivLevelTree[$cycle]["series"][$serie]["classes"][$classe];
            } else {
                $levelExists = Level::$preUnivLevelTree[$cycle]["classes"][$classe];
            }
        } catch (Exception $error) {
            return false;
        }
        if ($levelExists != null) {
            return true;
        }
        return false;
    }

    public static function getPreUnivLevelsInfos() {
        return Level::$preUnivLevelTree;
    }

    private static $preUnivLevelTree = [
        // Primaire
        "primaire" => [
            "name" => "Primaire",
            "fullName" => "Primaire",
            "classes" => [
                "cp1" => [
                    "name" => "CP1",
                    "fullName" => "Cours Primaire Première Année",
                ],
                "cp2" => [
                    "name" => "CP2",
                    "fullName" => "Cours Primaire Deuxième Année",
                ],
                "ce1" => [
                    "name" => "CE1",
                    "fullName" => "Cours Elémentaire Première Année",
                ],
                "ce2" => [
                    "name" => "CE2",
                    "fullName" => "Cours Elémentaire Deuxième Année",
                ],
            ],
        ],
        // Collège
        "college" => [
            "name" => "Collège",
            "fullName" => "Collège",
            "classes" => [
                "sixieme" => [
                    "name" => "Sixième",
                    "fullName" => "Sixième",
                ],
                "cinquieme" => [
                    "name" => "Cinquième",
                    "fullName" => "Cinquième",
                ],
                "quatrieme" => [
                    "name" => "Quatrième",
                    "fullName" => "Quatrième",
                ],
                "troixieme" => [
                    "name" => "Troixième",
                    "fullName" => "Troixième",
                ],
            ],
        ],
        // Lycée
        "lycee" => [
            "name" => "Lycée",
            "fullName" => "Lycée",
            "series" => [
                "a4" => [
                    "name" => "A4",
                    "fullName" => "Série A4",
                    "classes" => [
                        "seconde" => [
                            "name" => "Seconde",
                            "fullName" => "Seconde A4",
                        ],
                        "premiere" => [
                            "name" => "Première",
                            "fullName" => "Première A4",
                        ],
                        "terminale" => [
                            "name" => "Terminale",
                            "fullName" => "Terminale A4",
                        ],
                    ],
                ],
                "d" => [
                    "name" => "D",
                    "fullName" => "Série D",
                    "classes" => [
                        "seconde" => [
                            "name" => "Seconde",
                            "fullName" => "Seconde D",
                        ],
                        "premiere" => [
                            "name" => "Première",
                            "fullName" => "Première D",
                        ],
                        "terminale" => [
                            "name" => "Terminale",
                            "fullName" => "Terminale D",
                        ],
                    ],
                ],
            ],
        ],
    ];

}
