@extends('web.auth.layout.main')

@section('title','登陆')

@section('content')
	<div class="container-fluid">
		<div class="login">
			<div class="login-adv">
				<img class="login-adv-img" src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1558953517401&di=783bcc84b75082642dd6b61d3c9f2d52&imgtype=0&src=http%3A%2F%2Fimg.alicdn.com%2Fimgextra%2Fi1%2F1805254909%2FTB2UozlX8xRMKJjy0FdXXaifFXa_%2521%25211805254909-0-daren.jpg">
			</div>
		</div>
	</div>
@endsection

@push('style')
	<style>
		.login{
			background: rgb(249, 79, 2);
		}
		.login-adv-img{
			width: 1140px;
			height: 600px;
		}
	</style>
@endpush

@push('script')
	<script>

	</script>
@endpush
