<?php

namespace App\Http\Controllers;

use App\Models\MateriaprimaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\_token;


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
       if (!MateriaprimaModel::find($request->materiaprima))
       {
        $materiaprima = new MateriaprimaModel;
        $materiaprima->materiaprima = $request->materiaprima;

        if ($materiaprima->save()){
            return redirect(route('materiaprima.show', [$request->materiaprima])
        )->with('message', 'Materia prima creada');;            
        }

        dd('No se puedo guardar la materia prima');        
       }else{
           return back()->withImput($request->all())->with('message', 'La materia prima ya existe');
       }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MateriaprimaModel  $materiaprima
     * @return \Illuminate\Http\Response
     */
    public function show(MateriaprimaModel $materiaprima)
    {
        return view('materiaprima.materiaprima', $materiaprima);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MateriaprimaModel  $materiaprima
     * @return \Illuminate\Http\Response
     */
    public function edit(MateriaprimaModel $materiaprima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MateriaprimaModel  $materiaprima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MateriaprimaModel $materiaprima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MateriaprimaModel  $materiaprima
     * @return \Illuminate\Http\Response
     */
    public function destroy(MateriaprimaModel $materiaprima)
    {
        //
    }
}
