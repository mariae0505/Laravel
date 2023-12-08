<?php

namespace App\Http\Controllers;

use App\Exceptions\ServidorException;
use App\Exceptions\JsonException;
use App\Exceptions\DatosException;
use App\Exceptions\CustomException;

use Illuminate\Http\Request;
use App\Models\Abogado;
use App\Models\Tercero;
use App\Models\TipoIdentificacion;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

class AbogadoController extends Controller
{

    public function __construct()
    {

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
        $abogados = Abogado::all();
        return view('abogado.index')->with('abogados', $abogados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $naturaleza = [1, 2];
        $descripcion = ['Natural', 'Juridica'];
        $naturalezas =   [
            ['naturaleza' => 1, 'descripcion' => 'Natural'],
            ['naturaleza' => 2, 'descripcion' => 'Juridica']
        ];

        Log::channel('stderr')->info('$naturalezaaaaaas');
        Log::channel('stderr')->info($naturalezas);


        $tipoidentificaciones = TipoIdentificacion::all();

        return view('abogado.create')->with('tipoidentificaciones', $tipoidentificaciones)->with('naturalezas', $naturalezas);

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

        $request->validate([
            'identificacion'=>'required',
            'primernombre'=>'required',
            'primerapellido'=>'required',
            'correo'=>'required',
            'direccion'=>'required',
            'telefonos'=>'required',
            'naturaleza'=>'required',
            'tipoidentificacion_id'=>'required',
            'tarjeta'=>'required',
            'maximoprocesos'=>'required',
            

        ]);

        $terceros = new Tercero();
        $terceros->identificacion = $request->get('identificacion');
        $terceros->razonsocial = $request->get('razonsocial');
        $terceros->primernombre = $request->get('primernombre');
        $terceros->primerapellido = $request->get('primerapellido');
        $terceros->segundonombre = $request->get('segundonombre');
        $terceros->segundoapellido = $request->get('segundoapellido');
        $terceros->correo = $request->get('correo');
        $terceros->direccion = $request->get('direccion');
        $terceros->telefonos = $request->get('telefonos');
        $terceros->naturaleza = $request->get('naturaleza');
        $terceros->tipoidentificacion_id = $request->get('tipoidentificacion_id');

        //try {
            Log::channel('stderr')->info($terceros);
            $terceros->save();
            $id = Tercero::latest()->first()->id;


            $abogados = new Abogado();
            //$abogados->tercero_id = $request->get('tercero_id');
            $abogados->tercero_id = $id;
            $abogados->tarjeta = $request->get('tarjeta');
            $abogados->maximoprocesos = $request->get('maximoprocesos');
            $abogados->observaciones = $request->get('observaciones');

            $abogados->save();
       // } catch (\Exception $e) {
            //return $e->getMessage();
            //throw new JsonException("401","mensaje de prueba");
            //throw new ServidorException();
            //throw new DatosException();
      //      throw new DatosException($e->getCode(), $e->getMessage(), '\abogados');
       // }


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
        // $naturaleza= [1,2];
        // $descripcion = ['Natural','Juridica'] ;
        $naturalezas =   [
            ['naturaleza' => 1, 'descripcion' => 'Natural'],
            ['naturaleza' => 2, 'descripcion' => 'Juridica']
        ];

        //Log::channel('stderr')->info('$naturalezaaaaaas');
        //Log::channel('stderr')->info($naturalezas);
        //

        try {
            $tipoidentificaciones = TipoIdentificacion::all();
            $abogado = Abogado::with('terceros')->find($id);
            //Log::channel('stderr')->info('ABOGADOOOO');
            //Log::channel('stderr')->info($abogado);
            return view('abogado.edit')->with('abogado', $abogado)
                ->with('tipoidentificaciones', $tipoidentificaciones)
                ->with('naturalezas', $naturalezas);
        } catch (\Exception $e) {

            throw new DatosException($e->getCode(), $e->getMessage(), '\abogados');
        }
    }

   
   
    /********************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *******************************************/
    public function update(Request $request, $id)
    {
        //

        try {


            $abogado = Abogado::find($id);
            $terceroId = $abogado->tercero_id;

            $abogado->tarjeta = $request->get('tarjeta');
            $abogado->maximoprocesos = $request->get('maximoprocesos');
            $abogado->observaciones = $request->get('observaciones');

            $abogado->save();

            $terceros = Tercero::find($terceroId);


            $terceros->identificacion = $request->get('identificacion');
            $terceros->razonsocial = $request->get('razonsocial');
            $terceros->primernombre = $request->get('primernombre');
            $terceros->primerapellido = $request->get('primerapellido');
            $terceros->segundonombre = $request->get('segundonombre');
            $terceros->segundoapellido = $request->get('segundoapellido');
            $terceros->correo = $request->get('correo');
            $terceros->direccion = $request->get('direccion');
            $terceros->telefonos = $request->get('telefonos');
            $terceros->naturaleza = $request->get('naturaleza');
            $terceros->tipoidentificacion_id = $request->get('tipoidentificacion_id');

            $terceros->save();
        } catch (\Exception $e) {

            throw new DatosException($e->getCode(), $e->getMessage(), '\abogados');
        }




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
        try {
            $abogado = Abogado::find($id);
            $abogado->delete();
            return redirect('/abogados');
        } catch (\Exception $e) {
            //return $e->getMessage();
            //throw new JsonException("401","mensaje de prueba");
            //throw new ServidorException();
            //throw new DatosException();
            throw new DatosException($e->getCode(), $e->getMessage(), '\abogados');
        }
    }
}
