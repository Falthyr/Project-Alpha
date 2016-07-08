<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
    	<script	src="js/jquery-2.2.4.js" ></script>
		<script src="js/bootstrap.min.js"></script>
    	
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
        

    </body>
</html>