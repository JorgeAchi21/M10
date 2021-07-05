@extends ('layouts.plantillaB')

@section ('title', 'Index')

@section ('content')
<?php
//Array de datos:
$biblioRDL[1][1] = 'Reina roja';
$biblioRDL[1][2] = 'Juan Gómez-Jurado';
$biblioRDL[1][3] = 2021;
$biblioRDL[1][4] = 5;
$biblioRDL[1][5] = 19.85;

$biblioRDL[2][1] = 'Linea de fuego';
$biblioRDL[2][2] = 'Arturo Pérez-Reverte';
$biblioRDL[2][3] = 2020;
$biblioRDL[2][4] = 5;
$biblioRDL[2][5] = 21.75; 

$biblioRDL[3][1] = 'Tierra';
$biblioRDL[3][2] = 'Eloy Moreno';
$biblioRDL[3][3] = 2019;
$biblioRDL[3][4] = 5;
$biblioRDL[3][5] = 19.85;

$biblioRDL[4][1] = 'Largo petalo de mar';
$biblioRDL[4][2] = 'Isabel Allende';
$biblioRDL[4][3] = 2018;
$biblioRDL[4][4] = 5;
$biblioRDL[4][5] = 19.85;

$biblioRDL[5][1] = 'Sidi';
$biblioRDL[5][2] = 'Arturo Pérez-Reverte';
$biblioRDL[5][3] = 2017;
$biblioRDL[5][4] = 5;
$biblioRDL[5][5] = 19.85;
?>

<div class="jumbotron">
    
  <p class="text-center h3 text-primary">Registro eliminado:</p>

  <p>El registro con id: <strong>{{$id}}</strong>  ha sido eliminado correctamente...</p>

  <a href="{{url('/catalog')}}">Regresar a home.</a>
</div>
@endsection
