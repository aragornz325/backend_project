<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['posts'] = Post::paginate(5);
        return view('Post.index' , $data);
        //
    }

    public function search(Request $request)
    {
         // $data = $request->all();
       $data = $request->input('search');
       $query = Post::select()
       ->join('categories as cat','posts.category_id', '=', 'cat.id')
       ->Where ('title','like',"%$data%")
       ->orWhere ('author','like',"%$data%")
       ->orWhere ('cat.name','like',"%$data%")
       ->get();
       return view('Post.index')->with(['posts' => $query]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("post.create")->with(["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->all();
        $data = $request->except('_token');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads','public');
        }
        Post::insert($data);
        return redirect()->route("post.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Post::findOrFail($id);
        $categories = Category::all();
        return view("Post.show")->with(["post" => $data, "categories" => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Post::findOrFail($id);
        return view("post.edit")->with(["post" => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = $request->all();
        $data = $request->except('_token', '_method');
        if ($request->hasFile('image')) {
            $post = Post::findOrFail($id);
            Storage::delete("public/$post->image");
            $data['image'] = $request->file('image')->store('uploads','public');

        }
        Post::where('id','=', $id)->update($data);
        return redirect()->route("post.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route("post.index");
    }
}
