@extends('web.layouts.app')
@section('content')

<!--=============== Content holder  ===============-->
<div class="content-holder elem scale-bg2 transition3" >
    <!--=============== Content   ===============-->
    <div class="content full-height">
        <div class="fixed-title"><span>Page not found</span></div>
        <!--=============== background  ===============-->
        <div class="full-height-wrap fixed-wrap">
            <div class="bg" style="background-image:url({{asset('web/images/bg/22.jpg')}})"></div>
            <div class="overlay"></div>
        </div>
        <!--background  end  -->
        <!--=============== custom-inner ===============-->
        <div class="custom-inner error-page">
            <div class="container">
                <h2>404</h2>
                <div class="separator-image"><img src="{{asset('images/separator.png')}}" alt=""></div>
                <h3>OOOPPS.! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND</h3>
                <a href="/" class=" btn anim-button  trans-btn wt-btn  transition"><span>Back to home page</span><i class="fa fa-home"></i></a>
            </div>
        </div>
        <!-- custom-inner end  -->
    </div>
    <!-- Content end  -->
    <!-- Share container  -->
    <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>


@endsection