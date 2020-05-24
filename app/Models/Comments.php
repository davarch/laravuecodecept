<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

    protected $table = 'comments';
    protected $fillable = ['id', 'id_post', 'id_user', 'content', 'created_at', 'updated_at'];

}
