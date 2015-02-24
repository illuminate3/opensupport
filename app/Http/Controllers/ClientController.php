<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;

class ClientController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ClientRequest $request) {
        $input = $request->all();

        Client::create($input);

        return redirect('clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $client = Client::find($id);

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $client = Client::findOrFail($id);

        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, ClientRequest $request) {
        $client = Client::findOrFail($id);

        $client->update( $request->all() );
        
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
