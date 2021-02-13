<div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                      <form action="{{route('contact.store')}}" method="POST">
                      @csrf
                      <h4 class="mtext-105 cl2 txt-center p-b-30" style="color: red">
                        {{Session::get('message')}}
                    </h4>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                            <font style="color: red">
                              {{($errors->has('name'))?($errors->first('name')):""}}
                          </font>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                            <font style="color: red">
                              {{($errors->has('email'))?($errors->first('email')):""}}
                            </font>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            <font style="color: red">
                              {{($errors->has('message'))?($errors->first('message')):""}}
                            </font>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" value="Send"> 
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9154443419743!2d90.38400111450214!3d23.750394494694433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bad1058c39%3A0x60e2c6c430730c78!2sGreen%20Road%20Jame%20Masjid!5e0!3m2!1sen!2sbd!4v1613018000341!5m2!1sen!2sbd" width="540" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> {{$contact->address}}</li>
                      <li><span class="ion-ios-telephone"></span>{{$contact->phone}}</li>
                      <li><span class="ion-email"></span>{{$contact->email}}</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="{{$contact->facebook}}"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="{{$contact->twitter}}"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href="{{$contact->linkedin}}"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href="{{$contact->google}}"><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>