@extends('frontend.layout')

@section('title')
	<title>Easywrite &rsaquo; Free Manuscripts</title>
@stop

@section('content')
	<div class="container terms-page">
		<div class="col-xs-12 py-5">
			{!! App\Settings::optInTerms() !!}
		</div>
	</div>
@stop