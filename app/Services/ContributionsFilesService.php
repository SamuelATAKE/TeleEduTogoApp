<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Contributions;
use App\Models\ContributionsFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ContributionsFilesService {

    public static function create_contributions_file($file, Contributions $contribution) {
        $name = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path() . '/files/', $name);
        $data[] = $name;
        ContributionsFiles::create([
            'contribution' => $contribution->id,
            'file_path' => 'files/',
            'file_name' => $name,
        ]);
    }
}
