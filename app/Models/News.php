<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['id', 'name', 'url', 'content', 'meta_title', 'meta_description', 'meta_keywords', 'created_at', 'updated_at'];
}
