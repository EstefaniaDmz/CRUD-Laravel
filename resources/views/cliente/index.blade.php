@extends('layouts.app')
@section('content')
<div class="container">
<br>
<h1 style="text-align: center;">Cliente   <a class="btn btn-outline-success btn-sm" href="{{ url('cliente/create') }}">Agregar</a></h1>
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
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>C.P.</th>
                <th>ID Hotel</th>
                <th>Regimen Hotel</th>
                <th>ID Sucursal</th>
                <th>ID Vuelo</th>
                <th>Clase Vuelo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellidoPaterno }}</td>
                <td>{{ $cliente->apellidoMaterno }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->calle }}</td>
                <td>{{ $cliente->colonia }}</td>
                <td>{{ $cliente->cp }}</td>
                <td>{{ $cliente->idHotel }}</td>
                <td>{{ $cliente->regimenHotel }}</td>
                <td>{{ $cliente->idSucursal }}</td>
                <td>{{ $cliente->idVuelo }}</td>
                <td>{{ $cliente->claseVuelo }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="{{ url('/cliente/'.$cliente->id.'/edit') }}">Editar</a>
                    <form action="{{ url('/cliente/'.$cliente->id) }}" method="post">
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