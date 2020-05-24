<?php

namespace App\Http\Controllers\Api\Client;

use App\Models\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class Comments
 * @package App\Http\Controllers\Api\Admin
 */
class CommentsController extends Controller {

    /**
     * @param $id_post
     * @return mixed
     */
    public function index() {

        return Comments::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id) {

        return Comments::findOrFail($id);
    }

    public function showID($id) {

        return Comments::findOrFail($id);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id) {

        $comments = Comments::findOrFail($id);
        $comments->update($request->all());

        return $comments;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request) {

        return Comments::create($request->all());
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id) {

        $comments = Comments::findOrFail($id);
        $comments->delete();

        return '';
    }

}
