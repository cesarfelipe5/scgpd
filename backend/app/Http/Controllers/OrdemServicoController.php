<?php

namespace App\Http\Controllers;

use App\Models\OrdemServico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdemServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrdemServico::with('vehicle', 'serviceOrderItem')->paginate(15);
    }

    public function list()
    {
        return OrdemServico::with('vehicle', 'serviceOrderItem')->get();
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
            'valorTotal' => 'required',
            'veiculo_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->errors()->getMessages() as $item) {
                array_push($errors, $item[0]);
            }

            return response()->json(['errors' => $errors]);
        }

        $ordemServico = new OrdemServico;

        $ordemServico->valorTotal = $request->valorTotal;
        $ordemServico->veiculo_id = $request->veiculo_id;
        $request->valorVenda && $ordemServico->valorVenda = $request->valorVenda;
        $request->financiamento && $ordemServico->financiamento = $request->financiamento;
        $request->conversaoMercoSul && $ordemServico->conversaoMercoSul = $request->conversaoMercoSul;
        $request->dataEncerramento && $ordemServico->dataEncerramento = $request->dataEncerramento;

        $ordemServico->save();

        return OrdemServico::with('vehicle', 'serviceOrderItem')->findOrFail($request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdemServico  $ordemServico
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return OrdemServico::with('vehicle', 'serviceOrderItem')->findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdemServico  $ordemServico
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdemServico $ordemServico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdemServico  $ordemServico
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

        $ordemServico = OrdemServico::findOrFail($id);

        $request->valorTotal && $ordemServico->valorTotal = $request->valorTotal;
        $request->dataEncerramento && $ordemServico->dataEncerramento = $request->dataEncerramento;
        $request->valorVenda && $ordemServico->valorVenda = $request->valorVenda;
        $request->financiamento && $ordemServico->financiamento = $request->financiamento;
        $request->conversaoMercoSul && $ordemServico->conversaoMercoSul = $request->conversaoMercoSul;

        $ordemServico->save();

        OrdemServico::with('vehicle', 'serviceOrderItem')->findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdemServico  $ordemServico
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $ordemServico = OrdemServico::where('id', $id)->firstOrFail();

        $ordemServico->delete();

        return response()->json([], 200);
    }
}
