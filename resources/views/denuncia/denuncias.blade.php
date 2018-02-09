@extends('layouts.app')
@section('content')

<div class="container d-flex justify-content-center ">
    
        <div class="col-md-10 d-flex justify-content-center">
            <div class="panel panel-default">
                

                <div class="panel-body">

                <form>         
             
                      <div class="form-group">
                        <label for="exampleTextarea">Redacte su denuncia</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Vincula alguna imagen.</small>
                      </div>
                      <fieldset class="form-group">
                        <legend>Nivel de urgencia</legend>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Bajo
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Medio
                          </label>
                        </div>
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                            Urgente
                          </label>
                        </div>
                       
                      </fieldset>
                      
                      <button type="submit" class="btn btn-primary">Enviar denuncia</button>
                </article>
                </form>
        </div>
</div>

@endsection