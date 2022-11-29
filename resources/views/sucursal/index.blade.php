@extends('layouts.app')
@section('content')
<div class="container">
    <br>
<h1 style="text-align: center;">Sucursal   <a class="btn btn-outline-success btn-sm" href="{{ url('sucursal/create') }}">Agregar</a></h1>
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Cambio detectado: </strong> 
      {{ Session::get('mensaje') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>  
@endif 
<div class="table-responsive">
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
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $sucursals as $sucursal)
            <tr>
                <td>{{ $sucursal->id }}</td>
                <td>{{ $sucursal->nombre }}</td>
                <td>{{ $sucursal->telefono }}</td>
                <td>{{ $sucursal->numeroPlazas }}</td>
                <td>{{ $sucursal->calle }}</td>
                <td>{{ $sucursal->colonia }}</td>
                <td>{{ $sucursal->cp }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="{{ url('/sucursal/'.$sucursal->id.'/edit') }}">Editar</a>
                    <form action="{{ url('/sucursal/'.$sucursal->id) }}" method="post">
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