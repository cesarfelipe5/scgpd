<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Rules\ClientExists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Veiculo::paginate(15);
    }

    public function list()
    {
        return Veiculo::with('client')->get();
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
            'renavan' => 'required|max:25',
            'placa' => 'required|max:7',
            'modelo' => 'required',
            'marca' => 'required',
            'cliente_id' => ['required', 'int', new ClientExists],
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $veiculo = new Veiculo;

        $veiculo->renavan = $request->renavan;
        $veiculo->placa = $request->placa;
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->debitos = $request->debitos || 0;
        $veiculo->cliente_id = $request->cliente_id;

        $veiculo->save();

        return $veiculo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Veiculo::with('client')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Veiculo $veiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $errors = array();

        $rules = [
            'renavan' => 'max:25',
            'placa' => 'max:7',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $veiculo = Veiculo::findOrFail($id);

        $request->renavan && $veiculo->renavan = $request->renavan;
        $request->placa && $veiculo->placa = $request->placa;
        $request->modelo && $veiculo->modelo = $request->modelo;
        $request->marca && $veiculo->marca = $request->marca;
        $request->debitos && $veiculo->debitos = $request->debitos;

        $veiculo->save();

        return $veiculo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {

        $veiculo = Veiculo::where('id', $id)->firstOrFail();

        $veiculo->delete();

        return response()->json([], 200);
    }
}
