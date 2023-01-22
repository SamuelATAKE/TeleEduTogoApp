<?php

namespace App\Services;

use App\Models\Forum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ForumService
{
    /**
     * Get all categories with forums
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCategoriesWithForums()
    {
         $res = DB::table('forum_categories')
            ->select('forum_categories.*', DB::raw('count(forums.id) as forums_count'),
            DB::raw('max(forums.id) as last_forum_id'),
            DB::raw('max(forums.created_at) as last_forum_created_at'),
            DB::raw('forums.title as last_forum_title'),
            DB::raw('users.lastname as last_forum_author'),
            DB::raw('count(comments.id) as comments_count'))
            ->leftJoin('forums', 'forums.category', '=', 'forum_categories.id')
            ->leftJoin('users', 'users.id', '=', 'forums.author')
            ->leftJoin('comments', 'comments.forum', '=', 'forums.id')
            ->groupBy('forum_categories.id')
            ->orderBy('last_forum_created_at', 'desc')
            ->paginate(10);
            //dd($res);
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
