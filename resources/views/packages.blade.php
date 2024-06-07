@extends('layouts.Header')

@section('main')

<style>
    .place-img img{
        width: 370px; /* atur lebar gambar */
        height: 324px;
    }
    
    .blog-img img{
        width: 570px; /* atur lebar gambar */
        height: 369px;
    }
    
    </style>
    
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            {{-- <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
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
        <!-- slider Area End-->

        <!-- Favourite Places Start -->
        <div class="favourite-place place-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Kebun</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($wisata as $item)
                        
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <?php             
                                    $imageSrc =  $item['gambar'];;
                                ?>
                                <img src="{{ $imageSrc }}" alt="">
                            </div>
                            
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <h3><a href="wisata/{{ $item['_id'] }}">{{$item["judul"] ? $item["judul"] : '' }}</a></h3>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <li><i class="far fa-clock"></i>{{$item["Kontak"] ? $item["Kontak"] : '' }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$item["wilayah"] ? $item["wilayah"] : '' }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
        </div>
        <!-- Favourite Places End -->

        <!-- Pagination-area Start -->
        <div class="pagination-area pb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                  <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted left-arrow"></span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                  <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                                </ul>
                              </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination-area End -->
    </main>
    @endsection