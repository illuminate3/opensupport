<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use App\Http\Requests\TicketCommentRequest;
use App\Ticket;
use App\TicketComment;

class TicketController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $tickets = Ticket::with('isFrom')->get();

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TicketRequest $request) {
        $input = $request->all();

        $ticket = Ticket::create($input);

        TicketComment::create([
            'description' => $input['description'],
            'ticket_id' => $ticket->id,
            'creator_name' => $input['creator_name'],
        ]);
                
        return redirect('tickets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        $ticket = Ticket::find($id);

        $users = \DB::table('users')->lists('name', 'id');
        $users[0] = 'unassigned';        
        
        return view('tickets.show', compact('ticket', 'users'));
    }

    /**
     * Add a new TicketComment with $id as Ticket id.
     * 
     * @param type $id
     */
    public function addComment(TicketCommentRequest $request) {
        $input = $request->all();

        TicketComment::create($input);

        return redirect('tickets');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $ticket = Ticket::findOrFail($id);

        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request) {
        $ticket = Ticket::findOrFail($id);

        if( $request['user_id'] == 0 )
            $request['user_id'] = NULL;
        
        $ticket->update($request->all());
        
        return redirect('tickets');
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
