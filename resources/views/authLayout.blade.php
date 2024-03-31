<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelista</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('static/img/favicon.svg')}}">

</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                @yield('content')
			</div>
		</div>
	</div>
	</div>
    <script src="{{asset('static/js/feather.min.js')}}"></script>
<script src="{{asset('static/js/app.js')}}"></script>
<script src="{{asset('static/js/vendor/jquery-2.2.4.min.js')}}"></script>
</body>

</html>