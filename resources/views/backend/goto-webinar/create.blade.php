@extends('backend.layout')

@section('title')
    <title>Create New GoToWebinar &rsaquo; Easywrite Admin</title>
@stop


@section('content')
    <div class="container padding-top">
        <div class="row">
            @include('backend.goto-webinar.partials.form')
        </div>
    </div>
@stop
