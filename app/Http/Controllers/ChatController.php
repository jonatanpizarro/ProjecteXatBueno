<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Grupos;
=======
use App\Chat;
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $grupos = Grupos::All();
        return view('chat.chat', ['arrayGrupos' => $grupos]);
=======
        return view('chat.chat');
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //return view('chat.chat');
=======
        //
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $a = new Grupos();
        $a->nom = $request->input('nombre');
        $a->id_usuario = Auth::id();
        $a->save();
        
        return redirect()->action('ChatController@index');
    }
=======
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
}
