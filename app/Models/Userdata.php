<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Userdata extends Model
{
    use HasFactory;

    protected $table = "userdatas";
    protected $primaryKey = "id";
    protected $fillable = [
        'image',
        'bio',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

//    public function checkuserdata($userid){
//        return DB::table('userdatas')->where('user_id',Auth::id())->exists();
//    }

}
