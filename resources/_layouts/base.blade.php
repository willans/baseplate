<!doctype html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
	@section('head')
		@include('_layouts/partials/meta')

		@include('_layouts/partials/tracking')
	@show
</head>
<body>
	@section('app:before')
		@include('_layouts/partials/tracking', ['body' => true])

		@include('_layouts/partials/accessibility-skip-links')

		@include('_layouts/partials/outdated-browser')
	@show

	<div id="app" v-cloak>
		@yield('app')
	</div>

	@section('app:after')
		<script src="https://polyfill.io/v3/polyfill.min.js?features={{ implode('%2C', [
			'Array.from',
			'Array.prototype.find',
			'Array.prototype.includes',
			'Element.prototype.classList',
			'Element.prototype.matches',
			'IntersectionObserver',
			'Promise',
		]) }}"></script>
		<script src="{{ mix('js/app.js', 'assets/compiled') }}" async></script>
	@show
</body>
</html>
