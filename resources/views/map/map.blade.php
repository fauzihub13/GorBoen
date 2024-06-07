<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Travel HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="/image/x-icon" href="/assets/img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />


		<!-- CSS here -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/css/flaticon.css">
        <link rel="stylesheet" href="/assets/css/slicknav.css">
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/assets/css/themify-icons.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/nice-select.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/custom.css">
        <link rel="stylesheet" href="/qgis/css/leaflet.css">
        <link rel="stylesheet" href="/qgis/css/qgis2web.css">
        <link rel="stylesheet" href="/qgis/css/fontawesome-all.min.css">
   </head>
   <style>
    .header {
        position: fixed; /* Mengatur posisi header tetap */
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Z-index yang lebih tinggi dari elemen peta */
        background-color: #ffffff; /* Warna latar belakang header */
        /* Tambahan properti styling lainnya */
    }

    .map {
        height: 700;
        width: 100%;
    }
    </style>
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header class="z-index">
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
               <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>               
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="/">Home</a></li>
                                            {{-- <li><a href="/aboutus">About US</a></li> --}}
                                            <li><a href="/package">Kebun</a></li>
                                            <li><a href="/blog">Blog</a>
                                            </li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    @yield('main')

    <footer>

        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg" data-background="/assets/img/service/footer_bg.jpg">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="/assets/img/logo/logo2_footer.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>Lorem iaspsum doldfor sit amvset, consectetur adipisicing cvelit csed do eiusmod tempor incididucvccnt ut labovre.</p>
                                </div>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Offers & Discounts</a></li>
                                    <li><a href="#"> Get Coupon</a></li>
                                    <li><a href="#">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>New Products</h4>
                                <ul>
                                    <li><a href="#">Woman Cloth</a></li>
                                    <li><a href="#">Fashion Accessories</a></li>
                                    <li><a href="#"> Man Accessories</a></li>
                                    <li><a href="#"> Rubber made Toys</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Support</h4>
                                <ul>
                                 <li><a href="#">Frequently Asked Questions</a></li>
                                 <li><a href="#">Terms & Conditions</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Privacy Policy</a></li>
                                 <li><a href="#">Report a Payment Issue</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer bottom -->
                <div class="row pt-padding">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                 </div>
             </div>
            </div>
        </div>
        <!-- Footer End-->
 
    </footer>

	<!-- JS here -->
       
    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([[-6.621504250860399, 106.73140381314676], [-6.556330467375253, 106.8278509049287]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({ truncate: { length: 30, location: 'smart' } });
    
        function removeEmptyRowsFromPopupContent(content, feature) {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            var rows = tempDiv.querySelectorAll('tr');
            for (var i = 0; i < rows.length; i++) {
                var td = rows[i].querySelector('td.visible-with-data');
                var key = td ? td.id : '';
                if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                    rows[i].parentNode.removeChild(rows[i]);
                }
            }
            return tempDiv.innerHTML;
        }
    
        var bounds_group = new L.featureGroup([]);
    
        function setBounds() {}
    
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
    
        function pop_kebunbogor_1(feature, layer) {
            var popupContent = '<div class="card">\
                <div class="card-content">\
                    <h2 class="card-title">Informasi Lokasi</h2>\
                    <div class="card-info">\
                        <p><strong>Nama Kebun:</strong> ' + (feature.properties['nama_kebun'] !== null ? feature.properties['nama_kebun'] : 'Tidak tersedia') + '</p>\
                        <p><strong>Alamat Kebun:</strong> ' + (feature.properties['almt_kebun'] !== null ? feature.properties['almt_kebun'] : 'Tidak tersedia') + '</p>\
                        <p><strong>Pemilik:</strong> ' + (feature.properties['pemilik'] !== null ? feature.properties['pemilik'] : 'Tidak tersedia') + '</p>\
                        <p><strong>No. HP:</strong> ' + (feature.properties['no_hp'] !== null ? feature.properties['no_hp'] : 'Tidak tersedia') + '</p>\
                        <p><strong>Email:</strong> ' + (feature.properties['email'] !== null ? feature.properties['email'] : 'Tidak tersedia') + '</p>\
                        <p><strong>URL:</strong> ' + (feature.properties['url_poto'] !== null ? '<a href="' + feature.properties['url_poto'] + '" target="_blank">' + feature.properties['url_poto'] + '</a>' : 'Tidak tersedia') + '</p>\
                    </div>\
                </div>\
            </div>';
            layer.bindPopup(popupContent, { maxHeight: 400 });
            var popup = layer.getPopup();
            var content = popup.getContent();
            var updatedContent = removeEmptyRowsFromPopupContent(content, feature);
            popup.setContent(updatedContent);
        }
    
        function style_kebunbogor_1_0() {
            return {
                pane: 'pane_kebunbogor_1',
                radius: 8.0,
                opacity: 1,
                color: 'rgba(61,128,53,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(84,176,74,1.0)',
                interactive: true,
            }
        }
    
        map.createPane('pane_kebunbogor_1');
        map.getPane('pane_kebunbogor_1').style.zIndex = 401;
        map.getPane('pane_kebunbogor_1').style['mix-blend-mode'] = 'normal';
        var layer_kebunbogor_1 = new L.geoJson(json_kebunbogor_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kebunbogor_1',
            layerName: 'layer_kebunbogor_1',
            pane: 'pane_kebunbogor_1',
            onEachFeature: pop_kebunbogor_1,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_kebunbogor_1_0(feature));
            },
        });
        bounds_group.addLayer(layer_kebunbogor_1);
        map.addLayer(layer_kebunbogor_1);
        setBounds();
        map.setView([-6.630886088137839, 106.83139599479279], 15);

    </script>
        <script src="/qgis/js/qgis2web_expressions.js"></script>
        <script src="/qgis/js/leaflet.js"></script>
        <script src="/qgis/js/leaflet.rotatedMarker.js"></script>
        <script src="/qgis/js/leaflet.pattern.js"></script>
        <script src="/qgis/js/leaflet-hash.js"></script>
        <script src="/qgis/js/Autolinker.min.js"></script>
        <script src="/qgis/js/rbush.min.js"></script>
        <script src="/qgis/js/labelgun.min.js"></script>
        <script src="/qgis/js/labels.js"></script>
        <script src="/qgis/data/kebunpg_1.js"></script>
		<!-- All JS Custom Plugins Link Here here -->
        <script src="/./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="/./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/./assets/js/popper.min.js"></script>
        <script src="/./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="/./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/./assets/js/owl.carousel.min.js"></script>
        <script src="/./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="/./assets/js/wow.min.js"></script>
		<script src="/./assets/js/animated.headline.js"></script>
        <script src="/./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="/./assets/js/jquery.scrollUp.min.js"></script>
        <script src="/./assets/js/jquery.nice-select.min.js"></script>
		<script src="/./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/./assets/js/contact.js"></script>
        <script src="/./assets/js/jquery.form.js"></script>
        <script src="/./assets/js/jquery.validate.min.js"></script>
        <script src="/./assets/js/mail-script.js"></script>
        <script src="/./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="/./assets/js/plugins.js"></script>
        <script src="/./assets/js/main.js"></script>
        
    </body>
</html>