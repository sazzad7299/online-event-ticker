@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
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

@endsection
