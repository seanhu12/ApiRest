<?php

namespace App\Http\Controllers\Mesa;

use App\Http\Controllers\Projects\Controller;
use App\Http\Requests\Mesa\StoreMesaRequest;
use App\Http\Requests\Mesa\UpdateMesaRequest;
use App\Models\Mesa;
use Illuminate\Foundation\Http\FormRequest;

class MesaController extends Controller
{

    public function index()
    {
        return Mesa::orderBy('id')->get();
    }


    public function store(StoreMesaRequest $request)
    {
        return Mesa::create($request->all());
    }


    public function show(Mesa $mesa)
    {
        return $mesa;
    }


    public function update(UpdateMesaRequest $request, Mesa $mesa)
    {
        $mesa->update($request->all());
        return $mesa;
    }

    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
        return 'Eliminado exitosamente';
    }
}
