<?php

namespace App\Http\Controllers;

use App\Models\Telefone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TelefoneController extends Controller
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
        $errors = array();

        $rules = [
            'telefones' => 'array',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        foreach ($request->telefones as $phone) {
            $telefone = new Telefone;

            $telefone->tipo = $phone['tipo'];
            $telefone->numero = $phone['numero'];
            $telefone->cliente_id = $phone['cliente_id'];

            $telefone->save();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTelefoneCliente(Request $request, int $cliente_id)
    {
        $errors = array();

        $rules = [
            'telefones' => 'array',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        foreach ($request->telefones as $phone) {
            $telefone = new Telefone;

            $telefone->tipo = $phone['tipo'];
            $telefone->numero = $phone['numero'];
            $telefone->cliente_id = $cliente_id;

            $telefone->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function show(Telefone $telefone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function edit(Telefone $telefone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Telefone $telefone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function updateTelefoneCliente(Request $request, int $cliente_id)
    {
        $errors = array();

        $rules = [
            'telefones' => 'array'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        foreach ($request->telefones as $phone) {
            if (array_key_exists('id', $phone)) {

                $telefone = Telefone::where('id', $phone['id'])->firstOrFail();

                array_key_exists('tipo', $phone) && $telefone->tipo = $phone['tipo'];
                array_key_exists('numero', $phone) && $telefone->numero = $phone['numero'];
            } else {
                $telefone = new Telefone;

                $telefone->tipo = $phone['tipo'];
                $telefone->numero = $phone['numero'];
                $telefone->cliente_id = $cliente_id;
            }

            $telefone->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Telefone  $telefone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Telefone $telefone)
    {
        //
    }
}
