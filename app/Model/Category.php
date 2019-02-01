<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name'
    ];

    public static function getList($post_id){
        $data=CategoryPost::where("post_id",$post_id)->pluck("category_id");
        return static::whereIn("id",$data)->select("id","name")->where("is_active",true)->get();
    }
}
