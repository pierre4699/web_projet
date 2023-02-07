<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>

<nav>
    <div class="nav-wrapper blue accent-1">
        <a href="#" class="brand-logo center"><img style="width: 20vh" src="/logo_showup.png"></a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="#">Accueil</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            @auth
                <li><a href="{{ url('/dashboard') }}" class="">Dashboard</a></li>
            @else

                <li><a href="{{ route('login') }}" class="">Se connecter</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="">S'inscrire</a></li>
                @endif
            @endif
        </ul>
    </div>
</nav>

@yield("content")
</body>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</html>
