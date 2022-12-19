<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pagamento::with('paymentType')->paginate(15);
    }

    public function list()
    {
        return Pagamento::with('paymentType')->get();
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
            'data_pagamento' => 'required',
            'valor_pagamento' => 'required',
            'tipo_pagamento' => 'required',
            'status' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $pagamento = new Pagamento;

        $pagamento->data_pagamento = $request->data_pagamento;
        $pagamento->valor_pagamento = $request->valor_pagamento;
        $pagamento->tipo_pagamento = $request->tipo_pagamento;
        $pagamento->status = $request->status;

        $pagamento->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return Pagamento::with('paymentType')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Pagamento $pagamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $errors = array();

        $rules = [
            'id' => 'required|int'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $pagamento = Pagamento::findOrFail($id);


        $request->data_pagamento && $pagamento->data_pagamento = $request->data_pagamento;
        $request->valor_pagamento && $pagamento->valor_pagamento = $request->valor_pagamento;
        $request->tipo_pagamento && $pagamento->tipo_pagamento = $request->tipo_pagamento;
        $request->status && $pagamento->status = $request->status;

        $pagamento->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagamento  $pagamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $pagamento = Pagamento::where('id', $id)->firstOrFail();

        $pagamento->delete();

        return response()->json([], 200);
    }
}
