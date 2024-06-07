@extends('layouts.HeaderID')

@section('main')
   
<script src="/qgis/js/qgis2web_expressions.js"></script>
<script src="/qgis/js/leaflet.js"></script>
<script src="/qgis/js/leaflet.rotatedMarker.js"></script>
<script src="/qgis/js/leaflet.pattern.js"></script>
<script src="/qgis/js/leaflet-hash.js"></script>
<script src="/qgis/js/Autolinker.min.js"></script>
<script src="/qgis/js/rbush.min.js"></script>
<script src="/qgis/js/labelgun.min.js"></script>
<script src="/qgis/js/labels.js"></script>
<script src="/qgis/data/kebunbogor_1.js"></script>

<style>
    .card {
            width: 300px; /* Adjust card width as needed */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            margin: 20px auto;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-image img {
            width: 100%;
            height: 200px; /* Adjust image height as needed */
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-info {
            font-size: 14px;
            line-height: 1.5;
        }

        #map-container {
            position: relative; 
            z-index: 99; 
            
        }

        #map {
        width: 100%; 
        height: 400px;
        }

        .blog_item_img img {
            width: 100%; 
            height: auto; 
        }
    
</style>


<div class="slider-area ">
    {{-- <div class="single-slider slider-height2 d-flex align-items-center" data-background="/assets/img/hero/contact_hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post"> 
                    <div class="blog_item_img">
                        <?php             
                        $imageSrc = $post["gambar"];
                        ?>
                        <img src="{{ $imageSrc }}" alt="">                                
                    </div>
                    <div class="blog_details">
                        <h2>{{ $post["judul"] ? $post["judul"] : '' }}</h2>
                        <p class="excert">
                            @php
                            $paragraphs = explode("\n", $post["detail_wisata"]);
                            foreach ($paragraphs as $paragraph) {
                                echo "<p>$paragraph</p>";
                            }
                            @endphp
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" style="z-index: 1;">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget" >
                        <div class="single_sidebar_widget" >
                            <div id="map-container" >  
                                <div id="map" data-lan="{{ $post['lan'] }}" data-long="{{ $post['long'] }} " location="{{ $post['judul'] }}"></div>

                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->

<script>
   const lan = document.getElementById('map').getAttribute('data-lan');
    const long = document.getElementById('map').getAttribute('data-long');
    const Wisata = document.getElementById('map').getAttribute('location');
    
    const map = L.map('map').setView([lan, long], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        tileSize: 512,
        zoomOffset: -1,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let userLocationMarker;

    // Add a marker at the specified lan and long
    const customIcon = L.icon({
    iconUrl: '/qgis/images/pin.png', // Ganti dengan path ikon kustom Anda
    iconSize: [38, 38], // Sesuaikan ukuran ikon
    iconAnchor: [19, 38], // Titik anchor ikonnya (tengah bawah ikon)
    popupAnchor: [0, -38] // Titik anchor popup (di atas ikon)
});

// Tambahkan marker di lokasi lan dan long dengan ikon kustom
const marker = L.marker([lan, long], { icon: customIcon }).addTo(map);
    // Optionally, you can add a popup to the marker
    marker.bindPopup("<a href='/map?lat=" + lan + "&lng=" + long + "&zoom=17'>" + Wisata + "</a>").openPopup();

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            const userLatitude = position.coords.latitude;
            const userLongitude = position.coords.longitude;

            userLocationMarker = L.marker([userLatitude, userLongitude]).addTo(map);
            userLocationMarker.bindPopup("<a href = '/map'>Lokasi Saya</a>").openPopup();
        });
    }
    map.setView([lan, long], 13);


</script>
   
@endsection
