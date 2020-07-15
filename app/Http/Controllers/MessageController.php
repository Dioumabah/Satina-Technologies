<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        // sleep(3);

        $message=Message::create($request->only('name', 'email', 'message'));
        // $message->name=$request->name;
        // $message->email=$request->email;
        // $message->message=$request->message;
        // $message->save();

        $mailable=new ContactMessageCreated($message);
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);

        session()->flash('message', 'Nous vous répondons dans le plus brefs délais ');
        return redirect()->route('root_path');
    }
}
