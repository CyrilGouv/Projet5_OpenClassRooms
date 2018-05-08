@extends('templates.app')

@section('content')
    <header id="header">
        @include('templates.navbar')
 
        <div class="header-blurb">
            <p>
                <span class="counter">258</span><br>
                Boutiques<br> acceptent les
                <span class="header-blurb-underline">bitcoins</span>
            </p>
            <p class="header-blurb-cta">
                Pourquoi pas la votre ?<br>
                <a href="/en-savoir-plus" class="btn">EN SAVOIR PLUS</a>
            </p>
        </div>
    </header>

    <section id="map">
        <div class="container">
            <h2>Liste des boutiques</h2>

            <div id="map-google"></div>
        </div>
    </section>
@endsection