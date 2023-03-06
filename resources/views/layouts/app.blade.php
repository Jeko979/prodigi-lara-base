<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlehead')</title>
</head>
<style>
    table,td,th{
        border: 1px solid black;
    }
    h1{ 
        text-align: center;
        color:red;
       
    }
</style>

<body>
    @yield('content')
</body>
</html>