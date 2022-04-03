<?php

namespace App\Http\Controllers\PhperKaigi2022;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PrivatePost;
use Illuminate\Http\Request;

class AvoidUnnecessaryQueriesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        // $posts = Post::all();
        // $private_posts = PrivatePost::all();

        $posts = Post::all();
        $private_posts = collect();
        // if( request()->user()->isAdmin() ){
        //     $private_posts = PrivatePost::all();
        // }

        return view(
            'posts.index',
            [
                'posts' => $posts,
                'private_posts' => $private_posts
            ]
        );
    }
}
