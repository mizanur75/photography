@extends('web.layouts.app')
@section('title',$service->title)

@push('css')
@endpush

@section('content')

      <div class="btContentWrap btClear">
        <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced" style="background-image:url()">
          <div class="port">
            <header class="header btClear extralarge bt_bb_1">
              <div class="btSuperTitle">
                <div class="btBreadCrumbs">
                  <nav>
                    <ul>
                      <li>
                        <a href="/">Home</a>
                      </li>{{$service->title}}
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="dash">
                <h1>
                  <span class="headline">{{$service->title}}</span>
                </h1>
              </div>
            </header>
          </div>
        </section>
        <div class="btContentHolder">
          <div class="btContent">
            <div class="bt_bb_wrapper">
              <section id="bt_section62ed15bde9ddb" class="boldSection gutter">
                <div class="port">
                  <div class="boldCell">
                    <div class="boldCellInner">
                      <div class="boldRow  ">
                        <div class="boldRowInner">
                          <div class="rowItem col-md-12 col-ms-12  btTextLeft">
                            <div class="rowItemContent">
                              <div class="btText">
                                {{$service->details}}
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="bt_section62ed15bdea6e2" class="boldSection gutter">
                <div class="port">
                  <div class="boldCell">
                    <div class="boldCellInner">
                      <div class="boldRow  ">
                        <div class="boldRowInner">
                          <div class="rowItem col-md-12 col-ms-12  btTextLeft">
                            <div class="rowItemContent">
                              <div class="btClear btSeparator topSpaced bottomSpaced noBorder">
                                <hr>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <!-- /contentHolder -->
      </div>
      <!-- /contentWrap -->   
@endsection

@push('css')
@endpush    