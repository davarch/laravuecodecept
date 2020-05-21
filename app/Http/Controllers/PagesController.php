<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller {

    /**
     * @return Application|Factory|View
     */
    public function index() {

        $page = Pages::where('url', '/')->first();

        $posts = Pages::all();

        return view('index', [
            'posts' => $posts,
            'name' => $page->name,
            'content' => $page->content,
            'meta_title' => $page->meta_title ? $page->meta_title : $page->name,
            'meta_description' => $page->meta_description,
            'meta_keywords' => $page->meta_keywords
        ]);
    }

    /**
     * @param $slug
     * @return Application|Factory|Response|View
     */
    public function other($slug) {

        $page = Pages::where('url', $slug)->first();

        if ($page) {
            return view($slug, [
                'name' => $page->name,
                'content' => $page->content,
                'meta_title' => $page->meta_title ? $page->meta_title : $page->name,
                'meta_description' => $page->meta_description,
                'meta_keywords' => $page->meta_keywords
            ]);
        } else {
            return response()->view('404', [], 404);
        }
    }

}
