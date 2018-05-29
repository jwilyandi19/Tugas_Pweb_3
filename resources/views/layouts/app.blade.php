<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	@include('layouts.head')
<body>
	@include('layouts.nav')
    @yield('content')
</body>
<style>
	navbar {
		margin-bottom: 100px;
	}
</style>
</html>
