@extends('web.layouts.app')
@section('title','Team Asraf Sium: - : Listen to your Heart')

@push('css')
@endpush

@section('content')
<div class="content-holder elem scale-bg2 transition3" >
  <!--=============== content ===============-->
  <!--  Page title    -->
  <div class="fixed-title"><span>Contacts</span></div>
  <!--  Page title end   -->
  <div class="content full-height">
      <!--background -->
      <div class="full-height-wrap fixed-wrap">
          <div class="bg" style="background-image:url({{'web/images/bg/59.jpg'}})"></div>
          <div class="overlay"></div>
      </div>
      <!--background end-->
      <!--custom-inner -->
      <div class="custom-inner contact-inner">
          <div class="container">
              <h2>Contacts</h2>
              <div class="separator"></div>
              <div class="row">
                  <div class="col-md-4">
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                      <ul class="contact-list">
                          <li><a href="#">27th Brooklyn New York, NY 10065</a></li>
                          <li><a href="#">+7(111)123456789</a></li>
                          <li><a href="#">yourmail@domain.com</a></li>
                      </ul>
                  </div>
                  <div class="col-md-8">
                      <div id="contact-form">
                          <div id="message"></div>
                          <form method="post" action="" name="contactform" id="contactform">
                              <input name="name" type="text" id="name"  class="inputForm2" onClick="this.select()" value="Name" >
                              <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >
                              <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                              <input type="submit" class="send_message transition" id="submit" value="Send Message" />
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--custom-inner end-->
  </div>
  <!-- Share container  -->
  <div class="share-container  isShare"  data-share="['facebook','pinterest','googleplus','twitter','linkedin']"></div>
</div>
@endsection

@push('css')
@endpush    