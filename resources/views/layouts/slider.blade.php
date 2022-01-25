  <!-- Main Carousel Section Start -->
  <div id="main-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach($sliders as $key => $slider)
      <li data-target="#main-slide" data-slide-to="<?php echo $key ?>" @if($key==0) class="ctive" @endif></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach($sliders as $key => $slider)
      <div class="carousel-item @if($key==0) active @endif" >
        <img class="d-block w-100" src="{{asset('assets/img/slider/'.$slider->image)}}" alt="$slider->image">
        <div class="carousel-caption d-md-block">
          <p class="fadeInUp wow" data-wow-delay=".6s">{{ $slider->text }}</p>
          <h1 class="wow fadeInDown heading" data-wow-delay=".4s">{{ $slider->title }}</h1>
          <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
          <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a>
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
      <span class="carousel-control" aria-hidden="true"><em class="lni-chevron-left"></em></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
      <span class="carousel-control" aria-hidden="true"><em class="lni-chevron-right"></em></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Main Carousel Section End -->