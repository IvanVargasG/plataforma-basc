<?php

namespace App\Http\Controllers;

use App\Models\MateriaprimaModel;
use Illuminate\Http\Request;

class MateriaprimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiaprima.crear-materiaprima');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MateriaprimaModel  $materiaprimaModel
     * @return \Illuminate\Http\Response
     */
    public function show(MateriaprimaModel $materiaprimaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MateriaprimaModel  $materiaprimaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MateriaprimaModel $materiaprimaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MateriaprimaModel  $materiaprimaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MateriaprimaModel $materiaprimaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MateriaprimaModel  $materiaprimaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MateriaprimaModel $materiaprimaModel)
    {
        //
    }
}
