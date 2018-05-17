<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Annuaire spécialisé dans l'indexation des boutiques et professionnels acceptant le Bitcoin et les cryptomonnaies comme moyen de paiement" />
    <meta name="keywords" content="Bitcoin, Altcoin, BTC, crypto, cryptomonnaie, annuaire" />
    <meta name="author" content="Cyril Gouverneur" />
    <meta name="copyright" content="© {{ config('app.name') }}" />
    
    
    <!-- Open Graph data -->
    <meta property="og:title" content="Vous recherchez où depensez vos bitcoin ?"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.lafrenchcoin.com/"/>
    <meta property="og:image" content="http://www.lafrenchcoin.com/"/>
    <meta property="og:description" content="Annuaire spécialisé dans l'indexation des boutiques et professionnels acceptant le Bitcoin et les cryptomonnaies comme moyen de paiement"/>
    
    
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Google Font Quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500,700" rel="stylesheet">

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- AOS Cdn -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    @yield('content')

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="{{ asset('js/plugins/counterup.js') }}"></script>
    
    <!-- Google Maps API -->
    @if (Route::is('home'))
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl5rd08j7iXLhYA2KVVQiT_O5lJoPB1Og"></script>
        <script src="{{ asset('js/plugins/markerclusterer.js') }}"></script>
        <script src="{{ asset('js/class/Map.js') }}"></script>
    @endif
    <!-- AOS JS Cdn -->
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

    <!-- Coin Market Cap API -->
    @if (Route::is('more') || Route::is('contact') || Route::is('mentions') || Route::is('mentions'))
        <script src="{{ asset('js/class/CryptoPrice.js') }}"></script>
    @endif

    <script src="{{ asset('js/front.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>