<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{

    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'title',
        'slug',
        'content',
        'user-id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag(){
        return $this->MorphToMany(Tag::class,'tagable');
    }

    public function scopefilteronly($query){
        if($getfilter = request('filter')){

            $query->whereHas('tag',function($query) use($getfilter){
                $query->where('tag_id',"${getfilter}");
            });

        }
        return $query;
    }

    public function scopesearchonly($query){
        if($getsearch = request('search')){
            $query->where('title','LIKE',"%${getsearch}%");
        }
        return $query;
    }



}
