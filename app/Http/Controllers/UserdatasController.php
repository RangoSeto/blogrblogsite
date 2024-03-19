<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userdata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserdatasController extends Controller
{

    public function index(){
        $data['userdatas'] = Userdata::where('user_id',Auth::id())->get()->first();
//        $data['users'] = User::all();
//        dd($data['userdatas']->checkuserdata(1));
        return view('userdatas.index',$data);
    }

    public function create()
    {
        return view('userdatas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'image|mimes:jpg,jpeg,png,gif',
            'bio'=>'nullable',
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $userdatas = new Userdata();
        $userdatas->bio = $request['bio'];
        $userdatas->user_id = $user_id;

        if(file_exists($request['image'])){
            $file = $request['image'];
            $fname = $file->getClientOriginalName();
            $imagenewname = uniqid().$fname;
            $file->move(public_path('assets/img/userdatas/'),$imagenewname);

            $filepath = 'assets/img/userdatas/'.$imagenewname;
            $userdatas->image = $filepath;

        }

        $userdatas->save();
        return view('userdatas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('userdatas.create');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
