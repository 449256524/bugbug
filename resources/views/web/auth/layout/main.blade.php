<!doctype>
<html>
<head>
	@include('web.layout.head_meta')
	@include('web.layout.head_css')
	@include('web.layout.head_js')
	<title>@yield('title')</title>
	@stack('style')
	@stack('script')
</head>
<body>
	<div class="container-fluid">
		@include('web.auth.layout.header')
		@yield('content')
		@include('web.auth.layout.footer')
	</div>
</body>
</html>
