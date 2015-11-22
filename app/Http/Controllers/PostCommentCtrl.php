<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;

class PostCommentCtrl extends Controller
{
    private $comments;
    private $posts;

    function __construct(Comment $comments, Post $posts) {
        
        $this->comments = $comments;
        $this->posts = $posts;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {
        $post = $this->post->find($post_id)->comments()->with('comment', 'user')->get();
        return response()->json($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $postId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $postId)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $postId
     * @param  int  $commentId
     * @return \Illuminate\Http\Response
     */
    public function show($postId, $commentId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $postId
     * @param  int  $commentId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $postId, $commentId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $postId
     * @param  int  $commentId
     * @return \Illuminate\Http\Response
     */
    public function destroy($postId, $commentId)
    {
        //
    }
}
