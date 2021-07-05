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
    
    <p class="text-center h3">Show:</p>
    <p>id: <span class="text-primary">{{$id}}</span></p>
    <p>Titulo: <span class="bg-secondary text-light"> {{$biblioRDL[$id][1]}}</span></p>
    <p>Autor: <span class="text-success">   {{$biblioRDL[$id][2]}}</p>
    <p>Fecha:   {{$biblioRDL[$id][3]}}</p>
    <p>Opiniones:  {{$biblioRDL[$id][4]}}</p>
    <p>Precio:  {{$biblioRDL[$id][5]}}</p>
    
</div>
@endsection
