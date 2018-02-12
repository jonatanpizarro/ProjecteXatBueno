@extends('layouts.app')
@section('content')
{{ Breadcrumbs::render('denuncia') }}

<div class="container d-flex justify-content-center ">
  <div class="row" > 
    
    <div class="col-md-10" style="background-color: white;">

      @foreach( $arrayDenuncias as $key => $denuncia )
        <p>
          {{$denuncia['imagen']}}
          
          {{$denuncia['text']}}
        </p>
      @endforeach
    
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