@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
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
@endsection
