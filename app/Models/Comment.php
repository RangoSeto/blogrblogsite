<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description',
        'user_id',
        'commentable_id',
        'commentable_type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function userdata(){
        $data = Userdata::where('user_id',$this->user_id)->get()->first();
        return $data;
    }

    public function commentable(){
//        if($this->commentable_type === 'App\Models\Post'){
//            $data = Post::where('id','commentable_type')->get()->first();
//        }
//        dd($data);
//        return $data;

        return $this->morphTo();

    }

}
