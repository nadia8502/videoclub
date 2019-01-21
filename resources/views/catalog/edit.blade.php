@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir película
         </div>
         <div class="card-body" style="padding:30px">

           <form action="{{url('CatalogCotroller@getedit')}}" method="POST">
           	{{CSRF_FIELD()}}

            <div class="form-group">
               <label for="title">Título</label>
               <input type="text" name="title" id="title" value="{{$idPelicula['title']}}" class="form-control">
            </div>

            <div class="form-group">
            	<label for="year">Año</label>
               <input type="text" name="year" id="year" value="{{$idPelicula['year']}}" class="form-control">
            </div>

            <div class="form-group">
            	<label for="director">Director</label>
               <input type="text" name="director" id="director" value="{{$idPelicula['director']}}" class="form-control">
               
            </div>

            <div class="form-group">
               <label for="poster">Poster</label>
               
               <img src="{{$idPelicula['poster']}}" style="height:200px"/>
            </div>

            <div class="form-group">
               <label for="synopsis">Resumen</label>
               <input name="synopsis" id="synopsis" value="{{$idPelicula['synopsis']}}" class="form-control"></input>
            </div>

            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Añadir película
               </button>
            </div>
</form>
            {{-- TODO: Cerrar formulario --}}

         </div>
      </div>
   </div>
</div>

@stop