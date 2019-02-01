<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{

    protected $fillable = [
        'id',
        'category_id',
        'post_id',
    ];

    public static function saveCategory($post_id,$category_ids){
        foreach($category_ids as $row){
            static::create(["category_id"=>$row,"post_id"=>$post_id]);
        }
    }

    public static function updateCategory($post_id,$category_ids){
        static::where("post_id",$post_id)->delete();
        self::saveCategory($post_id,$category_ids);
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category','category_id');

    }
}
