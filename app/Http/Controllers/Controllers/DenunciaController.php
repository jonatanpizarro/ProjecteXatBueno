<?php

namespace App\Http\Controllers;

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
        return view('denuncia.denuncias');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function show(Denuncia $denuncia)
    {
        //
    }

}
