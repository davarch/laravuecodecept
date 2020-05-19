<?php

namespace App\Http\Controllers\Api\Admin;

use App\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Class Dashboard
 * @package App\Http\Controllers\Api\Admin
 */
class DashboardController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return Dashboard::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Dashboard::findOrFail($id);
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id)
    {
        $dashboard = Dashboard::findOrFail($id);
        $dashboard->update($request->all());

        return $dashboard;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $dashboard = Dashboard::create($request->all());
        return $dashboard;
    }

    /**
     * @param $id
     * @return string
     */
    public function destroy($id)
    {
        $dashboard = Dashboard::findOrFail($id);
        $dashboard->delete();
        return '';
    }
}
