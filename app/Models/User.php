<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function skills() {
        return $this->belongsToMany(Skill::class);
    }

    public function projects() {
        return $this->hasMany(Project::class);
    }

    public function roles() {
        return $this->hasMany(Role::class, 'collaborator_id');
    }

    public function isValidator() : Attribute {
        return Attribute::make(
            get : fn () => $this->profil == 'validator',
        );
    }

    public function label() : Attribute {
        return Attribute::make(
            get : fn () => ($this->firstname.$this->lastname) ? $this->firstname." ".$this->lastname : $this->email
        );
    }

    public function contributesOn($project_id) {
        $role = $this->roles->where('project_id', $project_id)->first();
        if ($role) {
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
