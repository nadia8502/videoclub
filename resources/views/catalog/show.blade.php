@extends('layouts.master')
@section('content')
Listado peliculas
<div class="row">
	<div class="col-sm-4">
		<img src="{{$pelicula->poster}}" style="height:200px"/>

	</div>
<div class="col-sm-8">
	
{{$pelicula->title}}
{{$pelicula->year}}
{{$pelicula->director}}
{{$pelicula->synopsis}}
<br>
@if($pelicula['rented'] == false)
	<strong>Pelicula Disponible</strong><br>
	<a href="{{ url('catalog/create/') }}" type="button" class="btn btn-primary" >Alquilar Pelicula</a>

	@else
	<strong>Pelicula Alquilada</strong>
	<a type="button" class="btn btn-danger" >Devolver Pelicula</a>

	@endif


	<a href="{{ url('/catalog/edit/' . $pelicula->id ) }}" type="button" class="btn btn-warning" >Editar Pelicula</a>


	<a href="{{'/catalog'}}" type="button" class="btn btn-default" >Volver al listado</a>
</div>
</div>
@stop