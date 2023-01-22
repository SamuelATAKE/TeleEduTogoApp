<?php

namespace App\Services;

use App\Models\Forum;
use App\Models\ForumCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Query\Builder;

class ForumService
{
    /**
     * Get all categories with forums
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCategoriesWithForums()
    {
        $res = ForumCategory::withCount('forums')->with(['forums' => function($query) {
            $query->withCount('comments')->orderBy('created_at', 'desc');
        }])->get();
        $res->map(function($category) {
            $category->last_forum_id = $category->forums->first()? $category->forums->first()->id : null;
            $category->last_forum_created_at = $category->forums->first()? $category->forums->first()->created_at->format('Y-m-d H:i:s') : null;
            $category->last_forum_title = $category->forums->first()? $category->forums->first()->title : null;
            $category->last_forum_author = $category->forums->first()? $category->forums->first()->author()->first()->lastname : null;
            $category->comments_count = $category->forums->sum('comments_count');
            $category->forums_count = $category->forums->count();
            unset($category->forums);
        })->sortByDesc('last_forum_created_at');
        return $res;

    }

    /**
     * Get forums by category
     */

    public function getForumsByCategory($id)
    {
        return \App\Models\Forum::with(['category', 'author', 'comments', 'forumImages'])
            ->where('category', $id)
            ->paginate(20);
    }

    /**
     * Get all forums with categories
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public function getForumsWithCategories()
    {
        return \App\Models\Forum::with('category')->paginate(30);
    }
    /**
     * Get personnal forums with categories
     *
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */

     public function getPersonnalForumsWithCategories()
     {
         return \App\Models\Forum::with('category')
             ->where('author', Auth::user()->id)
             ->paginate(20);
     }

    /**
     * Forum creation
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public function createForum($request) {
        //dd($request);
        $forum = Forum::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'author' => Auth::user()->id,
            'category' => $request['category'],
            'slug' => Str::uuid().'-'.Str::slug($request['title'], '-'),
        ]);
        return $forum;
    }

    /**
     * Forum update
     *
     * @return \Illuminate\Database\Eloquent\Collection | \Illuminate\Http\RedirectResponse
     */

    public function updateForum($request, $id) {
        $forum = Forum::find($id);
        if($forum) {

            if ($forum->author != Auth::user()->id) {
                return redirect()->back()->withErrors(['Vous n\'êtes pas l\'auteur de ce forum !']);
            }

            return $forum->update([
                'title' => $request->title,
                'content' => $request->content,
                'category' => $request->category,
            ]);
        }
        return redirect()->back()->withErrors(['Ce forum n\'existe pas !']);
    }


}

?>
