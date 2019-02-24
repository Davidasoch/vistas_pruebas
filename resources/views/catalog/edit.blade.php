
@extends('layouts.master')

@section('content')

    Pantalla de edicion del catalogo 
    <?php
    echo $cliente->id;
?>

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar cliente
         </div>
         <div class="card-body" style="padding:30px">

         <form action="/catalog/edit" method="POST">
         <input type="hidden" name="_method" value="PUT">

            {{-- TODO: Protección contra CSRF --}}

            {{ csrf_field() }} 

            <div class="form-group">
               <label for="title">Nombre</label>
               <input type="text" name="title" id="title" class="form-control" value="{{$cliente->nombre}}">
            </div>

            <div class="form-group">
            <label for="title">Imagen</label> <br>
            <input type="file" name="image" id="image">
            </div>

            <div class="form-group">
            <label for="title">Fecha de nacimiento</label>
            <input type="date" name="fecha" class="form-control">
            </div>

            <div class="form-group">
            <label for="title">E-mail</label>
            <input type="email" name="email" class="form-control">
            </div>
           
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar cliente
               </button>
            </div>
        </form>

         </div>
      </div>
   </div>
</div>


@stop


