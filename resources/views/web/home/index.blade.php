@extends('web.layout.main')

@section('content')
	<div>
		欢迎来到首页
	</div>
	@component('web.components.alter')
		@slot('title')
			Forbidden
		@endslot
		<div>You are not allowed to access this resource!</div>
	@endcomponent
@endsection

@push('script')
	<script>

	</script>
@endpush

@prepend('style')
	<style lang="stylus">

	</style>
@endprepend
