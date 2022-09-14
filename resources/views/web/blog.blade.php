@extends('web.layouts.app')
@section('title','Blog')

@push('css')
@endpush

@section('content')
<!--=============== content-holder ===============-->
<div class="content-holder elem scale-bg2 transition3" >
    <div class="fixed-title"><span>Blog</span></div>
    <!--=============== content  ===============-->
    <div class="content">
        <!--section  page title   -->
        <!-- <section class="parallax-section">
            <div class="overlay"></div>
            <div class="container">
                <h2>Blog</h2>
                <div class="separator"></div>
                <h3 class="subtitle">Duis lorem urna, porta gravida</h3>
            </div>
            <a class="custom-scroll-link sect-scroll" href="#sec1"><i class="fa fa-angle-double-down"></i></a>
        </section> -->
        <!--section  page title end  -->
        <!-- <div class="sections-bg"></div> -->
        <!--section    -->
        <section id="sec1">
          <div class="container">
            <!--================= articles   ================-->
            <div class="row">
            @foreach($blogs as $blog)
              <div class="col-md-3">
                <article>
                    <ul class="blog-title">
                        <li><a href="#" class="tag">{{date('d M Y', strtotime($blog->created_at))}}</a></li>
                    </ul>
                    <div class="blog-media">
                        <div class="box-item">
                            <a href="{{route('front.blogshow',$blog->url)}}" >
                            <span class="overlay"></span>
                            <img src="{{asset('assets/images/blogs/'.$blog->photo)}}" style="height: 165px;"  alt="" class="respimg">
                            </a>
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3>{{$blog->title}}</h3>
                        <p>
                            {{\Illuminate\Support\Str::limit($blog->details, 250)}}
                            
                        </p>
                        <a href="{{route('front.blogshow',$blog->url)}}" class="ajax btn"><span>read more </span> <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article>
              </div>
            @endforeach
            </div>
            <!-- <div class="clearfix"></div> -->
            <!-- pagination   -->
            <div class="pagination-blog">
                <a href="#" class="prevposts-link transition"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="blog-page transition">1</a>
                <a href="#" class="blog-page current-page transition">2</a>
                <a href="#" class="blog-page transition">3</a>
                <a href="#" class="blog-page transition">4</a>
                <a href="#" class="nextposts-link transition"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
        </section>
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>
<!-- content holder end -->   
@endsection

@push('css')
@endpush    