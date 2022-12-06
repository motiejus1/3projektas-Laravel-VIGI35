<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * //atsakingas uz visu klientu atvaizdavima
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //MVC struktura
        //controller perduoda duomenis is modelio i vaizda
        //controller - perduoda duomenis is vaizdo i modeli

        //Modelis - strukturine dalis, atsakinga uz duomenu baze

        //kreiptis i modeli x
        //su instrukcija - paimk man visus klientus is duombazes(SELECT * FROM clients) x
        //modelis grazina visus klientus x
        //visus klientus perduodam i vaizda
        $clients = Client::all(); // SELECT * FROM clients
        
        //var_dump() -> dd()
        //dd($clients); // dump die
           
        //$clients - visi klientai

        //echo "/clients kelias veikia";

        return view('clients.index', ['clients' => $clients]);
        
        
        //-> clients/index.blade.php
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
