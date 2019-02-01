<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'id',
        'title',
        'content',
        'is_active',
        'summery',
        'publish_time'
    ];


    public static function get_words($sentence, $count = 10) {
        preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
        return $matches[0];
    }

    public function categoryPost()
    {
        return $this->belongsTo('App\Model\CategoryPost');
    }
}
