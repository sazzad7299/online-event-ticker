@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<section id="blog" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Booking Services</h1>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
          </div>
        </div>
        @foreach ($halls as $item)
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
                    <a href="single-blog.html">
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

            
        
@endsection
