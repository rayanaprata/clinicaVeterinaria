<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultas;
use App\Models\Clientes;
use App\Models\Animais;

class ControladorConsultas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas = Consultas::all();
        return view('consultas/consultas', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consultas.novaconsulta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $con = new Consultas();
        $con->data = $request->input('con_data');
        $con->sintomas = $request->input('con_sintomas');
        $con->tratamento = $request->input('con_tratamento');
        $con->exame = $request->input('con_exame');
        $con->descExame = $request->input('con_descExame');
        //$con->animais_id = $request->input('animais_id');
        //$con->clientes_id = $request->input('clientes_id');
        $con->save();
        return redirect('/consultas');
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
        $con = Consultas::find($id);
        if (isset($con)) {
            return view('consultas.edit', compact('con'));
        }

        return redirect('/consultas');
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
        $con = Consultas::find($id);
        if (isset($con)) {
            $con->data = $request->input('con_data');
            $con->sintomas = $request->input('con_sintomas');
            $con->tratamento = $request->input('con_tratamento');
            $con->exame = $request->input('con_exame');
            $con->descExame = $request->input('con_descExame');
            //$con->animais_id = $request->input('animais_id');
            //$con->clientes_id = $request->input('clientes_id');
            $con->save();
        }

        return redirect('/consultas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $con = Consultas::find($id);
        if (isset($con)) {
            $con->delete();
        }
        return redirect('/consultas');
    }

    public static function getCustomerName($id)
    {
        $consultas = Consultas::find($id);
        if (isset($consultas)) {
            $clientes = Clientes::find($consultas['clientes_id']);
            if (isset($clientes))
                return $clientes->nome;
        }
    }

    public static function getAnimalName($id)
    {
        $consultas = Consultas::find($id);
        if (isset($consultas)) {
            $animais = Animais::find($consultas['animais_id']);
            if (isset($animais))
                return $animais->nome;
        }
    }
}
