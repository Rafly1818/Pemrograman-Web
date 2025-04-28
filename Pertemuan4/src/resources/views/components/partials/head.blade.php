@php
    $seo = \App\Models\Seo::first();
@endphp


<head>
	<meta charset="utf-8">
	<title>{{ $seo->title ?? 'Default Title' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="{{ $seo->description ?? 'Default description' }}">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<meta name="keywords" content="{{ $seo->keywords ?? 'Default, Keywords' }}">

	@if(!empty($seo->canonical_url))
		<link rel="canonical" href="{{ $seo->canonical_url }}">
	@endif

	<meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">
	
	@if(!empty($seo->og_image))
		<meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}">
	@endif
	
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/brands.css')}}">
	<link rel="stylesheet" href="{{ asset('front/plugins/font-awesome/solid.css')}}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
</head>