<header>
    <!-- Header inner  -->
    <div class="header-inner">
        <!-- Logo  -->
        <div class="logo-holder">
            <a href="/"><img src="{{asset('web/images/logo.png')}}" alt=""></a>
        </div>
        <!--Logo end  -->
        <!--Navigation  -->
        <div class="nav-button-holder">
          <div class="nav-button vis-m"><span></span><span></span><span></span></div>
        </div>
        <div class="show-share isShare">Share</div>
        <div class="nav-holder">
            <nav>
                <ul>
                    <li><a href="/" class="{{Request::is('/')? 'act-link': ''}}">Home</a></li>
                    <li><a href="{{route('front.about_us')}}" class="{{Request::is('about')? 'act-link': ''}}">About</a>
                    <li><a href="{{route('front.stories')}}" class="{{Request::is('stories')? 'act-link': ''}}">Stories</a></li>
                    </li>
                    <li><a href="{{route('front.contact')}}" class="{{Request::is('contact')? 'act-link': ''}}">Contact</a></li>
                    <li><a href="{{route('front.gallery')}}" class="{{Request::is('gallery')? 'act-link': ''}}">Gallery</a></li>
                    <li><a href="{{route('front.blog')}}" class="{{Request::is('blog')? 'act-link': ''}}">Blog</a></li>
                </ul>
            </nav>
        </div>
        <!--navigation end -->
    </div>
    <!--Header inner end  -->
</header>