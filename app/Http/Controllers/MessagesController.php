<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'description' => 'required'
        ]);

        Mail::to('pruebas@studioaqp.com' )->send(new MessageReceived($message));

        return back()->with('flash', 'La cotizacion ah sido solicitada :)');
    }
}
