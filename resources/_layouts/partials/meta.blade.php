<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#ff585d">

<title>{{ $page->title }}</title>
<meta name="description" content="{{ $page->description }}">

<link rel="icon" type="image/png" href="/assets/static/img/meta/favicon-32.png">
<link rel="apple-touch-icon" href="/assets/static/img/meta/favicon-180.png">

<link rel="canonical" href="{{ $page->getUrl() }}">

<link rel="stylesheet" href="{{ mix('css/app.css', 'assets/compiled') }}">

<meta property="og:title" content="{{ $page->share_title ?? $page->title ?? null }}">
<meta property="og:description" content="{{ $page->share_description ?? $page->description ?? null }}">
<meta property="og:type" content="{{ $page->type ?? null }}">
<meta property="og:url" content="{{ $page->getUrl() ?? null }}">
<meta property="og:site_name" content="{{ $page->site_name ?? null }}">
<meta property="og:image" content="{{ $page->social_image ?? null }}">
<meta name="twitter:card" content="summary_large_image">
