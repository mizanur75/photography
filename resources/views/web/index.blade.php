@extends('web.layouts.app')
@section('title','Photography')

@push('css')
@endpush

@section('content')
<div class="content-holder elem scale-bg2 transition3 slid-hol" >
    <!-- Fixed title  -->
    <div class="fixed-title"><span>Home</span></div>
    <!-- Fixed title end -->
    <!--=============== Content ===============-->
    <div class="content full-height">
        <!-- full-height-wrap end  -->
        <div class="full-height-wrap">
            <div class="swiper-container" id="horizontal-slider" data-mwc="1" data-mwa="0">
                <div class="swiper-wrapper">
                    <!--=============== 1 ===============-->
                    <div class="swiper-slide">
                        <div class="bg" style="background-image:url({{asset('web/images/bg/22.jpg')}})"></div>
                        <div class="overlay"></div>
                        <div class="zoomimage">
                          <img src="{{asset('web/images/bg/22.jpg')}}" class="intense" alt=""><i class="fa fa-expand"></i>
                        </div>
                        <div class="slide-title-holder">
                            <div class="slide-title">
                                <span class="subtitle">At posuere sem accumsan </span>
                                <div class="separator-image">
                                  <img src="{{asset('web/images/separator.png')}}" alt="">
                                </div>
                                <h3 class="transition">  <a href="portfolio-single.html">Blandit praesent</a></h3>
                                <h4><a  href="portfolio-single.html">View</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- 1 end -->
                    <!--=============== 2 ===============-->
                    <div class="swiper-slide">
                        <div class="bg" style="background-image:url({{asset('web/images/bg/4.jpg')}})"></div>
                        <div class="overlay"></div>
                        <div class="zoomimage"><img src="{{asset('web/images/bg/4.jpg')}}" class="intense" alt=""><i class="fa fa-expand"></i></div>
                        <div class="slide-title-holder">
                            <div class="slide-title">
                                <span class="subtitle">At posuere sem accumsan </span>
                                <div class="separator-image"><img src="{{asset('web/images/separator.png')}}" alt=""></div>
                                <h3 class="transition">  <a href="portfolio-single.html">In tortor neque</a>  </h3>
                                <h4><a  href="portfolio-single.html">View</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- 2 end -->
                    <!--=============== 3 ===============-->
                    <div class="swiper-slide">
                        <div class="bg" style="background-image:url({{asset('web/images/bg/8.jpg')}})"></div>
                        <div class="overlay"></div>
                        <div class="zoomimage"><img src="{{asset('web/images/bg/8.jpg')}}" class="intense" alt=""><i class="fa fa-expand"></i></div>
                        <div class="slide-title-holder">
                            <div class="slide-title">
                                <span class="subtitle">At posuere sem accumsan </span>
                                <div class="separator-image"><img src="{{asset('web/images/separator.png')}}" alt=""></div>
                                <h3 class="transition">  <a  href="portfolio-single.html">Vestibulum tincidunt</a>  </h3>
                                <h4><a  href="portfolio-single.html">View</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- 3 end -->
                    <!--=============== 4 ===============-->
                    <div class="swiper-slide">
                        <div class="bg" style="background-image:url({{asset('web/images/bg/46.jpg')}})"></div>
                        <div class="overlay"></div>
                        <div class="zoomimage"><img src="{{asset('web/images/bg/46.jpg')}}" class="intense" alt=""><i class="fa fa-expand"></i></div>
                        <div class="slide-title-holder">
                            <div class="slide-title">
                                <span class="subtitle">At posuere sem accumsan </span>
                                <div class="separator-image"><img src="{{asset('web/images/separator.png')}}" alt=""></div>
                                <h3 class="transition">  <a  href="portfolio-single.html">Libero bibendum</a>  </h3>
                                <h4><a  href="portfolio-single.html">View</a></h4>
                            </div>
                        </div>
                    </div>
                    <!-- 4 end -->
                </div>
            </div>
            <!-- slider  pagination -->
            <div class="pagination"></div>
            <!-- pagination  end -->
            <!-- slider navigation  -->
            <div class="swiper-nav-holder hor hs">
                <a class="swiper-nav arrow-left transition " href="#"><i class="fa fa-angle-left"></i></a>
                <a class="swiper-nav  arrow-right transition" href="#"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- slider navigation  end -->
        </div>
        <!-- full-height-wrap end  -->
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>
@endsection

@push('css')
@endpush    