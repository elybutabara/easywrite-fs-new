@extends('backend.layout')

@section('title')
<title>Edit {{$testimonial['name']}} &rsaquo; Easywrite Admin</title>
@stop


@section('content')
<div class="container padding-top">
<div class="row">
@include('backend.course.video-testimonials.partials.form')
</div>
</div>
@stop

