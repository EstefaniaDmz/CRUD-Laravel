@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/hotel') }}" method="post" enctype="multipart/form-data">
@csrf

@include('hotel.form')

</form>
</div>
@endsection