@extends('layouts.app')
@section('content')
{{ Breadcrumbs::render('crear') }}
<div class="container d-flex justify-content-center ">
    <div class="row" >
      <div class="col-md-10 offset-md-2" style="background-color: white;">
        
<<<<<<< HEAD
        <form action="{{url('denuncias')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
          <h1>Redacte su denundia</h1>
          <hr>
          <div class="form-group">
            <label for="exampleTextarea">Descripcion</label>
=======
        <form action="{{url('denuncias')}}" method="POST">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="exampleTextarea">Redacte su denuncia</label>
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
            <textarea class="form-control" id="exampleTextarea" rows="3" name="textoFormulario"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="imagenFormulario">
            <small id="fileHelp" class="form-text text-muted">Vincula alguna imagen.</small>
          </div>
          <fieldset class="form-group">
              <legend>Nivel de urgencia</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="bajo" checked>
                  Bajo
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="medio" checked>
                  Medio
                </label>
              </div>
              <div class="form-check">
              <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="alto">
                  Urgente
                </label>
              </div>  
              <button type="submit" class="btn btn-primary">Enviar denuncia</button>
            </fieldset>
            
        </form>

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