$(document).ready(function() {
    /* Counter Up Initialisation */
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
})

/* AOS Initialisation */
AOS.init();


const home = 'http://127.0.0.1:8000/';
/* Google Maps */

// Check if map "exists" to avoid console errors & optimize
if (window.location.href === home) {
    const map = new Map;
    map.init();

    shops.bitcoins.forEach(shop => {
        // Ajoute un Marker pour chaque station
        map.addMarkers(shop.lat, shop.lng);

        // Récupère les infos de la boutique au click sur le marker
        map.clickMarkers(shop);

    });
    
    // On groupe les Markers grâce à MarkerClusterer
    map.markerClusterer(map.map, map.markersArr);
    
}


/* CoinMarketCap API */
if (window.location.href !== home) {
    const cryptoPrice = new CryptoPrice;

    cryptoPrice.getData()
        .then(data => {
            document.querySelector('.btcPrice').innerHTML = Math.round(data.data[1].quotes.EUR.price);
            document.querySelector('.ethPrice').innerHTML = Math.round(data.data[1027].quotes.EUR.price);
            document.querySelector('.ltcPrice').innerHTML = Math.round(data.data[2].quotes.EUR.price);
        })
        .catch(err => console.log(err));
}



