@extends('web.auth.layout.main')

@section('title','登陆')

@section('content')
	<div class="container-fluid login">
		<div class="container login-con">
			<div class="login-adv">
				<img class="login-adv-img" src="https://10wallpaper.com/wallpaper/1366x768/1402/orange_sun_disk_bird-Photo_Wallpaper_1366x768.jpg">
			</div>
			<div class="login-box">

			</div>
		</div>
	</div>
@endsection

@push('style')
	<style>
		.login{
			background: rgb(207, 91, 21);
		}
		.login-con{
			position: relative;
		}
		.login-adv{
			margin: auto;
		}
		.login-adv-img{
			width: 1140px;
			height: 600px;
		}
		.login-box{
			/*position: absolute;*/
			/*width: 350px;*/
			/*height: 404px;*/
		}
	</style>
@endpush

@push('script')
	<script>

	</script>
@endpush
