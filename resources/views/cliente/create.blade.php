@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/cliente') }}" method="post" enctype="multipart/form-data">
@csrf

@include('cliente.form')

</form>
</div>
@endsection