<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title', 'Laracasts')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    </head>
    <body>
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a> us to learn more.</li>
            </ul>
            <br>
            @yield('content')
        </div>
    </body>
</html>