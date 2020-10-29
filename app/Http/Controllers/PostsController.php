<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{
    //
    public  function store(Request $request)
    {
        $sessionID = Auth::id();
        $post = new posts;
        $post->userid =  $sessionID;
        $post->post =  request('post');
        $post->post_name =  request('post_name');

        if ($post->save()) {
            return Redirect::to("/createPost")->withSuccess('Success message')->header("Refresh", "5;url=/myposts");;
        }
        //return view('createPost');
    }
    public  function show(Request $request)
    {
        $this->middleware('guest')->except('logout');
        return posts::all();
    }
    public function get(Request $request)
    {
        $sessionID = Auth::id();
        $post = new posts;
        $myposts = $post->where('userid', '=', $sessionID)->get();
        return $myposts;
    }

    public  function delete(Request $request)
    {
        $posts = posts::find($request->post_id);

        $posts->delete();
    }
}
