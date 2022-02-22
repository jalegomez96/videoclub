@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-4">
        <img src="{{$pelicula->poster}}" style="height:600px" />
    </div>
    <div class="col-sm-8">

        <h1>{{$pelicula->title}}</h1>
        <h3><b>Año: </b>{{$pelicula->year}}</h3>
        <h3><b>Director: </b>{{$pelicula->director}}</h3>
        <br>
        <h5><b>Resumen: </b>{{$pelicula->synopsis}}</h5>
        <br>
        <h5><b>Estado: </b>
            @if ($pelicula->rented)
            Película actualmente alquilada
            @else
            Película disponible
            @endif
        </h5>
        <br>
        <div class="d-grid gap-2 d-md-block">
            @if ($pelicula->rented)
            <a class="btn btn-danger" role="button">Devolver película</a>
            @else
            <a class="btn btn-primary" role="button">Alquilar película</a>
            @endif
            <a href="{{ url('/catalog/edit/' . $pelicula->id ) }}" class="btn btn-warning" role="button">Editar película</a>
            <a href="{{ url('/catalog' ) }}" class="btn btn-light" role="button">Volver al listado</a>
        </div>
    </div>
</div>
@stop
