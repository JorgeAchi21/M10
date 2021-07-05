@extends ('layouts.plantillaB')

@section ('title', 'Index')

@section ('content')
<div class="jumbotron">
    
    <p class="text-center h3 text-primary">Create New Book:</p>
    <p>Ruta envio form por post: {{route('catalog.createStore')}}</p>

    <form action="{{route('catalog.createStore')}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="titulo">Titulo: *(min 5, max 50)</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}">
        @error('titulo') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
        <label for="autor">Autor: *(min 5, max 50)</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{old('autor')}}">
        
        @error('autor') 
          <br><small class="text-danger">*{{$message}}</small><br>
        @enderror
      </div>

      <div class="form-group">
          <label for="fecha">Fecha:  *(fecha valida)</label>
          <input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha')}}">

          @error('fecha') 
            <br><small class="text-danger">*{{$message}}</small><br>
          @enderror
      </div>

      <div class="form-group">
          <label for="opinion">Opinion: *(num entre 1 -10)</label>
          <input type="number" class="form-control" id="opinion" name="opinion" value="{{old('opinion')}}">

          @error('opinion') 
            <br><small class="text-danger">*{{$message}}</small><br>
          @enderror
      </div>

      <div class="form-group">
          <label for="precio">Precio: *(numerico entre 1 - 200)</label>
          <input type="number" class="form-control" id="precio" name="precio" value="{{old('precio')}}">

          @error('precio') 
            <br><small class="text-danger">*{{$message}}</small><br>
          @enderror
      </div> 
      <div class="text-info">Los campos con * son obligatorios</div>

      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
