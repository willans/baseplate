@extends('_layouts/base')

@section('app')
	@include('_layouts/partials/site-header')

	<main id="site-content">
		@yield('content')
	</main>

	@include('_layouts/partials/site-footer')
@endsection
