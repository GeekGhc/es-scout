<?php

namespace App;

use App\Libraries\EsSearchable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable,EsSearchable;

    protected $fillable = ['title','author','content'];

    public function searchableAs()
    {
        return "post";
    }

    //定义有哪些字段需要搜索
    public function toSearchableArray()
    {
        return [
            'author'=>$this->author,
            'title'=>$this->title,
            'content'=>$this->content,
        ];
    }
}
