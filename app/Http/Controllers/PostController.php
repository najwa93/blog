<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        //store in the database
        //redirect to another page
        $this->validate($request,['title' => 'required|max:255' , 'body' => 'required']);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        $request->session()->flash('success', 'The blog post was successfully saved !');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrfail($id);
       return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['title' => 'required|max:255' , 'body' => 'required']);
        $post = Post::findOrfail($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        //set flash data with success message
        $request->session()->flash('success','This Post Was Successfully Updated');
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Post::findOrfail($id);

        $post->delete();
        $request->session()->flash('success','This Post Was Successfully Deleted');
        return redirect()->route('posts.index');
    }
}
