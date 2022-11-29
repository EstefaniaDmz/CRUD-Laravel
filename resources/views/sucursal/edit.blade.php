@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/sucursal/'.$sucursal->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('sucursal.form')

</form>
</div>
@endsection