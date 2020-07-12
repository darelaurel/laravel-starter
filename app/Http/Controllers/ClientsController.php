<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Entreprise;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
      $clients=Client::with('entreprise')->paginate(15);
      //$clients=Client::status();

      return view('clients.index', compact('clients'));
    }

    public function create(){

        //autoriser la policy
        $this->authorize('create', Client::class);
        
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
        $client=Client::create($this->validateur());
        $this->storeImage($client);
        return redirect('/clients');
        //return back();
    }

    public function update(Client $client)
    {
       // dd($datas);
        $client->update($this->validateur());
        $this->storeImage($client);
        return redirect('/clients/'.$client->id);
    }

    public function destroy(Client $client)
    {
        $client->delete();   
        return redirect('/clients');
    }

    private function validateur()
    {
        $datas=request()->validate([
            'nom'=>'required|min:3',
            'email'=>'required|email',
            'status'=>'required|integer',
            'entreprise_id'=>'required|integer',
            'image'=>'sometimes'
          ]);
          return $datas;
    }

    private function storeImage($client)
    {
        if(request('image'))
        {
            //dd(request('image'));
            $client->update([
                'image'=>request('image')->store('avatars','public')
            ]);
        }
    }
}
