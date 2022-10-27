@extends('layouts.front_master')

@section('content')
@include('layouts.slider')
      <!-- About Section Start -->
      <section id="about" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest Events</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Looking for a convenient way to sell tickets to your upcoming event? Look no further than our event ticket service! Our user-friendly platform makes it easy to list your event and sell tickets all in one place. Plus, our team is always on hand to provide support and answer any questions you may have. So why wait? Get started today and take the hassle out of selling tickets!</p>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach($event as $item)
            <div class="col-xs-12 col-md-6 col-lg-4">
              <div class="about-item">
                <img class="img-fluid" src="{{ asset('images/event/'.$item->image) }}" alt="">
                <div class="about-text">
                  <h3><a href="#">{{ $item->title }}</a></h3>
                  <h5>Price:{{ $item->price }}৳   Seat:{{ $item->seat }} </h5>
                  <p></p> <br>
                  @if($item->seat ==0)
                  <button type="button" class="btn btn-common btn-rm" disabled>Not Available</button>
                  <a class="btn btn-common btn-rm" href="{{ url('event/'.$item->id) }}">View Details</a>
                  @else
                  <a class="btn btn-common btn-rm" href="{{ url('cart/'.$item->id) }}">Book Now</a>
                  <a class="btn btn-common btn-rm" href="{{ url('event/'.$item->id) }}">View Details</a>
                  @endif
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </section>
      <!-- About Section End -->

      <!-- Schedule Section Start -->
      <section id="schedules" class="schedule section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Looking for a convenient way to sell tickets to your upcoming event? Look no further than our event ticket service! Our user-friendly platform makes it easy to list your event and sell tickets all in one place. Plus, our team is always on hand to provide support and answer any questions you may have. So why wait? Get started today and take the hassle out of selling tickets!</p>
              </div>
            </div>
          </div>
          <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
            <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
              <div class="table-responsive">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  @foreach($events as $key => $item)
                  <li class="nav-item">
                    <a class="nav-link @if($key==0)active @endif " id="{{ $item->id }}-tab" data-toggle="tab" href="#{{ $item->id }}" role="tab" aria-controls="monday" aria-expanded="true">
                      <div class="item-text">
                        <h4><?php echo date('D',strtotime($item->start_date));?></h4>
                        <h5><?php echo date('d F',strtotime($item->start_date));?></h5>
                      </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
              <div class="tab-content" id="myTabContent">
                @foreach($events as $key => $item)
                <div class="tab-pane fade show @if($key==0)active @endif" id="{{ $item->id }}" role="tabpanel" aria-labelledby="{{ $item->id }}-tab">
                  <div id="accordion">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <div class="images-box">
                            <img class="img-fluid" src="{{ asset('images/event/'.$item->image) }}" alt="">
                          </div>
                          <h4>{{ $item->title }}</h4>
                          <h5 class="name">{{ $item->venue }}</h5>
                        </div>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <img class="img-fluid" src="{{ asset('images/event/'.$item->image) }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Schedule Section End -->

            <!-- About Section Start -->
            <section id="about" class="section-padding">
                <div class="container">
                  <div class="row">
                    <div class="col-12">
                      <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Hallrooms</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">
                            Our hall booking service is the perfect way to ensure that your next event is a success. We have a variety of halls to choose from, all of which are perfect for a variety of events. Whether you're planning a wedding, a corporate event, or a private party, we have a hall that will suit your needs. We also have a team of experienced event planners who can help you plan and execute your event to perfection. Contact us today to learn more about our hall booking service and to start planning your next event.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    @foreach($halls as $item)
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <div class="blog-item">
                        <div class="blog-image">
                            <a href="{{ url('reservasion/hall-findorfaild/'.$item->id)}}">
                            <img class="img-fluid" src="{{ asset('assets/img/hall/'.$item->image) }}" alt="">
                            </a>
                        </div>
                        <div class="descr">
                            <div class="tag"><a href="{{ url('/reservasion/hall-findorfaild/'.$item->id) }}">View Details</a></div>
                            <h3 class="title">
                            <a href="{{ url('reservasion/hall-findorfaild/'.$item->id)}}">
                                {{ $item->name }}
                            </a>
                            </h3>
                        </div>
                        </div>
                    </div>
                    @endforeach

                  </div>
                </div>
              </section>
              <!-- About Section End -->


      <!-- Blog Section Start -->
      <section id="blog" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img-1.jpg" alt="">
                  </a>
                </div>
                <div class="descr">
                  <div class="tag">Design</div>
                  <h3 class="title">
                    <a href="single-blog.html">
                      The 9 Design Trends You Need to Know
                    </a>
                  </h3>
                  <div class="meta-tags">
                    <span class="date">Jan 20, 2018</span>
                    <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img-2.jpg" alt="">
                  </a>
                </div>
                <div class="descr">
                  <div class="tag">Design</div>
                  <h3 class="title">
                    <a href="single-blog.html">
                      The 9 Design Trends You Need to Know
                    </a>
                  </h3>
                  <div class="meta-tags">
                    <span class="date">Jan 20, 2018 </span>
                    <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="blog-item">
                <div class="blog-image">
                  <a href="#">
                    <img class="img-fluid" src="assets/img/blog/img-3.jpg" alt="">
                  </a>
                </div>
                <div class="descr">
                  <div class="tag">Design</div>
                  <h3 class="title">
                    <a href="single-blog.html">
                      The 9 Design Trends You Need to Know
                    </a>
                  </h3>
                  <div class="meta-tags">
                    <span class="date">Jan 20, 2018</span>
                    <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <a href="#" class="btn btn-common">Read More News</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog Section End -->

      <!-- Subscribe Area Start -->
      {{-- <div id="subscribe" class="section-padding">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-10 col-lg-7">
              <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
                <h2 class="subscribe-title">Sign Up For Our Newsletter</h2>
                <form class="text-center form-inline">
                  <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                  <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                  <span class="ladda-label"><i class="lni-check-box"></i> Submit</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- Subscribe Area End -->


@endsection
