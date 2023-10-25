<?php

namespace App\Http\Controllers;

use App\Models\Soporte;
use App\Http\Requests\StoreSoporteRequest;
use App\Http\Requests\UpdateSoporteRequest;
use Illuminate\Http\Request;

class SoporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soportes=Soporte::all();

        return view('soporte.listar',['soportes'=>$soportes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $modelo=new Soporte($request->old());
        return view("soporte.crear",['modelo'=> $modelo]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSoporteRequest $request)
    {
        
        $modelo=new Soporte($request->all());
        $modelo->save();

        return redirect("/soporte/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Soporte $soporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        // leer el numero de soporte para leer el soporte.
        if(count($request->old())>0) { // cuando digite valor y me equivoque
            $modelo=new Soporte($request->old());
        } else {
            $modelo=Soporte::find($id);
        }
        //$modelo=new Soporte($request->old());
        return view("soporte.actualizar",['modelo'=> $modelo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSoporteRequest $request,$id, Soporte $soporte)
    {
        $modelo=Soporte::find($id);
        $modelo->fill($request->all());
        //$modelo=new Soporte($request->all());
        $modelo->save();
        return redirect("/soporte/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Soporte $soporte)
    {
        //
    }
}
