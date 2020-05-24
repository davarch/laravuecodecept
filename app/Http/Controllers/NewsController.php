<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function detail($slug) {
        $post = News::where('url', $slug)->first();

        return view('detail.news', [
            'id_post' => $post->id,
            'url' => $post->url,
            'name' => $post->name,
            'content' => $post->content,
            'meta_title' => $post->meta_title ? $post->meta_title : $post->name,
            'meta_description' => $post->meta_description,
            'meta_keywords' => $post->meta_keywords
        ]);
    }
}
