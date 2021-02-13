<?php

namespace App\Http\Controllers\Backend;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = Comment::all();
        return view('backend.comment.view-comment', compact('views'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.comment.add-comment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comments' => 'required',
            'image' => 'required'
        ]);
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->designation = $request->designation;
        $comment->comment = $request->comments;
        $photo = $request->file('image');
        $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path('backend/images/comments/'), $photo_full_name);
        $comment->image = $photo_full_name;
        $comment->save();
        $notification = [
            'message' => 'Comment Saved Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('comments.create')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($comment)
    {   
        $comment = Comment::find($comment);
        return view('backend.comment.edit-comment', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comment)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comments' => 'required',
        ]);
        $comment = Comment::find($comment);
        $comment->name = $request->name;
        $comment->designation = $request->designation;
        $comment->comment = $request->comments;
        $photo = $request->file('image');
        if($photo){
            unlink('backend/images/comments/'.$comment->image);
            $photo_full_name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path('backend/images/comments/'), $photo_full_name);
            $comment->image = $photo_full_name;
        }
        $comment->update();
        $notification = [
            'message' => 'Comment Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('comments.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comment)
    {
        $delete = Comment::find($comment);
        if($delete->image){
            unlink('backend/images/comments/'.$delete->image);
        }
        $delete->delete();
        $notification = [
            'message' => 'Comment Deleted Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('comments.index')->with($notification);
    }
}
