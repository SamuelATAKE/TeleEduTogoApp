<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Contributions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use ZipArchive;

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

    public function full_download(Contributions $contributions)
    {
        $zip      = new ZipArchive();
        $fileName = 'files/download_' . time() . '.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            foreach ($contributions->contributionsFiles as $file) {

                $path =  public_path($file->file_path . $file->file_name);
                $relativeName = basename($path);
                $zip->addFile($path, $relativeName);
            }
            $zip->close();
            return $fileName;
        }
        return null;
    }
}
