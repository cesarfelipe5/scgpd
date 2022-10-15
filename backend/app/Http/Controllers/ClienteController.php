<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Utils\ClearString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Enums\GenderEnum;
use App\Models\Telefone;
use App\Utils\ValidatorRequest;
use Illuminate\Validation\Rules\Enum;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::with('phone')->paginate(15);
    }


    public function list()
    {
        return Cliente::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'nome' => 'required|max:255',
            'genero' => ['required', new Enum(GenderEnum::class)],
            'cpf' => 'required',
            'rg' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'uf' => 'required|max:2',
            'cidade' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $cliente = new Cliente;
        $telefone = new Telefone;

        $cliente->nome = $request->nome;
        $cliente->genero = $request->genero;
        $cliente->cpf = ClearString::onlyNumber($request->cpf);
        $cliente->rg = $request->rg;
        $cliente->cep = $request->cep;
        $cliente->logradouro = $request->logradouro;
        $cliente->numero = $request->numero;
        $cliente->bairro = $request->bairro;
        $cliente->uf = $request->uf;
        $cliente->cidade = $request->cidade;

        $cliente->save();

        $telefone->celular = $request->celular;
        $telefone->telResidencial = $request->telResidencial;
        $telefone->telComercial = $request->telComercial;
        $telefone->cliente_id = $cliente->id;

        $telefone->save();

        return Cliente::with('phone')->findOrFail($cliente->id);
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
    public function update(int $id, Request $request)
    {

        $errors = array();

        $rules = [
            'nome' => 'max:255',
            'genero' => new Enum(GenderEnum::class),
            'uf' => 'max:2',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $cliente = Cliente::findOrFail($id);

        $telefone = Telefone::where('cliente_id', $id)->findOrFail();


        $request->nome && $cliente->nome = $request->nome;
        $request->genero && $cliente->genero = $request->genero;
        $request->cpf && $cliente->cpf = ClearString::onlyNumber($request->cpf);;
        $request->rg && $cliente->rg = $request->rg;
        $request->cep && $cliente->cep = $request->cep;
        $request->logradouro && $cliente->logradouro = $request->logradouro;
        $request->numero && $cliente->numero = $request->numero;
        $request->bairro && $cliente->bairro = $request->bairro;
        $request->uf && $cliente->uf = $request->uf;
        $request->cidade && $cliente->cidade = $request->cidade;

        $cliente->save();

        // $request->celular && $telefone->celular = $request->celular;
        // $request->telResidencial && $telefone->telResidencial = $request->telResidencial;
        // $request->telComercial && $telefone->telComercial = $request->telComercial;

        // $telefone->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cliente = Cliente::findOrFail($id);

        $cliente->phone()->delete();

        $cliente->delete();

        return response()->json([], 200);
    }
}
