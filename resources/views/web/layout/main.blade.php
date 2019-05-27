<!DOCTYPE>
<html>
<head>
	<title>@yield('title')</title>

</head>
<body>
	@include('web/layout/header')
	@include('web/layout/sider')
	@yield('content')
	@include('web/layout/footer')
	@stack('script')
	@stack('style')
</body>
</html>
