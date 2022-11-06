@extends('layouts.front_master')
@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>

<div class="container">

    <div class="row">
        @if(count($event)>0)
        @foreach($event as $item)
        <div class="col-xs-12 col-md-6 col-lg-4">
          <div class="about-item">
            <img class="img-fluid" src="{{ asset('images/event/'.$item->image) }}" alt="">
            <div class="about-text">
              <h3><a href="#">{{ $item->title }}</a></h3>
              <h5>Price:{{ $item->price }}৳   Seat:{{ $item->seat }} </h5>
              
              @if($item->seat ==0)
              <button type="button" class="btn btn-common btn-rm" disabled>Not Available</button>
              @else
              <a class="btn btn-common btn-rm" href="{{ url('cart/'.$item->id) }}">Book Now</a>
              <a class="btn btn-common btn-rm" href="{{ url('event/'.$item->id) }}">View Details</a>
              @endif
            </div>
          </div>
        </div>
        @endforeach
        @else
        <p class="alert alert-danger">No Event Found</p>
        @endif

        <div>
             <!-- Pagination -->
             {{$event->links()}}
        </div>
      </div>

    </div>
</div>

@endsection
