@extends('templates.app')


@section('content')
    @include('templates.header-default')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact">
                    <div class="contact-form" aos-animate data-aos="fade-right">
                        <h2>Contact</h2>
                        <p>Vous souhaitez ajouter votre business à notre annuaire ou tout simplement nous contacter, n'hésitez pas !</p>
                        @include('layouts.partials.flash')
                        <form action="{{ route('sendMail') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom : <sup>*</sup></label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom : <sup>*</sup></label>
                                <input type="text" class="form-control" name="prenom">
                            </div>
                            <div class="form-group">
                                <label for="email">Email : <sup>*</sup></label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Sujet : <sup>*</sup></label>
                                <input type="text" class="form-control" name="subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Message : <sup>*</sup></label>
                                <textarea rows="8" type="text" class="form-control" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 more-right" aos-animate data-aos="fade-left">
                <div class="more-widget">
                    <h4>Cours en temps réel</h4>
                    <p><strong>BTC:</strong> € <span class="btcPrice">7694.46</span></p>
                    <p><strong>ETH:</strong> € <span class="ethPrice">617.97</span></p>
                    <p><strong>LTC:</strong> € <span class="ltcPrice">134.87</span></p>
                </div>
                <div class="more-widget">
                    <h4>Dons Bitcoin</h4>
                    <p>
                        Nous acceptons les dons volontiers, ceux-ci nous aident à passer plus de temps sur l'ajoût de nouvelles boutiques et pour la démocratisation des cryptomonnaies.
                    </p>
                    <p><strong>BTC :</strong><br> 1CTATqw9hs78ARVGWiEZbpkZrWUcGyk9hE</p>
                    <p><strong>ETH :</strong><br> 0xC58c0089F15dE67a089326C8FEE95EB914C2b3F1</p>
                    <p><strong>LTC :</strong><br> LXDJjh41AGKMYTydGix1JmYj2M71sH44qp</p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('templates.footer')
@endsection