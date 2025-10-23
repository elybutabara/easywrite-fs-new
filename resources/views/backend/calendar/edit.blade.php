@extends('backend.layout')

@section('title')
<title>Edit Note &rsaquo; Easywrite Admin</title>
@stop


@section('content')
<div class="container padding-top">
<div class="row">
@include('backend.calendar.partials.form')
</div>
</div>
@stop

