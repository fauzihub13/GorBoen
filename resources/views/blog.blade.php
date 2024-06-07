@extends('layouts.Header')

@section('main')
<style>
.blog_item {
    margin-bottom: 30px;
}

.blog_item_img img {
    width: 100%;
    height: auto;
}


</style>

     <!-- slider Area Start-->
     <div class="slider-area ">
        <!-- Mobile Menu -->
        {{-- <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
     </div>
     <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        @foreach ($content as $item)

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <?php             
                                $imageSrc = $item['gambar'];;
                            ?>
                            <img src="{{ $imageSrc }}" alt="">                                
                            <a href="#" class="blog_item_date">
                                    <span>{{ Carbon\Carbon::parse($item['tanggal'])->format('F j') }}</span>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="/content/{{ $item['_id'] }}">
                                    <h2>{{$item["judul"] ? $item["judul"] : '' }}</h2>
                                </a>
                                <p class="excert">
                                    @php
                                        $paragraphs = explode("\n", $item['detail_berita']);
                                        $loop = 1;
                                        foreach ($paragraphs as $paragraph) {
                                            if ($loop == 1) {
                                                echo "<p>" . substr($paragraph, 0, 600) . "...</p>";
                                                $loop += 1;
                                            } else {
                                                break; 
                                            }
                                        }
                                    @endphp
                                    
                                </p>
                                
                                
                            </div>
                        </article>

                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            {{-- <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form> --}}
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    @endsection