
@extends('layouts.master')

@section('content')

    Pantalla de informacion
    <div class="row">

<div class="col-sm-4">

<img src="{{$cliente->imagen}}" style="height:200px" alt="{{$cliente->imagen}}"/>

</div>
<div class="col-sm-8">

<h1>{{$cliente->nombre}}</h1>
<p>{{$cliente->fecha_de_nacimiento}}</p>
<p>{{$cliente->correo}}</p>
<?php $actual_link = "$_SERVER[REQUEST_URI]";
$key = explode("/", $actual_link);
?>

<a href="{{ url('/catalog/edit/'.$cliente->id) }}" class="btn btn-warning" role="button">Editar</a>
<a href="{{ url('/catalog') }}" class="btn btn-info" role="button">Volver</a>

</div>
</div>

@stop

