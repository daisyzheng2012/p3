<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title','P3 - Lorem and Random user Generator')
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>


    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse narbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="http://p1.jingjingzheng.me">Home</a>
            </div>
                <!-- <ul class="nav navbar-nav">
                <li class="active"><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul> -->
        </div>
    </nav>

    <header>
        @yield('header')
    </header>
    <hr>
    <div class="container">
        <section>
            {{-- main content --}}
            @yield('content')
        </section>
    </div>
    <hr>
    <div class="footer">
        <div class="container-fluid text-center">
          <p class="text-muted">daisy@dynamic web application, {{date('Y')}}</p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>

</body>
</html>
