<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['id', 'title', 'content', 'created_at', 'updated_at'];
}
