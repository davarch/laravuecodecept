<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class News
 * @package App\Http\Controllers\Api\Admin
 */
class NewsController extends Controller {

    /**
     * @return mixed
     */
    public function index() {

        return News::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id) {

        return News::findOrFail($id);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id) {

        $news = News::findOrFail($id);
        $news->update($request->all());

        return $news;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request) {

        return News::create($request->all());
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id) {

        $news = News::findOrFail($id);
        $news->delete();

        return '';
    }

}
