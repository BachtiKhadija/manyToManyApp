<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
       // $clients=Client::all();
       $clients=Client::paginate(5);
       //$clients=Client::orderBy('nom','desc')->get();
       /*$search=$request->search;
        $query=Client::query();
        $clients=$query->where('nom','like','%'.$search.'%')->get();
         $clients=$query->where('nom','like','%'.$search.'%')->paginate(6);
         */
        return view('clients.index',compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $client=Client::findOrFail($id);
        return view('clients.show',compact('client'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
           $client=Client::findOrFail($id);
           $client->delete();

           return redirect('clients.index')->with('success','Client bien supprimé !!!!');
    }
}
