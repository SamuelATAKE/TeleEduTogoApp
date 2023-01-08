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

    public static function contribution_like(Contributions $contribution, $voted=false) {
        if ($voted) {
            $dislikes = $contribution->dislike;
            $contribution->update([
                'dislike' => $dislikes - 1,
            ]);
        }

        $likes = $contribution->like;
        $contribution->update([
            'like' => $likes + 1,
        ]);
    }

    public static function contribution_dislike(Contributions $contribution, $voted=false) {
        if ($voted) {
            $likes = $contribution->like;
            $contribution->update([
                'like' => $likes - 1,
            ]);
        }

        $dislikes = $contribution->dislike;
        $contribution->update([
            'dislike' => $dislikes + 1,
        ]);
    }
}
