@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
      <!-- About Section Start -->
      <section id="about" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title-header text-center">
                <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About Us</h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s">Ticket Fair Event on Digital Market</p>
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
              <div class="about-item">
                <img class="img-fluid" src="assets/img/about/img1.jpg" alt="">
                <div class="about-text">
                  <h3><a href="#">Wanna Know Our Mission?</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                  <a class="btn btn-common btn-rm" href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
              <div class="about-item">
                <img class="img-fluid" src="assets/img/about/img2.jpg" alt="">
                <div class="about-text">
                  <h3><a href="#">What you will learn?</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                  <a class="btn btn-common btn-rm" href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
              <div class="about-item">
                <img class="img-fluid" src="assets/img/about/img3.jpg" alt="">
                <div class="about-text">
                  <h3><a href="#">What are the benifits?</a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                  <a class="btn btn-common btn-rm" href="#">Read More</a>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </section>
      <!-- About Section End -->
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
            
        
@endsection
