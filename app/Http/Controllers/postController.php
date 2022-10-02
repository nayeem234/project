<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogPost;

class postController extends Controller
{
    function index()
    {
        return view('backend.add_data');
    }
    function store(Request $request)
    {
        $post = new blogPost();
        $post->title = $request->title;
        // $post->image = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->back();
    }
    function delete($id)
    {
        blogPost::findOrFail($id)->delete();
        return "Delete success";
    }
    function preview($id)
    {
        return blogPost::where('id', '=', $id)->get();
    }

    function edit(Request $request)
    {
        // return $request->all();
        $post = blogPost::findOrfail($request->editId);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->update();
        return redirect()->back();

    }
}
