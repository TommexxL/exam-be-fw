<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
    <body>

    @include('layout.header')

    <div>
        <ul class="links">
			<li class=""><a href="/home">Home</a></li>
			<li class=""><a href="/courseadd">Add a course</a></li>
		</ul>
    </div>

    @yield('content')

    @include('layout.footer')

    </body>
</html>