<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function getHome(){
        return view('static.home');
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

        Mail::send("emails.contact",[
            "mensagem" => $request->get("mensagem"),
            "telefone" => $request->get("telefone"),
            "email" => $request->get("email")
        ], function($message)
        {
            $message->from('no-reply@outroteste.com', 'Admin');
            $message->to('estevangladstone@ejcm.com.br', 'Admin')->subject('Contato do Site - ');
        });

        return view('static.contato')->with('message', 'Thanks for contacting us!');
    }

    public function getSobre(){
        return view('static.sobre');
    }


}
