<section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              Hello Developers
            </p>
            
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($services as $service)
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="{{$service->icon}}"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">{{$service->category_name}}</h2>
              <p class="s-description text-center">
                {{$service->description}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        @foreach ($projects as $project)
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="{{$project->icon}}"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">{{$project->number_of_works}}</p>
              <span class="counter-text">{{$project->details}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>