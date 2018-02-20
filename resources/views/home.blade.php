@extends('layouts.app')

@section('content')
<<<<<<< HEAD
=======
{{ Breadcrumbs::render('home') }}
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Datos Usuario</div>

                <div class="panel-body">
<<<<<<< HEAD
                    <p><b>Usuario: </b>{{Auth::user() -> rol}}</p>
                    <p><b>Nombre: </b>{{Auth::user() -> name}}</p>
                    <p><b>Email: </b>{{Auth::user() -> email}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-7">
=======
                
                    <p>Usuario: Cliente</p>
                    <p>Nombre: {{Auth::user() -> name}}</p>
                    <p>Email: {{Auth::user() -> email}}</p>
               
                </div>
            </div>
        </div>
        <div class="col-md-6">
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
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
<<<<<<< HEAD
        <div class="col-md-2">
=======
        <div class="col-md-3">
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
            <div class="panel panel-default">
                <div class="panel-heading">Banner</div>

                <div class="panel-body">
<<<<<<< HEAD
                    <img id="banner" class="img-responsive" src="{{asset('images/banner.jpg')}}">
=======
                    
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
