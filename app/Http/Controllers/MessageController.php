<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Create a 'create' method to handle the instantiation of a new message
    public function create(Request $request) {
        // Instantiate a new Message model
        $message = new Message();

        // Assign the respective form fields to the newly instantiated model
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save();

        return back();
    }

    // Create a 'view' method to retrieve a single post record, based on the ID passed
    public function view($id) {
        $message = Message::findOrFail($id);
        // echo $message->title;
        return view('message', [
            'message' => $message
        ]);
    }
}
