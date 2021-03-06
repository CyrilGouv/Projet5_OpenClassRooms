@extends('templates.app')


@section('content')
    @include('templates.header-default')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="more" aos-animate data-aos="fade-right">
                    <h2>Comment accepter le bitcoin ?</h2>
                    <div class="more-content">
                        <p>
                            Vous avez une boutique en ligne ou vous proposez des services payants ? Vous aimeriez accepter le bitcoin comme monnaie mais vous ne savez pas comment faire ? Cette page vous aidera peut-être à y voir plus clair.
                        </p>
                        <p>
                            Il existe plusieurs solutions pour mettre en place un système de paiement avec bitcoin sur un site Internet, nous allons nous pencher sur l’un d’entre eux, le plus simple selon nous : <a href="http://coinbase.com" class="bitcoin">Coinbase.com</a>.
                        </p>
                        <p>
                            Coinbase est un site où vous pourrez d’une part stocker les bitcoins gagné, et d’autre part générer des boutons de paiement, QR Code afin que vous clients puissent vous payer. C’est un intermédiaire technique qui vous mâche le travail.
                        </p>
                        <h3>Que propose Coinbase pour gérer les bitcoins ?</h3>
                        <p>
                            Coinbase propose une interface moderne et simple pour gérer votre argent. Des options basiques telles que l’envoi et la réception de bitcoins mais aussi des fonctions pratiques et rares comme la création de paiements récurrents ou l’envoi de demande de paiement par email (le destinataire n’aura plus qu’à scanner le QR Code pour vous payer).
                        </p>
                        <p>
                            En résumé donc les fonctions utiles pour tous (utilisateurs classiques) :
                        </p>
                        <ul>
                            <li>Envoi et réception de bitcoin</li>
                            <li>Gestion d’un porte monnaie</li>
                            <li>Envoi de demandes de paiements</li>
                            <li>Achat et vente de bitcoins</li>
                        </ul>
                        <h3>Les outils Coinbase pour les marchands</h3>
                        <p>
                            Pour les marchands et prestataires de services, Coinbase vous proposera en outre la création de boutons de paiements, classiques, une API permettant de relier votre système e-commerce à votre compte Coinbase et ainsi automatiser toute votre boutique. A l’heure où nous écrivons ces lignes il existe déjà un plugin WordPress branché à l’API.
                        </p>
                        <p>
                            En résumé quelque soit votre niveau technique vous pouvez d’ores et déjà commencer à accepter les paiements en bitcoin avec Coinbase, au moyen d’un simple bouton / QR Code qu’il faudra poser sur votre site.
                        </p>
                        <p>
                            En tant que marchands vous pourrez donc :
                        </p>
                        <ul>
                            <li>Installer un simple bouton « Payer avec des bitcoins » sur votre site</li>
                            <li>Installer une page de paiement bitcoin</li>
                            <li>Envoyer vos factures (et demandes de paiement) par email à vos clients</li>
                            <li>Connecter votre site à l’API pour automatiser les fonctionnalités</li>
                            <li>Gérer vos bitcoins (les revendre directement ou les transférer sur une autre adresse)</li>
                            <li>Voir vos ventes (statistiques)</li>
                            <li>Voir vos revenus (statistiques)</li>
                            <li><strong>Et donc : Accepter les bitcoins !</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('templates.sidebar')
        </div>
    </div>

    @include('templates.footer')
@endsection