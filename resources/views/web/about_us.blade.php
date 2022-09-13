@extends('web.layouts.app')
@section('title','Team Asraf Sium: - : Listen to your Heart')

@push('css')
@endpush

@section('content')
<div class="content-holder elem scale-bg2 transition3" >
  <!--=============== Content   ===============-->
  <div class="content full-height">
      <div class="fixed-title"><span>About me</span></div>
      <!--=============== background  ===============-->
      <div class="full-height-wrap fixed-wrap">
          <div class="bg" style="background-image:url({{asset('web/images/bg/51.jpg')}})"></div>
          <div class="overlay"></div>
      </div>
      <!--background  end  -->
      <!--=============== custom-inner ===============-->
      <div class="custom-inner">
          <div class="container">
              <div class="row">
                  <div class="col-md-5"> </div>
                  <div class="col-md-6">
                      <h2>About me</h2>
                      <div class="separator"></div>
                      <div class="clearfix"></div>
                      <h3 class="subtitle">Look even slightly believable. If you are going to use a passage.</h3>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                      <p>Integer sed tincidunt dui. Cras tincidunt at risus vitae ultrices. Sed at placerat diam. Nam ornare feugiat blandit. Suspendisse potenti. Nam et finibus elit. Integer ac turpis quam. Pellentesque eleifend ipsum a magna rhoncus, eu laoreet ipsum dapibus. Curabitur ac nisl molestie, facilisis nibh ac, facilisis ligula. Integer congue malesuada eros congue varius. Sed malesuada dolor eget velit euismod pretium.</p>
                      <div class="clearfix"></div>
                      <div class="signature"><img src="{{asset('web/images/signature.png')}})" alt=""></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- custom-inner end  -->
  </div>
  <!-- Content end  -->
  <!-- Share container  -->
  <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>
@endsection

@push('css')
@endpush    