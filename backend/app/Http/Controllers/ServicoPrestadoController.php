<?php

namespace App\Http\Controllers;

use App\Models\ServicoPrestado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicoPrestadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServicoPrestado::paginate(15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return ServicoPrestado::get();
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
            'nome' => 'required|max:50',
            'valorDespachante' => 'required',
            'valorDetran' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $servicoPrestado = new ServicoPrestado;

        $servicoPrestado->nome = $request->nome;
        $servicoPrestado->valorDespachante = $request->valorDespachante;
        $servicoPrestado->valorDetran = $request->valorDetran;

        $servicoPrestado->save();

        return $servicoPrestado;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServicoPrestado  $servicoPrestado
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return ServicoPrestado::where('id', $id)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServicoPrestado  $servicoPrestado
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicoPrestado $servicoPrestado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServicoPrestado  $servicoPrestado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $errors = array();

        $rules = [
            'id' => 'required|int',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $servicoPrestado = ServicoPrestado::findOrFail($id);

        $request->nome && $servicoPrestado->nome = $request->nome;
        $request->valorDespachante && $servicoPrestado->valorDespachante = $request->valorDespachante;
        $request->valorDetran && $servicoPrestado->valorDetran = $request->valorDetran;

        $servicoPrestado->save();

        return $servicoPrestado;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServicoPrestado  $servicoPrestado
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $servicoPrestado = ServicoPrestado::where('id', $id)->firstOrFail();

        $servicoPrestado->delete();

        return response()->json([], 200);
    }
}
