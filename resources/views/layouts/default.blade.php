<!DOCTYPE html>
<html>

<head>
    <title>@yield('title','Delishows') - Deliver you the delicious</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Delishows</a>
            <ul class="navbar-nav justify-content-end">

                <li class="nav-item"><a class="nav-link" href="#">Sign In</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
                <li class="nav-item"><a class="nav-link" href="/help">Help</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">@yield('content')</div>

</body>

</html>
