<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    </head>
    <style>
        @media screen and (min-height: 500px;){}
        </style>
    <body>
        <header style="background-color: #224C83;, height: 20px;">
            <p style="color: white; padding: 10px;">This is a header</p>
        </header>
        @include('navbar')
        @yield('page')
    </body>
        <footer style="background-color: #404552;position: fixed; left:0; bottom: 0;width:100%;text-align:center; ">
            <p style="color: white;">This is the footer nweofveiuiubcibireubiubiuwbriuvbubefbubvtiuwbib</p>
        </footer>
    
</html>