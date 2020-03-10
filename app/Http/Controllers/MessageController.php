<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request){    ///used basic illumanate request

        $message = new Message();
        $message->title = $request->title; //short hand
        $message->content = $request->content;

        $message->save();     //dont forget this

        return redirect('/');

    }

    public function view($id){

        $message = Message::findOrFail($id);

        return view('message', [
            'message' => $message
        ]);

    }

    public function delete($id)
    {

        Message::find($id)->delete();

        return redirect('/');

    }

    
}
