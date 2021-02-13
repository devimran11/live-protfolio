<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($protfolios as $protfolio)
          <div class="col-md-4">
            <div class="work-box">
              <a href="{{url('backend/images/protfolio/', $protfolio->image)}}" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="{{url('backend/images/protfolio/', $protfolio->image)}}" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">{{$protfolio->image}}</h2>
                      <div class="w-more">
                        <span class="w-ctegory">{{$protfolio->category}}</span> / <span class="w-date">{{$protfolio->created_at->toDateString()}}</span>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <div class="testimonials paralax-mf bg-image" style="background-image: url({{asset('frontend')}}/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            @foreach ($comments as $comment)
            <div class="testimonial-box">
              <div class="author-test">
                <img src="{{url('backend/images/comments/', $comment->image)}}" alt="" height="150" width="150" class="rounded-circle b-shadow-a">
                <span class="author">{{$comment->name}}</span>
              </div>
              <div class="content-test">
                <h4 class="description lead">{{$comment->designation}}</h4>
                <p class="description lead">
                  {{$comment->comment}}
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>