@extends('backend.layout')

@section('title')
    <title>Create Poem &rsaquo; Easywrite Admin</title>
@stop

@section('content')
    <div class="container padding-top">
        <div class="row">
            @include('backend.poem.partials.form')
        </div>
    </div>

    @include('backend.poem.partials.delete')
@stop
