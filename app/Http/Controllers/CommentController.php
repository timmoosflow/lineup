<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\comment;

class CommentController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments = comment::where('commentGig', $id)
        ->get();

        //return single gig as resource
        return $comments;

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create comment
        $comment = new comment;

        $comment->commentUser = $request->input('commentUser');
        $comment->commentGig = $request->input('commentGig');
        $comment->commentText = $request->input('commentText');

        $comment->save();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //get comment
        $comment = comment::findOrFail($id);

        //delete comment
        $comment->delete();
    }
}
