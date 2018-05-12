@extends('templates.app')

@section('content')
    <header id="header">
        @include('templates.navbar')
 
        <div class="header-blurb">
            <p aos-animate data-aos="zoom-in">
                <span class="counter">{{ $count }}</span><br>
                Boutiques<br> acceptent les
                <span class="header-blurb-underline">bitcoins</span>
            </p>
            <p class="header-blurb-cta" aos-animate data-aos="fade-up">
                Pourquoi pas la votre ?<br>
                <a href="{{ route('more') }}" class="btn">EN SAVOIR PLUS</a>
            </p>
        </div>
    </header>

    <section id="map">
        <div class="container">
            <h2>Liste des boutiques</h2>

            <div id="map-google" aos-animate data-aos="fade-up"></div>
        </div>
    </section>

    @include('templates/footer')
@endsection