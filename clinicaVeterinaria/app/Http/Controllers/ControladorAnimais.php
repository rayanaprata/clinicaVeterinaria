<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animais;
use App\Models\Clientes;

class ControladorAnimais extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $animais = Animais::with('clientes')->get();
        return view('animais/animais', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('animais.novoanimal', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ani = new Animais();
        $ani->nome = $request->input('ani_nome');
        $ani->apelido = $request->input('ani_apelido');
        $ani->raca = $request->input('ani_raca');
        $ani->especie = $request->input('ani_especie');
        $ani->peso = $request->input('ani_peso');
        $ani->cor = $request->input('ani_cor');
        $ani->nascimento = $request->input('ani_nascimento');
        $ani->doenca = $request->input('ani_doenca');
        $ani->descDoenca = $request->input('ani_descDoenca');
        $ani->cirurgia = $request->input('ani_cirurgia');
        $ani->descCirurgia = $request->input('ani_descCirurgia');
        $ani->clientes_id = $request->input('clientes_id');
        $ani->save();
        return redirect('/animais');

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
        $ani = Animais::find($id);
        if (isset($ani)) {
            return view('animais.edit', compact('ani'));
        }

        return redirect('/animais');
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
        $ani = Animais::find($id);
        if (isset($ani)) {
            $ani->nome = $request->input('ani_nome');
            $ani->apelido = $request->input('ani_apelido');
            $ani->raca = $request->input('ani_raca');
            $ani->especie = $request->input('ani_especie');
            $ani->peso = $request->input('ani_peso');
            $ani->cor = $request->input('ani_cor');
            $ani->nascimento = $request->input('ani_nascimento');
            $ani->doenca = $request->input('ani_doenca');
            $ani->descDoenca = $request->input('ani_descDoenca');
            $ani->cirurgia = $request->input('ani_cirurgia');
            $ani->descCirurgia = $request->input('ani_descCirurgia');
            $ani->clientes_id = $request->input('clientes_id');
            $ani->save();
        }

        return redirect('/animais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ani = Animais::find($id);
        if (isset($ani)) {
            $ani->delete();
        }
        return redirect('/animais');
    }
}
