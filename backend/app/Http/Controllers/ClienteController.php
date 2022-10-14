<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
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

        // var_dump('$request', $request->nome);

        $validator = Validator::make($request->all(), [
            'nome' => 'required|max:255',
            'genero' => 'required',
            'cpf' => 'required|cpf',
            'rg' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'uf' => 'required|max:2',
            'cidade' => 'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->genero = $request->genero;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->cep = $request->cep;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->bairro = $request->bairro;
        $cliente->uf = $request->uf;
        $cliente->cidade = $request->cidade;

        $cliente->save();


        return $cliente->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::with('phone')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
