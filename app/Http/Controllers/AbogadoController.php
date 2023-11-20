<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abogado; 

class AbogadoController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abogados=Abogado::all();
        return view('abogado.index')->with('abogados',$abogados);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abogado.create');
        //
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
        $abogados=new Abogado();
        //$abogados->tercero_id = $request->get('tercero_id');
        $abogados->tercero_id =1;
        $abogados->tarjeta = $request->get('tarjeta');
        $abogados->maximoprocesos = $request->get('maximoprocesos');
        $abogados->observaciones = $request->get('observaciones');
        
        $abogados->save();
        return redirect('/abogados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
        $abogado= Abogado::find($id);
        return view('abogado.edit')->with('abogado', $abogado);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $abogado= Abogado::find($id);
        $abogado->tercero_id = $request->get('tercero_id');
        $abogado->tarjeta = $request->get('tarjeta');
        $abogado->maximoprocesos = $request->get('maximoprocesos');
        $abogado->observaciones = $request->get('observaciones');
        
        $abogado->save();
        return redirect('/abogados');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $abogado= Abogado::find($id);
        $abogado->delete();
        return redirect('/abogados');
    }
}
