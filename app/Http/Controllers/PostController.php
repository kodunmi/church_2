<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.blog',[
            'posts' => Post::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2000',
            'body' => 'required',
            'created_by' => 'required',
            'preview' => 'required',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();


        $feature = $request->feature ? true : false;

        $data = $request->except(['_token']);

        $data['image'] = $imageName;
        $data['feature'] = $feature;

        Post::create($data);

        request()->image->move(public_path('images/post'), $imageName);

        return back()->with([
            'message' => 'post created successfully',
            'type' => 'success'
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->except(['_token']);

        if ($request->has('image')) {
            $file = public_path().'/images/post/'.$post->first()->image;
            File::delete($file);

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/post'), $imageName);

            $data['image'] = $imageName;
        }

        $post->update($data);

        return back()->with([
            'message' => 'post updated',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        $file = public_path().'/images/post/'.$post->image;

        File::delete($file);
        $post->delete();

        return back()->with([
            'message' => 'post deleted successfully',
            'type' => 'success'
        ]);
    }

    public function feature($id)
    {
        $post = Post::find($id);

        if($post->first()->feature){
            $post->update(['feature' => false]);

            return back()->with([
                'message' => 'post removed from feature',
                'type' => 'success'
            ]);
        }else{
            $post->update(['feature' => true]);

            return back()->with([
                'message' => 'post featured ',
                'type' => 'success'
            ]);
        }
    }

    public function comment(Request $request,Post $post){

        $this->validate($request,[
            'name' => 'required',
            'message' => 'required',
            'email' => 'email|required'
        ]);

        $comment = new Comment($request->except('_token'));

        $post->comments()->save($comment);

        return back()->with([
            'message' => 'commented submitted',
            'type' => 'success'
        ]);
        //Comment::create($request->except('_token'));
    }
}
