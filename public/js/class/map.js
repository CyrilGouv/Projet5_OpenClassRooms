class Map {
    constructor() {
        this.carte = document.getElementById('map-google');

        // Latitude et longitude du centre de la France
        this.lat = 46.52863469527167;
        this.lng = 2.43896484375;

        this.map = null;
        this.markers = null;

        this.currentInfos = null;
    }


    // Init de la Map
    init() {
        this.map = new google.maps.Map(this.carte, {
            center: { lat: this.lat, lng: this.lng },
            zoom: 6,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
            },
            styles: [
                {
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#f5f5f5"
                    }
                  ]
                },
                {
                  "elementType": "labels.icon",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#616161"
                    }
                  ]
                },
                {
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    {
                      "color": "#f5f5f5"
                    }
                  ]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#bdbdbd"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#eeeeee"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#757575"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#e5e5e5"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#ffffff"
                    }
                  ]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#757575"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#dadada"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#616161"
                    }
                  ]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                },
                {
                  "featureType": "transit.line",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#e5e5e5"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#eeeeee"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#c9c9c9"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                }
            ]
        });
    }


    // Ajoute les Markers à la Map
    addMarkers(lat, lng) {
      const latLng = new google.maps.LatLng(lat, lng);

      this.markers = new google.maps.Marker({
          position: latLng,
          map: this.map
      });
    }


    // Gère le click pour chaque Markers
    clickMarkers(shop) {   

      const shopBlurb = 
        '<div id="shopName">' +
          '<h3>' + shop.name + '</h3>' +
          '<p><i class="fa fa-map-marker" aria-hidden="true"></i> ' + shop.address + '</p>' +
        '</div>'
      ;

      const shopWebsite     = shop.website !== null ? '<div id="shopWebsite"><i class="fa fa-globe" aria-hidden="true"></i> <a href="' + shop.website + '" target="_blank">' + shop.website + '</a></div>' : '';
      const shopPhone       = shop.phone !== null ? '<div id="shopPhone"><i class="fa fa-mobile" aria-hidden="true"></i> ' + shop.phone + '</div>' : '';
      const shopEmail       = shop.email !== null ? '<div id="shopEmail"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:' + shop.email + '">' + shop.email + '</a></div>' : '';
      const shopFacebook    = shop.facebook !== null ? '<span id="shopFacebook"><a href="' + shop.facebook + '" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></span>' : '';
      const shopTwitter     = shop.twitter !== null ? '<span id="shopTwitter"><a href="' + shop.twitter + '" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></span>' : '';
      const shopInstagram   = shop.instagram !== null ? '<span id="shopInstagram"><a href="' + shop.instagram + '" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>' : '';
      const shopDescription = '<div id="shopDesc"><i class="fa fa-info-circle" aria-hidden="true"></i> ' + shop.description + '</div>'; 

      const shopContent = shopBlurb + shopWebsite + shopEmail + shopPhone + shopFacebook + shopTwitter + shopInstagram + shopDescription;

      const infos = new google.maps.InfoWindow({
        content: shopContent,
        maxWidth: 250
      });

      this.markers.addListener('click', (e) => {
        // Permet d'afficher q'une seule infoWindow à la fois
        if (this.currentInfoWindow != null) { 
            this.currentInfoWindow.close(); 
        } 
        // Gère l'affichage des infos de la station
        infos.open(this.map, this.markers);
        infos.setPosition(e.latLng);
        this.currentInfoWindow = infos;
      });
    }

}