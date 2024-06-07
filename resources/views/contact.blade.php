@extends('layouts.Header')

@section('main')
    <!-- slider Area Start-->
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<style>
    /* CSS untuk warna hijau yang berbeda */
    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        color: #fff;
        text-align: center;
        text-decoration: none;
    }

    /* Warna hijau yang berbeda */
    .green1 {
        background-color: #4CAF50;
    }

    .green2 {
        background-color: #45A049;
    }

    .green3 {
        background-color: #3F9142;
    }

    .green4 {
        background-color: #38963F;
    }

    .green5 {
        background-color: #328E3A;
    }

    .green6 {
        background-color: #2C8735;
    }

    .img-style {
    display: block;
    margin: auto; /* Untuk posisi gambar di tengah */
    border-radius: 10px; /* Untuk sudut gambar yang bulat */
    max-width: 100%; /* Gambar tidak melebihi lebar kontainer */
    height: auto; /* Gambar disesuaikan tingginya sesuai aspek ratio */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk gambar */
}
</style>
<body>
    <div class="slider-area">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <img src="assets/img/gallery/IMG_1064.PNG" alt="Group Photo" class="img-style">
            </div>
            <button class="button green1">Rajhaga Jevanya Meliala</button>
            <button class="button green2">Mia Putri Yeza</button>
            <button class="button green3">Syifa Nursaadah</button>
            <button class="button green4">Fauzi Adi Saputra</button>
            <button class="button green5">Muhammad Farhan Silalahi</button>
            <button class="button green6">Ester Olivia</button>
            
        </div>
    </section>
</body>

</html>

    <!-- ================ contact section end ================= -->
    
    @endsection