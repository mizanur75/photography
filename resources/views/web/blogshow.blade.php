@extends('web.layouts.app')
@section('title',$blog->title)

@push('css')
@endpush

@section('content')

        <div class="btBlogHeaderContent">
          <div class="bt_bb_wrapper">
            <section id="bt_section62ed16846aa2f" class="boldSection topSemiSpaced bottomSemiSpaced gutter inherit">
              <div class="port">
                <div class="boldCell">
                  <div class="boldCellInner"></div>
                </div>
              </div>
            </section>
          </div>
        </div>
        <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced" style="background-image:url()">
          <div class="port">
            <header class="header btClear extralarge bt_bb_1">
              <div class="btSuperTitle">
                <div class="btBreadCrumbs">
                  <nav>
                    <ul>
                      <li>
                        <a href="/">Home</a>
                      </li>
                      <a href="#">News</a> / {{$blog->title}}
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="dash">
                <h1>
                  <span class="headline">{{$blog->title}}</span>
                </h1>
              </div>
              <div class="btSubTitle">{{$blog->sub_title}}</div>
            </header>
          </div>
        </section>
        <div class="btContentHolder">
          <div class="btContent">
            <article class="boldSection btArticle gutter divider noPhoto post-8790 post type-post status-publish format-standard hentry category-news">
              <div class="port">
                <div class="boldCell">
                  <div class="boldRow">
                    <div class="rowItem btTextLeft col-sm-12 btArticleHeader">
                      <header class="header btClear large btDash bottomDash btAlternateDash">
                        <div class="btSuperTitle">
                          <span class="btArticleCategories">
                            <a href="#" class="btArticleCategory">News</a>
                          </span>
                        </div>
                        <div class="dash">
                          <h2>
                            <span class="headline">{{$blog->title}}</span>
                          </h2>
                        </div>
                        <div class="btSubTitle">
                          <span class="btArticleDate">{{date('d M Y', strtotime($blog->created_at))}}</span>
                          <a href="javascript:void(0)" class="btArticleAuthor">by Content Writer</a>
                        </div>
                      </header>
                    </div>
                    <!-- /rowItem -->
                  </div>
                  <!-- /boldRow -->
                  <div class="boldRow">
                    <div class="rowItem col-sm-8">
                      <div class="btArticleBody portfolioBody ">
                        <div class="bt_bb_wrapper">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$blog->video_link}}" allowfullscreen=""></iframe>
                          <p>{!!$blog->details!!}</p>
                          <p>
                            <a href="http://www.newstoday.com.bd/index.php?option=details&amp;news_id=2540213&amp;date=2019-08-26">Source: {{$blog->source}}</a>
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- /rowItem -->
                  </div>
                  <!-- /boldRow -->
                  <div class="boldRow topSmallSpaced bottomSmallSpaced">
                    <div class="rowItem col-sm-6 tagsRowItem btTextLeft"></div>
                    <!-- /rowItem -->
                    <div class="rowItem col-sm-6 cellRight shareRowItem btTextRight">
                      <div class="socialRow">
                        <span class="btIco btIcoOutlineType btIcoAccentColor btIcoSmallSize">
                          <a href="https://www.facebook.com/sharer/sharer.php?u=https://asrafulhoque.com/2020/11/first-invasive-cardiac-surgery-conducted-at-govt-hospital/" data-ico-fa="&#xf09a;" class="btIcoHolder">
                            <em></em>
                          </a>
                        </span>
                        <span class="btIco btIcoOutlineType btIcoAccentColor btIcoSmallSize">
                          <a href="https://twitter.com/home?status=https://asrafulhoque.com/2020/11/first-invasive-cardiac-surgery-conducted-at-govt-hospital/" data-ico-fa="&#xf099;" class="btIcoHolder">
                            <em></em>
                          </a>
                        </span>
                        <span class="btIco btIcoOutlineType btIcoAccentColor btIcoSmallSize">
                          <a href="https://www.linkedin.com/shareArticle?url=https://asrafulhoque.com/2020/11/first-invasive-cardiac-surgery-conducted-at-govt-hospital/" data-ico-fa="&#xf0e1;" class="btIcoHolder">
                            <em></em>
                          </a>
                        </span>
                        <span class="btIco btIcoOutlineType btIcoAccentColor btIcoSmallSize">
                          <a href="https://plus.google.com/share?url=https://asrafulhoque.com/2020/11/first-invasive-cardiac-surgery-conducted-at-govt-hospital/" data-ico-fa="&#xf0d5;" class="btIcoHolder">
                            <em></em>
                          </a>
                        </span>
                        <span class="btIco btIcoOutlineType btIcoAccentColor btIcoSmallSize">
                          <a href="http://vkontakte.ru/share.php?url=https://asrafulhoque.com/2020/11/first-invasive-cardiac-surgery-conducted-at-govt-hospital/" data-ico-fa="&#xf189;" class="btIcoHolder">
                            <em></em>
                          </a>
                        </span>
                      </div>
                    </div>
                    <!-- /rowItem -->
                  </div>
                  <!-- /boldRow -->
                  <div class="boldRow">
                    <div class="rowItem col-sm-12 btLinkPages"></div>
                    <!-- /rowItem -->
                  </div>
                  <!-- /boldRow -->
                </div>
                <!-- /boldCell -->
              </div>
              <!-- /port -->
            </article>
            <section class="boldSection gutter bottomSemiSpaced">
              <div class="port">
                <div class="boldRow">
                  <div class="rowItem col-sm-12"></div>
                  <!-- /rowItem -->
                </div>
                <!-- /boldRow -->
                <div class="boldRow">
                  <div class="rowItem col-sm-12">
                    <div class="btClear btSeparator bottomSmallSpaced border">
                      <hr>
                    </div>
                  </div>
                  <!-- /rowItem -->
                </div>
              </div>
              <!-- /port -->
            </section>
          </div>
          <aside class="btSidebar"></aside>
        </div>
        <!-- /contentHolder -->
      
@endsection

@push('css')
@endpush    