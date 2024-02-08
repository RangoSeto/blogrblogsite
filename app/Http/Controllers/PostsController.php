<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Tagable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['posts'] = Post::filteronly()->searchonly()->get();
        $data['tags'] = Tag::pluck('name','id');
//        $data['tags'] = Tagable::tag()->get();

//        dd($data['tags']);
        return view('posts.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['tags'] = Tag::all()->pluck('name','id');
        return view('posts.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'image'=>'image|mimes:jpg,jpeg,png,gif|max:1024',
            'title'=>'required',
            'content'=>'required'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $post = new Post();
        $post->title = $request['title'];
        $post->slug = Str::slug($request['title']);
        $post->content = $request['content'];
        $post->user_id = $user_id;

        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$fname;
            $file->move(public_path('assets/img/posts/'),$imagenewname);

            $filepath = 'assets/img/posts/'.$imagenewname;
            $post->image = $filepath;
        }

        $post->save();

        if($post->id){
            if(count($request['tag_id']) > 0){
                foreach($request['tag_id'] as $key=>$value){
                    Tagable::create([
                        'tag_id'=>$value,
                        'tagable_id'=>$post->id,
                        'tagable_type'=>$request['tagable_type']
                    ]);
                }
            }
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['post'] = Post::findOrFail($id);
        $data['tags'] = Tag::pluck('name','id');
        return view('posts.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['post'] = Post::findOrFail($id);
        $data['taggables'] = $data['post']->tag()->get();
        $data['tags'] = Tag::all()->pluck('name','id');

        return view('posts.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'image'=>'image|mimes:jpg,jpeg,png,gif|max:1024',
            'title'=>'required',
            'content'=>'required'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $post = new Post();
        $post->title = $request['title'];
        $post->slug = Str::slug($request['title']);
        $post->content = $request['content'];
        $post->user_id = $user_id;

        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid($user_id).$fname;
            $file->move(public_path('assets/img/posts/'),$imagenewname);

            $filepath = 'assets/img/posts/'.$imagenewname;
            $post->image = $filepath;
        }

        $post->save();

        if($post->id){
            if(count($request['tag_id']) > 0){
                foreach($request['tag_id'] as $key=>$value){
                    Tagable::create([
                        'tag_id'=>$value,
                        'tagable_id'=>$post->id,
                        'tagable_type'=>$request['tagable_type']
                    ]);
                }
            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }

//default(asset('assets/img/illu/noimage.jpg'))->
}
