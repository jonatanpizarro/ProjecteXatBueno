@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div id="divBanner" class="panel-heading"><b>Datos Usuario</b></div>

                <div class="panel-body">
                    <p>Usuario: Cliente</p>
                    <p>Nombre: Genis</p>
                    <p>Email: gtorres@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-default">
                <div id="divBanner" class="panel-heading"><b>Bienvenido!!</b></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te has logeado correctamente!
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div id="divBanner" class="panel-heading"><b>Banner</b></div>
                    
                <div class="panel-body">
                    <img id="banner" class="img-responsive" src="{{asset('imagenes/banner.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
