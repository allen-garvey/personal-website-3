<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Controllers\Controller;

abstract class ArrayController extends Controller
{   
    /**
     * Returns an array containing the data (model) used by this class
     *
     * @return Array
     */
    abstract protected function getModel();

    /**
     * Returns a string used for the title of the rendered page
     *
     * @return String
     */
    abstract protected function getPageTitle();
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Route $route)
    {
         return view('pages.category_index')
                    ->with('data', ['items' => $this->getModel(), 'route' => $route, 'uri' => $route->getUri(), 'title' => $this->getPageTitle()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('pages.category_show')
                    ->with('item', $this->getModel()[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
