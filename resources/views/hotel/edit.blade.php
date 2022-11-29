@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/hotel/'.$hotel->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('hotel.form')

</form>
</div>
@endsection