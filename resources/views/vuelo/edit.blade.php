@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/vuelo/'.$vuelo->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('vuelo.form')

</form>
</div>
@endsection