@extends('web.auth.layout.main')

@section('title','登陆')

@section('content')
	<div id="app" class="container-fluid login">
		<div class="container login-con">
			<div class="login-adv">
				<img class="login-adv-img" src="https://10wallpaper.com/wallpaper/1366x768/1402/orange_sun_disk_bird-Photo_Wallpaper_1366x768.jpg">
			</div>
			<div class="login-box">
				<div class="login-style-select">

				</div>
				<div class="form-group login-form">
					<div class="login-form-title">
						<span>密码登陆</span>
					</div>
					<form action="{{ route('web.post.login') }}">
						<div class="input-group login-form-input">
							<span class="input-group-addon" id="login-addon-account"><span class="glyphicon glyphicon-user"></span></span>
							<input class="form-control" type="text" name="account" placeholder="账号" aria-describedby="login-addon-account">
						</div>
						<div class="input-group login-form-input">
							<span class="input-group-addon" id="login-addon-password"><span class="glyphicon glyphicon-lock"></span></span>
							<input class="form-control" type="password" name="password" placeholder="密码" aria-describedby="login-addon-password">
						</div>
						<div class="login-form-button">
							<button type="button" id="login-from-commit" data-loading-text="Loading..." class="btn btn-danger btn-block" autocomplete="off">登陆</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
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
			top: 80px;
			right: 100px;
			position: absolute;
			width: 350px;
			height: 370px;
			background: white;
			padding: 30px;
		}
		.login-form-title{
			font-size: 18px;
			font-weight: 500;
		}
		.login-form-input{
			margin-top: 20px;
		}
		.login-form-button{
			margin-top: 20px;
		}
	</style>

	{{--	jquery--}}
	<script>
    $('#login-from-commit').on('click', function () {
        var $btn = $(this).button('loading')
        // business logic...
        $btn.button('reset')
    })
	</script>
@endsection
