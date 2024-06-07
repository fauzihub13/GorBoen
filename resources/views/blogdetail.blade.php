@extends('layouts.HeaderID')

@section('main')
<style>
   .place-img img{
       width: 370px; /* atur lebar gambar */
       height: 324px;
   }
   
   .blog_item_img img{
       width: 800px; /* atur lebar gambar */
       height: 500px;
   }
   
   </style>
   <div class="slider-area ">
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="/assets/img/hero/contact_hero.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2></h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <div class="blog_item_img">
                        <?php             
                        $imageSrc = $post["gambar"];
                        ?>
                            <img src="{{ $imageSrc }}" alt="">                                
                     </div>
                  <div class="blog_details">
                     <h2>{{ $post["judul"] ? $post["judul"] : '' }}
                     </h2>
                     
                     <p class="excert">
                        @php
                        $paragraphs = explode("\n", $post["detail_berita"]);
                        foreach ($paragraphs as $paragraph) {
                                echo "<p>$paragraph</p>";
                        }
                              @endphp
                     </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   @endsection