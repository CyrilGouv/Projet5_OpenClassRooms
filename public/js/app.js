$(document).ready(function() {
    /* Counter Up Initialisation */
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });
})

/* AOS Initialisation */
AOS.init();



/* Google Maps */
const map = new Map;
// Check if map "exists" to avoid console errors & optimize
if (Object.getOwnPropertyNames(map).length !== 0) {
    map.init();

    shops.bitcoins.forEach(shop => {
        // Ajoute un Marker pour chaque station
        map.addMarkers(shop.lat, shop.lng);

        // Récupère les infos de la boutique au click sur le marker
        map.clickMarkers(shop);
    });
}


/* CoinMarketCap API */
if (window.location.href !== 'http://127.0.0.1:8000/') {
    const cryptoPrice = new CryptoPrice;

    cryptoPrice.getData()
        .then(data => {
            document.querySelector('.btcPrice').innerHTML = Math.round(data.data[1].quotes.EUR.price);
            document.querySelector('.ethPrice').innerHTML = Math.round(data.data[1027].quotes.EUR.price);
            document.querySelector('.ltcPrice').innerHTML = Math.round(data.data[2].quotes.EUR.price);
        })
        .catch(err => console.log(err));
}



