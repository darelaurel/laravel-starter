<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store()
    {
        $datas=request()->validate([
            'nom'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:5',
          ]);
        Mail::to('test@test.com')->send(new ContactMail($datas));

        //session()->flash('message','Votre message');
        
        //on peut chainer aussi

        return redirect('contact')->with('message', 'Votre message a été envoyé avec succès');
    }
}
