<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abogado; 
use App\Models\Tercero; 
use Illuminate\Support\Facades\Log;

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
        $terceros= new Tercero();
        $terceros->identificacion = $request->get('identificacion');
        $terceros->razonsocial = $request->get('razonsocial');
        $terceros->primernombre= $request->get('primernombre');
        $terceros->primerapellido = $request->get('primerapellido');
        $terceros->segundonombre = $request->get('segundonombre');
        $terceros->segundoapellido = $request->get('segundoapellido');
        $terceros->correo = $request->get('correo');
        $terceros->direccion = $request->get('direccion');
        $terceros->telefonos = $request->get('telefonos');
        $terceros->tipopersona = $request->get('tipopersona');
        $terceros->naturaleza = $request->get('naturaleza');
        $terceros->tipoidentificacion_id = $request->get('tipoidentificacion_id');

        Log::info($terceros);
        $terceros->save();
        $id = Tercero::latest()->first()->id;
        //Log::info("Compra exitosa - Usuario: {$request->user()->id}, Producto: {$request->product_id}");
        Log::info("ID {$id}");
        $abogados=new Abogado();
        //$abogados->tercero_id = $request->get('tercero_id');
        $abogados->tercero_id =$id;
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
