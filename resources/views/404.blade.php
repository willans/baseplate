---
permalink: 404.html
---

@extends('_layouts/error')

@section('content')
	<h1>404</h1>

	<p>Page not found.</p>

	<p><a href="{{ $page->links->home }}">Return to the homepage</a></p>
@endsection
