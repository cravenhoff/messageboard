<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // Create an 'index' method that displays the default view of the home page
    public function index() {

        /*  Retrieve all the Message records in the database
            Store the records, which will be returned as a 'collection', in a variable
        */
        
        // $messages = Message::all();
        $messages = DB::table('messages')->get();

        /*  Display appropriate view 
            Pass to the view the $messages records retrieved from the database
        */
        return view('home', [
            'messages' => $messages
        ]);
    }
}
