<?php

namespace App\Http\Controllers;

use App\Foto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function getHome(){

        $slides = Foto::all();

        return view('static.home')->with('slides', $slides);
    }

    public function getContato(){
        return view('static.contato');
    }

    public function postContato(Request $request){

        $this->validate($request, [
            "nome" => "required|min:2",
            "email" => "required|email",
            "telefone" => "required",
            "assunto" => "required",
            "mensagem" => "required"
        ]);

        Mail::send('emails.contact',['teste' => 'testset'], function
        ($message)
        {
            $message->to('estevangladstone@ejcm.com.br')->subject('Contato do Site - ');
        });

//        return view('static.contato')->with('message', 'Thanks for contacting us!');
    }

    public function getSobre(){
        return view('static.sobre');
    }


}
