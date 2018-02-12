@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('home') }}
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Datos Usuario</div>

                <div class="panel-body">
                
                    <p>Usuario: Cliente</p>
                    <p>Nombre: {{Auth::user() -> name}}</p>
                    <p>Email: {{Auth::user() -> email}}</p>
               
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido!!</div>

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
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Banner</div>

                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
