@extends ('layouts.plantillaB')

@section ('title', 'Index')

@section ('content')
<?php
//Array de datos de ejemplo:
$biblioRDL[1][1] = 'Reina roja';
$biblioRDL[1][2] = 'Juan Gómez-Jurado';
$biblioRDL[1][3] = '2020-01-21';
$biblioRDL[1][4] = 5;
$biblioRDL[1][5] = 19;

$biblioRDL[2][1] = 'Linea de fuego';
$biblioRDL[2][2] = 'Arturo Pérez-Reverte';
$biblioRDL[2][3] = '2020-02-12';
$biblioRDL[2][4] = 5;
$biblioRDL[2][5] = 21; 

$biblioRDL[3][1] = 'Tierra';
$biblioRDL[3][2] = 'Eloy Moreno';
$biblioRDL[3][3] = '2019-04-15';
$biblioRDL[3][4] = 5;
$biblioRDL[3][5] = 19;

$biblioRDL[4][1] = 'Largo petalo de mar';
$biblioRDL[4][2] = 'Isabel Allende';
$biblioRDL[4][3] = '2018-06-20';
$biblioRDL[4][4] = 5;
$biblioRDL[4][5] = 19;

$biblioRDL[5][1] = 'Sidi';
$biblioRDL[5][2] = 'Arturo Pérez-Reverte';
$biblioRDL[5][3] = '2017-09-15';
$biblioRDL[5][4] = 5;
$biblioRDL[5][5] = 19;
?>

<div class="jumbotron">
    
  <p class="text-center h3 text-primary">Edit a book:</p>
  <p>Ruta envio form por post: {{route('catalog.editStore', $id)}}</p> 
  <form action="{{route('catalog.editStore', $id)}}" method="POST">
    @csrf
    @method('PUT')

    <p>ID: <span class="text-primary">{{$id}}<span></p>
    <div class="form-group">
      <label for="titulo">Titulo: *(min 5, max 15)</label>
      <input type="text" class="form-control" id="titulo" name="titulo" 
      value="{{old('titulo', $biblioRDL[$id][1])}}">

      @error('titulo') 
        <br><small class="text-danger">*{{$message}}</small><br>
      @enderror
    </div>

    <div class="form-group">
      <label for="autor">Autor: *(min 5, max 15)</label>
      <input type="text" class="form-control" id="autor" name="autor" 
      value="{{old('autor', $biblioRDL[$id][2])}}">

      @error('autor') 
        <br><small class="text-danger">*{{$message}}</small><br>
      @enderror
    </div>

    <div class="form-group">
        <label for="fecha">Fecha:  *(fecha valida)</label>
        <input type="date" class="form-control" id="fecha" name="fecha" 
        value="{{old('fecha', $biblioRDL[$id][3])}}">

        @error('fecha') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
    </div>

    <div class="form-group">
        <label for="opinion">Opinion: *(num entre 1 -10)</label>
        <input type="numeric" class="form-control" id="opinion" name="opinion" 
        value="{{old('opinion', $biblioRDL[$id][4])}}">

        @error('opinion') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
    </div>

    <div class="form-group">
        <label for="precio">Precio: *(numerico entre 1 - 200)</label>
        <input type="numeric" class="form-control" id="precio" name="precio" 
        value="{{old('precio', $biblioRDL[$id][5], 5)}}">

        @error('precio') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
    </div> 
    <div class="text-info">Los campos con * son obligatorios</div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

</div>
@endsection
