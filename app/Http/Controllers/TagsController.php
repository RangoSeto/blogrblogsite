<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['tags'] = Tag::all();
        return view('tags.index',$data);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:50|unique:tags,name'
        ]);

        $user = Auth::user();
        $userid = $user['id'];

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->user_id = $userid;
        $tag->save();
        return redirect(route('tags.index'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name'=>'required|max:50|unique:tags,name,'.$id
        ]);

        $user = Auth::user();
        $userid = $user['id'];

        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->user_id = $userid;
        $tag->save();
        return redirect(route('tags.index'));
    }

    public function destroy(string $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        $tag->post()->detach();

        return redirect()->back();
    }
}
