@extends('layouts.app')
@section('content')
<div class="container">
<br>
<h1 style="text-align: center;">Vuelo   <a class="btn btn-outline-success btn-sm" href="{{ url('vuelo/create') }}">Agregar</a></h1>
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
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Num. Plazas</th>
            <th scope="col">Ciudad Origen</th>
            <th scope="col">Estado Origen</th>
            <th scope="col">País Origen</th>
            <th scope="col">Ciudad Destino</th>
            <th scope="col">Estado Destino</th>
            <th scope="col">País Destino</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach( $vuelos as $vuelo)
          <tr>
            <td>{{ $vuelo->id }}</td>
            <td>{{ $vuelo->fecha }}</td>
            <td>{{ $vuelo->hora }}</td>
            <td>{{ $vuelo->numeroPlazas }}</td>
            <td>{{ $vuelo->ciudadOrigen }}</td>
            <td>{{ $vuelo->estadoOrigen }}</td>
            <td>{{ $vuelo->paisOrigen }}</td>
            <td>{{ $vuelo->ciudadDestino }}</td>
            <td>{{ $vuelo->estadoDestino }}</td>
            <td>{{ $vuelo->paisDestino }}</td>
            <td>
                <a class="btn btn-outline-warning" href="{{ url('/vuelo/'.$vuelo->id.'/edit') }}">Editar</a>
                <form action="{{ url('/vuelo/'.$vuelo->id) }}" method="post">
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