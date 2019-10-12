@extends('fe.layouts.index')

@section('title')
    Tin tức
@endsection
@section('content')

<section class="services-carousel-section">
  <div class="outer-container">
    <div class="five-item-carousel owl-carousel owl-theme">
      <div class="services-block-three">
        <div class="inner-box"> <img src="fe_assets/images/slide1.jpg"/> </div>
      </div>
      <div class="services-block-three">
        <div class="inner-box"> <img src="fe_assets/images/slide1.jpg"/> </div>
      </div>
    </div>
  </div>
</section>
<main class = "home2">
    <section class="news-section">
      <div class="auto-container">
        <div class="sec-title centered">
          <h2><strong>Tin tức</strong><br>
          </h2>
        </div>
        <div class="row clearfix">
          <div class="box_top_news mb-5 col-lg-12">
            <div class="row clearfix">
              <div class="col-md-6 news-block ">
                <div class="inner-box wow fadeInLeft animated animated" style="visibility: visible;">
                  <div class="image"> <a href="news/{{$allspl->id}}/{{$allspl->slug_title}}.html" class="thumb_focus"><img src="upload/news/{{$allspl->image}}" alt=""></a> </div>
                  <div class="lower-content">
                    <h6><a href="news/{{$allspl->id}}/{{$allspl->slug_title}}.html">{{$allspl->title}}</a></h6>
                    <div class="clearfix">
                      <div class="pull-left">
                        <div class="post-time">{{date('d/m/Y', strtotime($allspl->created_at))}}</div>
                      </div>
                      <div class="pull-right">
                        <div class="author"> <a href="news/{{$allspl->id}}/{{$allspl->slug_title}}.html" title="Posts by admin" rel="author" class="clblue"><strong>XEM THÊM +</strong> </a> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <ul class="list_right_top_new news-block ">
                  @foreach ($spotlight as $spl)
                <li > <a href="news/{{$spl->id}}/{{$spl->slug_title}}.html" class="thumb165"><img src="upload/news/{{$spl->image}}" alt=""></a>
                    <div class="lower-content">
                      <h6><a href="news/{{$spl->id}}/{{$spl->slug_title}}.html"  class="title_right_top_new">{{$spl->title}}</a></h6>
                      <div class="clearfix">
                        <div class="pull-left">
                          <div class="post-time">{{date('d/m/Y', strtotime($spl->created_at))}}</div>
                        </div>
                        <div class="pull-right">
                          <div class="author"> <a href="news/{{$spl->id}}/{{$spl->slug_title}}.html" title="Posts by admin" rel="author" class="clblue"><strong>XEM THÊM +</strong> </a> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          @foreach ($news as $new)
              
          <div class="news-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box wow fadeInLeft animated animated" style="visibility: visible;">
            <div class="image"> <a href="news/{{$new->id}}/{{$new->slug_title}}.html" class="thumb230"><img src="upload/news/{{$new->image}}" alt=""></a> </div>
              <div class="lower-content">
                <h6><a href="news/{{$new->id}}/{{$new->slug_title}}.html">{{$new->title}}</a></h6>
                <div class="clearfix">
                  <div class="pull-left">
                    <div class="post-time">{{date('d/m/Y', strtotime($new->created_at))}}</div>
                  </div>
                  <div class="pull-right">
                    <div class="author"> <a href="news/{{$new->id}}/{{$new->slug_title}}.html" title="Posts by admin" rel="author" class="clblue"><strong>XEM THÊM +</strong> </a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
        {{ $news->links() }}
      </div>
    </section>
  </main>
@endsection