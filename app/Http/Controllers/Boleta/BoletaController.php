<?php

namespace App\Http\Controllers\Boleta;


use App\Http\Controllers\Projects\Controller;
use App\Http\Requests\Ticket\StoreTicketRequest;
use App\Http\Requests\Ticket\UpdateTicketRequest;
use App\Models\Projects\Project;
use App\Models\Boleta;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Boleta::orderBy('id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Ticket\StoreTicketRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
        return Boleta::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Boleta $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Boleta $ticket)
    {
        return $ticket;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Ticket\UpdateTicketRequest $request
     * @param \App\Models\Boleta $project
     * @return Project
     */
    public function update(UpdateTicketRequest $request, Boleta $ticket)
    {
        $ticket->update($request->all());
        return $ticket;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Projects\Project $project
     * @return string
     */
    public function destroy(Boleta $ticket)
    {
        $ticket->delete();
        return 'Eliminado exitosamente';
    }
}
