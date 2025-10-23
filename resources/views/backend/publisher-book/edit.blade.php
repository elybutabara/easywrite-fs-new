@extends('backend.layout')

@section('title')
    <title>Edit {{ $book['title'] }} &rsaquo; Easywrite Admin</title>
@stop

@section('content')
    <div class="container padding-top">
        <div class="row">
            @include('backend.publisher-book.partials.form')
        </div>
    </div>

    @include('backend.publisher-book.partials.delete')
@stop
