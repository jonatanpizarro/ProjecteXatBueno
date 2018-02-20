@extends('layouts.app')
@section('content')
{{ Breadcrumbs::render('denuncia') }}

<div class="container d-flex justify-content-center ">
  <div class="row" > 
    
    <div class="col-md-10" style="background-color: white;">
<<<<<<< HEAD
      <h1>Denuncias Realizadas</h1>
      <hr>
      
      @foreach( $arrayDenuncias as $key => $denuncia )
        <div class="container">
          <div style="float: left; border-color: red;"><img class="fotoDenuncia" src="{{$denuncia['imagen']}}" /></div>
          <div style="float: left;"><p>{{$denuncia['created_at']}}</p><p>{{$denuncia['text']}}</p>
              <hr>
              <p>Comentario admin : {{$denuncia['respuesta']}}</p>
          </div>
          <br>
        </div>
        <br>
=======

      @foreach( $arrayDenuncias as $key => $denuncia )
        <p>
          {{$denuncia['imagen']}}
          
          {{$denuncia['text']}}
        </p>
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
      @endforeach
    
    </div>

    <div class="col-md-2">
      <div class="panel panel-default">
          <div id="divBanner" class="panel-heading"><b>Banner</b></div>
              
          <div class="panel-body">
<<<<<<< HEAD
              <img id="banner" class="img-responsive" src="{{asset('images/banner.jpg')}}">
=======
              <img id="banner" class="img-responsive" src="{{asset('imagenes/banner.jpg')}}">
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
          </div>
      </div>
    </div>

  </div>
</div>

@endsection