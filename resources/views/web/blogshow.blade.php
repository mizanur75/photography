@extends('web.layouts.app')
@section('title',$blog->title)

@push('css')
@endpush

@section('content')
<div class="content-holder elem scale-bg2 transition3" >
    <div class="fixed-title"><span>Journal</span></div>
    <!--=============== content  ===============-->
    <div class="content">
        <!--section  page title   -->
        <!-- <section class="parallax-section">
            <div class="overlay"></div>
            <div class="bg" style="background-image:url(images/bg/45.jpg)" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"></div>
            <div class="container">
                <h2>Our Journal</h2>
                <div class="separator"></div>
                <h3 class="subtitle">Duis lorem urna, porta gravida</h3>
            </div>
            <a class="custom-scroll-link sect-scroll" href="#sec1"><i class="fa fa-angle-double-down"></i></a>
        </section> -->
        <!--section  page title end  -->
        <!-- <div class="sections-bg"></div> -->
        <section id="sec1">
            <div class="container column-container">
                <div class="row">
                    <div class="col-md-7">
                        <article>
                            <ul class="blog-title">
                                <li><a href="#" class="tag">{{date('d M Y', strtotime($blog->created_at))}}</a></li>
                                <li> - </li>
                                <li><a href="{{route('front.blogcategory',$blog->category->name)}}" class="tag">{{$blog->category->name}} </a></li>
                            </ul>
                            <div class="blog-text">
                                <h2>{{$blog->title}}</h2>
                                <p>
                                  {!!$blog->details!!}
                                </p>
                            </div>
                        </article>
                    </div>
                    <!--================= sidebar  ================-->
                    <div class="col-md-4">
                        <div class="sidebar">
                            <!-- widget -->
                            <div class="widget">
                                <div class="searh-holder">
                                    <form action="{{route('front.blogsearch')}}" class="searh-inner">
                                        <input type="text" class="search" placeholder="Search.." name="search" />
                                        <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!-- widget -->
                            <div class="widget">
                                <h3>Latest posts</h3>
                                <ul class="widget-posts">
                                  @foreach($latest_posts as $post)
                                    <li class="clearfix">
                                        <a href="{{route('front.blogshow',$post->url)}}"  class="widget-posts-img"><img src="{{asset('assets/images/blogs/'.$post->photo)}}" class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="{{route('front.blogshow',$post->url)}}" title="">{{$post->title}}</a>
                                            <span class="widget-posts-date"> {{date('d M Y', strtotime($post->created_at))}} </span>
                                        </div>
                                    </li>
                                  @endforeach
                                </ul>
                            </div>
                            <div class="widget">
                                <h3>Tags</h3>
                                <div class="clearfix"></div>
                                <ul class="tagcloud">
                                  @foreach($tags as $tag)
                                    <li><a href="{{route('front.blogtags',$tag)}}" class="transition link">{{$tag}}</a></li>
                                  @endforeach
                                </ul>
                            </div>
                            <!-- widget -->
                            <div class="widget">
                                <h3>Categories</h3>
                                <div class="clearfix"></div>
                                <ul>
                                  @foreach($bcats as $category)
                                    <li class="cat-item"><a href="{{route('front.blogcategory',$category->name)}}">{{$category->name}}</a></li>
                                  @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>      
@endsection

@push('css')
@endpush    