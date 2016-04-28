<!DOCTYPE html>
<html>
    <head>
        <title>Little Lady Anne</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        @yield('stylesheet')
    </head>
    <body>
        <div class='container'>
            @yield('content')
        </div>
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        @yield('javascript')
    </body>
</html>