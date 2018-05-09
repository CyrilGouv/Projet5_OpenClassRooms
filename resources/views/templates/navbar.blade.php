

<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-start center-responsive">
                <div class="header-top-logo">
                    <h1><span class="blue">La</span> French <span class="red">Coin</span></h1>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-end center-responsive">
                <nav class="header-top-menu">
                    <ul class="d-flex">
                        <li class="{{ isActiveRoute('home') }}"><a href="/">Accueil</a></li>
                        <li class="{{ isActiveRoute('more') }}"><a href="{{ route('more') }}">En savoir plus</a></li>
                        <li class="{{ isActiveRoute('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
