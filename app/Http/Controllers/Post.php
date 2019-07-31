<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Controller
{
    public function create(){
    	return view('create');
    }
    public function store(Request $request)
    {

        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('images/', $filename);

        $post = new \App\Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $filename;
        $post->category_id = $request->category;
        $post->save();

        return redirect('/');
    }

    public function delete($id){
        $post = \App\Post::find($id);
        if($post->image != 'get'){
            unlink(public_path('images/'.$post->image));
        }


        $post->delete();
        return redirect('/');
    }

    public function get(Request $request){
        $title = $request->input('title');
        $description = $request->input('description');
        if ($title and $description) {
            \App\Post::create(['title'=>$title,'description'=>$description, 'image'=>'get']);
            return redirect('/');
        }
        return view('get');
    }

    public function index(){
    	$post = \App\Post::all();
        $category = \App\Category::all();
    	return view('index', [
    		'post'=>$post,
            'category'=>$category,
    	]);
    }
    public function detail($id){
        $post = \App\Post::find($id=$id);
        return view('detail', [
            'post'=>$post,
        ]);
    }
    public function comment(Request $request, $id){
        $post = \App\Post::find($id);
        $comment = new \App\Comment();
        $comment->text = $request->text;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $post->id;
        $comment->save();
        return redirect('/post/'.$post->id);
    }
}
