<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('form.css') }}">
    <link rel="stylesheet" type="text/css" href="1.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
<body>
        <header>
            <div>
                <h1>Car Pooling Website</h1>
        
            </div>     
        </header>
        @yield('content')
</body>>
</html>