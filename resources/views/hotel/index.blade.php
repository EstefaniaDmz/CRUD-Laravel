@extends('layouts.app')
@section('content')
<div class="container">
<br>
<h1 style="text-align: center;">Hotel   <a class="btn btn-outline-success btn-sm" href="{{ url('hotel/create') }}">Agregar</a></h1>
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Cambio detectado: </strong> 
      {{ Session::get('mensaje') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> 
@endif  
<div class="table-responsive">
    <br>
    <table class="table table-striped table-bordered" style="vertical-align: middle; text-align: center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Num. Plazas</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>C.P.</th>
                <th>Ciudad</th>
                <th>Estado</th>
                <th>País</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $hotels as $hotel)
            <tr>
                <td>{{ $hotel->id }}</td>
                <td>{{ $hotel->nombre }}</td>
                <td>{{ $hotel->telefono }}</td>
                <td>{{ $hotel->numeroPlazas }}</td>
                <td>{{ $hotel->calle }}</td>
                <td>{{ $hotel->colonia }}</td>
                <td>{{ $hotel->cp }}</td>
                <td>{{ $hotel->ciudad }}</td>
                <td>{{ $hotel->estado }}</td>
                <td>{{ $hotel->pais }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="{{ url('/hotel/'.$hotel->id.'/edit') }}">Editar</a>
                    <form action="{{ url('/hotel/'.$hotel->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Seguro de eliminar el registro?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection