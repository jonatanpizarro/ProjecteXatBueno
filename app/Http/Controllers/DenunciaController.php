<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
use App\Denuncia;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //$denuncias = Denuncia::All();
        $denuncias = Denuncia::where('id_usuario', Auth::user() -> id )->get();

        return view('denuncia.denuncias', ['arrayDenuncias' => $denuncias] );
=======
        return view('denuncia.denuncias');
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('denuncia.crearDenuncias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
<<<<<<< HEAD
        $a = new Denuncia();
        $a->text = $request->input('textoFormulario');
        $a->respuesta ="";

        //
        //$a->imagen = $request->input('imagenFormulario');
        if (Input::hasFile('imagenFormulario')){
            $file = Input::file('imagenFormulario');
            $file->move('uploads/', $file->getClientOriginalName());
            $a->imagen = "uploads/".$file->getClientOriginalName();
        }
        
        $a->id_usuario = Auth::id();
        //$a->prioridad = $request->input('optionsRadios');
        $a->resuelto = false;
        $a->save();

        return redirect()->action('DenunciaController@index');

=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function comentar(Request $request)
    {
       // $a->respuesta =$request->input('comentario');

        Denuncia::where('id', $request->input('id'))
            ->update(['respuesta'=> $request->input('comentario')]);

        return redirect()->action('DenunciaController@index');
       
        

    }

}
=======
    public function show(Denuncia $denuncia)
    {
        //
    }

}
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
