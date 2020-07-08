<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Entreprise;

class ClientsController extends Controller
{

    public function index()
    {
      $clients=Client::all();
      //$clients=Client::status();

      return view('clients.index', compact('clients'));
    }

    public function create(){
        $entreprises=Entreprise::all();
        $client= new Client();
        return view('clients.create', compact('entreprises', 'client'));
    }

    public function show($client)
    {
        $client=Client::where('id',$client)->firstOrFail();
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $entreprises=Entreprise::all();
        return view('clients.edit', compact('client','entreprises'));
    }

    public function store()
    {
        $datas=request()->validate([
          'nom'=>'required|min:3',
          'email'=>'required|email',
          'status'=>'required|integer',
          'entreprise_id'=>'required|integer'
        ]);

       // dd($datas);
        Client::create($datas);
        
        return redirect('/clients');
        
        //return back();
    }

    public function update(Client $client)
    {
        $datas=request()->validate([
          'nom'=>'required|min:3',
          'email'=>'required|email',
          'status'=>'required|integer',
          'entreprise_id'=>'required|integer'
        ]);

       // dd($datas);
        $client->update($datas);
        
        return redirect('/clients/'.$client->id);
    }

    public function destroy(Client $client)
    {
        $client->delete();   
        return redirect('/clients');
    }
}
