@extends('fe.layouts.index')
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
        <section class="detail_news sidebar-page-container">
          <div class="container">
            <div class="row clearfix">
              <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="blog-single">
                  <div class="inner-box">
                    <ul class="post-meta">
                      <li class="style-two"><span class="icon fa fa-calendar"></span>{{date('d/m/Y', strtotime($new->created_at))}}</li>
                      <li><span class="icon fa fa-user"></span><a href="#" title="Posts by admin" rel="author">admin</a></li>
                    </ul>
                    <h4>{{$new->title}}</h4>
                    <div class="sapo">{{$new->description}}</div>
                    <div class="image"> <img src="upload/news/{{$new->image}}" alt=""> </div>
                    <div class="lower-content">
                      <div class="text">
                        {!!$new->content!!}
                      </div>
                    </div>
                    <!--post-share-options-->
                    <div class="post-share-options">
                      <div class="post-share-inner clearfix">
                        <ul class="pull-right social-links clearfix">
                          <li class="facebook"><a href="#" class="fa fa-facebook"></a></li>
                          <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                        
                        </ul>
                      </div>
                    </div>
                    
                    <!--Comments Area-->
                    
                    
                    <!-- #respond --> 
                    
                    <!--End Comment Form --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="news-section" style="padding-top: 0">
          <div class="auto-container">
            <div class="sec-title centered">
             
              <h2> <strong>Tin Liên quan</strong><br>
              </h2>
            </div>
            <div class="row clearfix">
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
          </div>
        </section>
      </main>
@endsection