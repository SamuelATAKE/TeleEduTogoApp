<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Contributions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ContributionsService {

    public function create_contribution($inputs){
        $contribution = Contributions::create([
            'title' => $inputs['title'],
            'category' => $inputs['category'],
            'content' => $inputs['content'],
            'author' => Auth::guard('web')->id(),
        ]);
        return $contribution;
    }

    public function contribution_validation($contributions) {
        $contributions->update([
            'is_validated' => true,
        ]);
    }
}
