<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Neat and Tidy Services</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="padding: 5px;">
<div class="container">
    <nav>

        <a href="/Customers"><input class="btn btn-primary btn-sm" type="submit" value="View Customers"></a>
        <a href="/Customers/create"><input class="btn btn-primary btn-sm" type="submit" value="Create Customer"></a>

    </nav>

    @yield('content')
</div>
</div>

@yield('footer')
</body>
</html>