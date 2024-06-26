@extends('layouts.HeaderID')

@section('main')


<div id="map-title">
    <h2>Map Kebun Bogor</h2>
</div>
<div id="map-container">
    <div id="map"></div>
    <div id="sidebar">
        <div class="card">
            <div class="card-content">
                <h2 class="card-title">Informasi Lokasi</h2>
                <div class="card-info" id="sidebar-content">
                    <p><strong>Nama Kebun:</strong> </p>
                    <p><strong>No. HP:</strong> </p>
                </div>
                <button id="btnNavigate" class="navigateButton" data-lat="" data-lng="">Navigate</button>
            </div>
        </div>
    </div>
</div>

<script>

const map = L.map('map').setView([-6.593154, 106.808416], 13);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    tileSize: 512,
    zoomOffset: -1,
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

let userLocationMarker;
let routingControl;

// Konfigurasi ikon kustom
const customIcon = L.icon({
    iconUrl: '/qgis/images/pin.png', // Ganti dengan path ikon kustom Anda
    iconSize: [38, 38], // Sesuaikan ukuran ikon
    iconAnchor: [19, 38], // Titik anchor ikonnya (tengah bawah ikon)
    popupAnchor: [0, -38] // Titik anchor popup (di atas ikon)
});

$.ajax({
    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-pkmqdbd/endpoint/getallwisata', // Ganti URL sesuai dengan endpoint API Anda
    type: 'GET',
    success: function (res) {
        res.forEach(markerData => {
            createMarkerAndPopup(markerData);
        });
    },
    error: function (err) {
        console.log(err);
    }
});



function createMarkerAndPopup(markerData) {
    const marker = L.marker([markerData.lan, markerData.long], { icon: customIcon }).addTo(map);
    const imageSrc = `${markerData.gambar}`;
    const popupContent = `<div><img src="${imageSrc}" alt="Gambar Tempat" style="max-width: 100%; height: auto;"><a href="/wisata/${markerData._id}">${markerData.judul}</a></div>`;
    marker.bindPopup(popupContent, { maxWidth: 300 });

    marker.on('click', function() {
        document.getElementById('sidebar-content').innerHTML = `
            <img src="${imageSrc}" alt="Gambar Tempat" style="max-width: 100%; height: auto;">
            <p><strong>Nama Kebun:</strong> <a href="/wisata/${markerData._id}" style="color: black; text-decoration: none;">${markerData.judul}</a></p>
            <p><strong>No. HP:</strong> ${markerData.Kontak}</p>
        `;
        document.getElementById('btnNavigate').setAttribute('data-lat', markerData.lan);
        document.getElementById('btnNavigate').setAttribute('data-lng', markerData.long);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const userLatitude = position.coords.latitude;
                const userLongitude = position.coords.longitude;
                // const userLatitude = -6.593154;
                // const userLongitude = 106.808416;

                if (routingControl) {
                    map.removeControl(routingControl);
                }

                routingControl = L.Routing.control({
                    waypoints: [
                        L.latLng(userLatitude, userLongitude),
                        L.latLng(markerData.lan, markerData.long)
                    ],
                    routeWhileDragging: false,
                    createMarker: function() { return null; },
                    lineOptions: {
                        addWaypoints: false,
                        styles: [{ color: 'blue', weight: 6 }]
                    }
                }).on('routesfound', function(e) {
                    const route = e.routes[0];
                    const distance = route.summary.totalDistance;
                    const time = route.summary.totalTime;

                    document.getElementById('sidebar-content').innerHTML += `
                        <p><strong>Jarak:</strong> ${(distance / 1000).toFixed(2)} km</p>
                        <p><strong>Perkiraan Waktu Berjalan Kaki:</strong> ${moment.duration(time, "seconds").humanize()}</p>
                        <p><img src="/qgis/images/walk.png" alt="Icon Jalan Kaki" style="width: 24px; vertical-align: middle;"> ${moment.duration(time, "seconds").humanize()}</p>
                    `;
                }).addTo(map);
            });
        }
    });
}

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
        const userLatitude = position.coords.latitude;
        const userLongitude = position.coords.longitude;

        userLocationMarker = L.marker([userLatitude, userLongitude]).addTo(map);
        userLocationMarker.bindPopup("Lokasi Saya").openPopup();
        // map.setView([userLatitude, userLongitude], 13);
        function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Ambil parameter latitude, longitude, dan zoom dari URL
    const lat = getUrlParameter('lat');
    const lng = getUrlParameter('lng');
    const zoom = getUrlParameter('zoom');

    const defaultLat = userLatitude;
    const defaultLng = userLongitude;
    const defaultZoom = 14;

        // Cek apakah nilai parameter URL ada, jika tidak gunakan default
    const mapLat = lat ? parseFloat(lat) : defaultLat;
    const mapLng = lng ? parseFloat(lng) : defaultLng;
    const mapZoom = zoom ? parseInt(zoom) : defaultZoom;
    
    console.log('Latitude:', mapLat);
        console.log('Longitude:', mapLng);
        console.log('Zoom:', mapZoom);
    // Debugging: Log nilai parameter URL

    map.setView([mapLat, mapLng], mapZoom);

    });

}

document.getElementById('btnNavigate').addEventListener('click', function () {
    const destinationLat = parseFloat(this.getAttribute('data-lat'));
    const destinationLng = parseFloat(this.getAttribute('data-lng'));

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            const userLatitude = position.coords.latitude;
            const userLongitude = position.coords.longitude;

            if (routingControl) {
                map.removeControl(routingControl);
            }

            // Ambil parameter latitude dan longitude dari URL
            const lat = getUrlParameter('lat');
            const lng = getUrlParameter('lng');

            // Tentukan nilai default jika tidak ada yang diberikan di URL
            const mapLat = lat ? parseFloat(lat) : destinationLat;
            const mapLng = lng ? parseFloat(lng) : destinationLng;

            var start = L.latLng(userLatitude, userLongitude);
            var end = L.latLng(mapLat, mapLng);

            routingControl = L.Routing.control({
                waypoints: [
                    start,
                    end
                ],
                routeWhileDragging: true,
                lineOptions: {
                    styles: [{ color: 'blue', weight: 6 }]
                }
                
            }).addTo(map);
        });
    }
});



function updateMapWithUserLocation() {
    if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
        const userLatitude = position.coords.latitude;
        const userLongitude = position.coords.longitude;

        // Tambahkan marker untuk lokasi pengguna
        userLocationMarker = L.marker([userLatitude, userLongitude]).addTo(map);
        userLocationMarker.bindPopup("Lokasi Saya").openPopup();

        // Dapatkan parameter latitude, longitude, dan zoom dari URL
        const lat = getUrlParameter('lat');
        const lng = getUrlParameter('lng');
        const zoom = getUrlParameter('zoom');

        // Tentukan nilai default
        const defaultLat = userLatitude;
        const defaultLng = userLongitude;
        const defaultZoom = 17;

        // Cek apakah nilai parameter URL ada, jika tidak, gunakan default
        const mapLat = lat ? parseFloat(lat) : defaultLat;
        const mapLng = lng ? parseFloat(lng) : defaultLng;
        const mapZoom = zoom ? parseInt(zoom) : defaultZoom;

        // Tampilkan nilai lat, lng, dan zoom di console
        

        // Set tampilan peta menggunakan nilai yang diambil dari URL atau default
        map.setView([mapLat, mapLng], mapZoom);
    });
}

}

updateMapWithUserLocation();


</script>
@endsection
