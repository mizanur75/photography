@extends('web.layouts.app')
@section('title','Stories')

@push('css')

@endpush

@section('content')
<!--=============== Conten holder  ===============-->
<div class="content-holder elem scale-bg2 transition3" >
    <!--=============== Content  ===============-->
    <div class="content full-height">
        <div class="fixed-title"><span>Portfolio</span></div>
        <!-- Portfolio counter  -->
        <div class="count-folio">
            <div class="num-album"></div>
            <div class="all-album"></div>
        </div>
        <!-- Portfolio counter end -->
        <div class="filter-holder column-filter">
            <div class="filter-button">Filter <i class="fa fa-long-arrow-down"></i></div>
            <div class="gallery-filters hid-filter">
                <a href="#" class="gallery-filter transition2 gallery-filter_active" data-filter="*">All Albums</a>
                <a href="#" class="gallery-filter transition2" data-filter=".people">People</a>
                <a href="#" class="gallery-filter transition2" data-filter=".nature">Nature</a>
                <a href="#" class="gallery-filter transition2" data-filter=".comercial">Comercial</a>
                <a href="#" class="gallery-filter transition2" data-filter=".travel">Travel</a>
            </div>
        </div>
        <!--=============== portfolio holder ===============-->
        <div class="resize-carousel-holder">
            <div class="p_horizontal_wrap">
                <div id="portfolio_horizontal_container">
                    @foreach($stories as $story)
                    <div class="portfolio_item people comercial">
                        <img  src="{{asset('assets/images/services/'.$story->photo)}}"   alt="">
                        <div class="port-desc-holder">
                            <div class="port-desc">
                                <div class="overlay"></div>
                                <div class="grid-item">
                                    <h3><a href="portfolio-single.html">{{$story->title}}</a></h3>
                                    <!-- <span>Travel</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="port-subtitle-holder">
                            <div class="port-subtitle">
                                <h3><a href="portfolio-single.html">{{$story->title}}</a></h3>
                                <span><a href="#">Travel</a> / <a href="#">Photography</a></span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--portfolio_horizontal_container  end-->
            </div>
            <!--p_horizontal_wrap  end-->
        </div>
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>
<!-- content holder end -->      
@endsection

@push('js')

@endpush    