@extends('layouts.front_master')

@section('content')
@include('layouts.slider')

    <!-- Coundown Section Start -->
    <section class="countdown-timer section-padding">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="heading-count">
                <h2 class="wow fadeInDown" data-wow-delay="0.2s">Event Will Start In</h2>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                <div id="clock" class="time-count"></div>
              </div>
              <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Coundown Section End -->
  
       <!-- Services Section Start -->
      <section id="services" class="services section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Why You Choose Us?</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
          </div>
          <div class="row services-wrapper">
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
              <div class="services-item wow fadeInDown" data-wow-delay="0.2s">
                <div class="icon">
                  <i class="lni-heart"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Get Inspired</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
              <div class="services-item wow fadeInDown" data-wow-delay="0.4s">
                <div class="icon">
                  <i class="lni-gallery"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Meet New Faces</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
              <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
                <div class="icon">
                  <i class="lni-envelope"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Fresh Tech Insights</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                </div>
              </div>
            </div>
            <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
              <div class="services-item wow fadeInDown" data-wow-delay="0.8s">
                <div class="icon">
                  <i class="lni-cup"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Networking Session</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                </div>
              </div>
            </div>
             <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
              <div class="services-item wow fadeInDown" data-wow-delay="1s">
                <div class="icon">
                  <i class="lni-user"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Global Event</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                </div>
              </div>
            </div>
             <!-- Services item -->
            <div class="col-md-6 col-lg-4 col-xs-12 padding-none">
              <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
                <div class="icon">
                  <i class="lni-bubble"></i>
                </div>
                <div class="services-content">
                  <h3><a href="#">Free Swags</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Services Section End -->
      
  
      <!-- About Section Start -->
      <section id="about" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest Events</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
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
                  <h5>  {{ $item->price }}৳</h5>
                  <p>{!! Str::limit($item->detail, 200)  !!}</p> <br>
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
  
      <!-- Counter Area Start-->
      <section class="counter-section section-padding">
        <div class="container">
          <div class="row">
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="lni-map"></i></div>
                <p>Wst. Conference Center</p>
                <span>San Francisco, CA</span>
              </div>
            </div>
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="0.6s">
                <div class="icon"><i class="lni-timer"></i></div>
                <p>February 14 - 19, 2018</p>
                <span>09:00 AM – 05:00 PM</span>
              </div>
            </div>
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="0.9s">
                <div class="icon"><i class="lni-users"></i></div>
                <p>343 Available Seats</p>       
                <span>Hurryup! few tickets are left</span>
              </div>
            </div>
            <!-- Counter Item -->
            <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
              <div class="counter wow fadeInRight" data-wow-delay="1.2s">
                <div class="icon"><i class="lni-coffee-cup"></i></div>
                <p>Free Lunch & Snacks</p>
                <span>Don’t miss it</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Counter Area End-->
  
      <!-- Schedule Section Start -->
      <section id="schedules" class="schedule section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit, sed do eiusmod tempor</p>
              </div>
            </div>
          </div>
          <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
            <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
              <div class="table-responsive">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                      <div class="item-text">
                        <h4>Monday</h4>
                        <h5>14 February</h5>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                      <div class="item-text">
                        <h4>Tuesday</h4>
                        <h5>15 February</h5>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                      <div class="item-text">
                        <h4>Wednesday</h4>
                        <h5>16 February</h5>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                      <div class="item-text">
                        <h4>Thursday</h4>
                        <h5>17 February</h5>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                  <div id="accordion">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>15 Free Productive Design Tools</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Getting Started With SketchApp</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                  <div id="accordion2">
                    <div class="card">
                      <div id="headingOne1">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion2">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo2">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                  <div id="accordion3">
                    <div class="card">
                      <div id="headingOne3">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo3">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordion3">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree3">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                  <div id="accordion4">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion4">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion4">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree4">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion4">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                  <div id="accordion">
                    <div class="card">
                      <div id="headingOne">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingTwo">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="headingThree">
                        <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <div class="images-box">
                            <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                          </div>                     
                          <span class="time">10am - 12:30pm</span>
                          <h4>Web Design Principles and Best Practices</h4>
                          <h5 class="name">David Warner</h5>
                        </div>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                          <p>Consectetur adipisicing elit. Quod distinctio impedit sint accusantium ducimus lites consequuntur innobisl dolores saepe.Proin sit amet turpis lobortis.</p>
                          <div class="location">
                            <span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Schedule Section End -->
  
      <!-- Team Section Start -->
      <section id="team" class="section-padding text-center">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Who's Speaking?</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
              <!-- Team Item Starts -->
              <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-img">
                  <img class="img-fluid" src="assets/img/team/team-01.jpg" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#">JONATHON DOE</a></h3>
                  <p>Product Designer, Tesla</p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <!-- Team Item Starts -->
              <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-img">
                  <img class="img-fluid" src="assets/img/team/team-02.jpg" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#">Patric Green</a></h3>
                  <p>Front-end Developer, Dropbox</p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
  
            <div class="col-sm-6 col-md-6 col-lg-4">
              <!-- Team Item Starts -->
              <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-img">
                  <img class="img-fluid" src="assets/img/team/team-03.jpg" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#">Paul Kowalsy</a></h3>
                  <p>Lead Designer, TNW</p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
  
            <div class="col-sm-6 col-md-6 col-lg-4">
              <!-- Team Item Starts -->
              <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-img">
                  <img class="img-fluid" src="assets/img/team/team-04.jpg" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#">Jhon Doe</a></h3>
                  <p>Back-end Developer, ASUS</p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <!-- Team Item Starts -->
              <div class="team-item wow fadeInUp" data-wow-delay="1s">
                <div class="team-img">
                  <img class="img-fluid" src="assets/img/team/team-05.jpg" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#">Daryl Dixon</a></h3>
                  <p>Full-stack Developer, Google</p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <!-- Team Item Starts -->
              <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
                <div class="team-img">
                  <img class="img-fluid" src="assets/img/team/team-06.jpg" alt="">
                  <div class="team-overlay">
                    <div class="overlay-social-icon text-center">
                      <ul class="social-icons">
                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="info-text">
                  <h3><a href="#">Chris Adams</a></h3>
                  <p>UI Designer, Apple</p>
                </div>
              </div>
              <!-- Team Item Ends -->
            </div>
          </div>
          <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">All Speakers</a>
        </div>
      </section>
      <!-- Team Section End -->
  
      <!-- Gallary Section Start -->
      <section id="gallery" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">our event gallery</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="assets/img/gallery/img-1.jpg" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="assets/img/gallery/img-1.jpg">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="ccol-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="assets/img/gallery/img-2.jpg" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="assets/img/gallery/img-2.jpg">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="ccol-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="assets/img/gallery/img-3.jpg" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="assets/img/gallery/img-3.jpg">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="ccol-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="assets/img/gallery/img-4.jpg" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="assets/img/gallery/img-4.jpg">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="ccol-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="assets/img/gallery/img-5.jpg" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="assets/img/gallery/img-5.jpg">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="ccol-md-6 col-sm-6 col-lg-4">
              <div class="gallery-box">
                <div class="img-thumb">
                  <img class="img-fluid" src="assets/img/gallery/img-6.jpg" alt="">
                </div>
                <div class="overlay-box text-center">
                  <a class="lightbox" href="assets/img/gallery/img-6.jpg">
                    <i class="lni-plus"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-xs-12">
              <a href="#" class="btn btn-common">Browse All</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallary Section End -->
  
      <!-- Ask Question Section Start -->
      <section id="faq" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Ask Question?</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
              <div class="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <div class="header-title" data-toggle="collapse" data-target="#questionOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="lni-pencil"></i> How to make a new event?
                    </div>
                  </div>
                  <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                      <div class="header-title" data-toggle="collapse" data-target="#questionTwo" aria-expanded="false" aria-controls="questionTwo">
                        <i class="lni-pencil"></i>  Which payment methods do you accept? 
                      </div>
                  </div>
                  <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <div class="header-title" data-toggle="collapse" data-target="#questionThree" aria-expanded="false" aria-controls="questionThree">
                      <i class="lni-pencil"></i>  Which document can i bring to meeting?   
                    </div>
                  </div>
                  <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <div class="header-title" data-toggle="collapse" data-target="#questionFour" aria-expanded="false" aria-controls="questionFour">
                     <i class="lni-pencil"></i> Who can join at the live event venue?
                    </div>
                  </div>
                  <div id="questionFour" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
              <div class="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne2">
                    <div class="header-title" data-toggle="collapse" data-target="#questionOne2" aria-expanded="true" aria-controls="collapseOne">
                      <i class="lni-pencil"></i> How to make a new event?
                    </div>
                  </div>
                  <div id="questionOne2" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo2">
                      <div class="header-title" data-toggle="collapse" data-target="#questionTwo2" aria-expanded="false" aria-controls="questionTwo">
                        <i class="lni-pencil"></i>  Which payment methods do you accept? 
                      </div>
                  </div>
                  <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <div class="header-title" data-toggle="collapse" data-target="#questionFive" aria-expanded="false" aria-controls="questionFive">
                      <i class="lni-pencil"></i>How to set price? 
                    </div>
                  </div>
                  <div id="questionFive" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <div class="header-title" data-toggle="collapse" data-target="#questionSix" aria-expanded="false" aria-controls="questionSix">
                      <i class="lni-pencil"></i>  What our price list? 
                    </div>
                  </div>
                  <div id="questionSix" class="collapse" aria-labelledby="headingThree" data-parent="#question">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Ask Question Section End -->
  
      <!-- Sponsors Section Start -->
      <section id="sponsors" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsores</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
          </div>
          <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-01.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-02.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-03.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="spnsors-logo">
                <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-04.png" alt=""></a>
              </div>
            </div>
            <div class="col-12 text-center">
              <a href="#" class="btn btn-common">become a sponsor</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Sponsors Section End -->
  
      <!-- Ticket Pricing Area Start -->
      <section id="pricing" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Pricing</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
              <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                <div class="icon">
                  <i class="lni-write"></i>
                </div>
                <div class="colmun-title">
                  <h5>Basic Pass</h5>
                </div>
                <div class="price">
                  <h2>$29</h2>
                  <p>452 Tickets Available</p>
                </div>
                <div class="pricing-list">
                  <ul>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                    <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                    <li><i class="lni-close"></i><span class="text">Certificate</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Workshop</span></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-common">Buy Ticket</a>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
              <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
                <div class="icon">
                  <i class="lni-layers"></i>
                </div>
                <div class="colmun-title">
                  <h5>Standard Pass</h5>
                </div>
                <div class="price">
                  <h2>$40</h2>
                  <p>452 Tickets Available</p>
                </div>
                <div class="pricing-list">
                  <ul>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span></li>
                    <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                    <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-common">Buy Ticket</a>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
              <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
                <div class="icon">
                  <i class="lni-leaf"></i>
                </div>
                <div class="colmun-title">
                  <h5>Premium Pass</h5>
                </div>
                <div class="price">
                  <h2>$68</h2>
                  <p>452 Tickets Available</p>
                </div>
                <div class="pricing-list">
                  <ul>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                    <li><i class="lni-close"></i><span class="text">Lunch on all days</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Access to all areas</span></li>
                    <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                    <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                  </ul>
                </div>
                <a href="#" class="btn btn-common">Buy Ticket</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Ticket Pricing Area End -->
  
      <!-- Event Slides Section Start -->
      <section id="event-slides" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Guideline</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
              <div class="video">
                <img class="img-fluid" src="assets/img/about/about.jpg" alt="">
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
              <p class="intro-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
              </p>
              <h2 class="intro-title">Check List</h2>
              <ul class="list-specification">
                <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
                <li><i class="lni-check-mark-circle"></i> Ipsum passages, and more recently</li>
                <li><i class="lni-check-mark-circle"></i> PageMaker including versions</li>
                <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li> 
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Event Slides Section End -->
  
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
      <div id="subscribe" class="section-padding">
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
      </div>
      <!-- Subscribe Area End -->
  
      <!-- Map Section Start -->
      <section id="google-map-area">
        <div class="container-fluid">
          <div class="row">
          </div>
        </div>
      </section>
      <!-- Map Section End -->
  
      <!-- Contact Us Section -->
      <section id="contact-map" class="section-padding">
        <div class="container">
          <div class="row justify-content-center">
  <div class="text-center">
                    <h2>You are using Free Version</h2>
                    <h5>Please, purchase full version to get all features and pages</h5><br>
                    <b>Including:</b>
                    <p>- All Elements and Features</p>
                    <p>- Working Ajax Contact Form</p>                  
                    <p>- Google Map Integration</p>
                    <p>- Documentation File</p>
                    <p>- Quick Support</p>
                    <p>- Permission to Use in Commercial Projects</p>
                    <p>- Footer Credit Removal Permission</p>
                    <p>- SASS Files</p>
                    <p>- Esential JD Files</p>
                    <br>
                    <a href="https://rebrand.ly/ud-grand-purchase" target="_blank" class="btn btn-common btn-lg">Purchase Now</a>
                  </div>
          </div>
        </div>
      </section>
      <!-- Contact Us Section End -->

@endsection