@extends ('layouts.plantillaB')

@section ('title', 'Index')

@section ('content')
<?php
//Array de datos:
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

    <p class="text-center h3">Catalog:</p>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo:</th>
            <th scope="col">Autor:</th>
            <th scope="col">Fecha:</th>
            <th scope="col">Opinion:</th>
            <th scope="col">Precio:</th>
            <th scope="col">Show:</th>
            <th scope="col">Edit:</th>
            <th scope="col">Delete:</th>
          </tr>
        </thead>
        <tbody>
          <?php
            for ($i = 1; $i <= 5; $i++) {
              echo "<tr>";
              echo "<th>". $i ."</th>";
              echo "<td>". $biblioRDL[$i][1] ."</td>";  
              echo "<td>". $biblioRDL[$i][2] ."</td>";
              echo "<td>". $biblioRDL[$i][3] ."</td>";
              echo "<td>". $biblioRDL[$i][4] ."</td>";
              echo "<td>". $biblioRDL[$i][5] ."</td>";
              echo "<td><a href='catalog/show/" . $i ."' class='text-primary'>Show</a></td>";
              echo "<td><a href='catalog/edit/" . $i."'' class='text-secondary'>Edit</a></td>";
              //echo "<td><a href="catalog/delete/" . $i . "'' class='text-danger'>Delete</a></td>";
              echo "<td>";
          ?>
              <form method="POST" action="{{route("catalog.destroy", $i)}}">
                @csrf
                @method('DELETE')
                <button type="submit" href="" class="btn btn-danger">Delete</button>
              </form>
            <?php
              echo "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>

    
</div>
@endsection
