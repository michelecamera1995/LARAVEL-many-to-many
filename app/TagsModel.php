<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsModel extends Model
{
    protected $table = "tags";
    protected $fillable = ['title', 'content', 'category_id', 'slug'];
}
