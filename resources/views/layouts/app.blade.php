<!doctype html>
<html lang="en">
    <head>
        <title>Serach Functionality</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{csrf_token()}}"/>
        <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- Jquerry script link  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
           @yield('content')
    </body>

</html>
