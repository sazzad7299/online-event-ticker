@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<div class="dashboard1">
    <div class="right-sidebar">
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li><a href="{{ route('booking') }}">Booking</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
          </ul>
    </div>
    <div class="content">
        <div class="heading-count">
            <h2 class="wow fadeInDown" data-wow-delay="0.2s">Hi, {{ Auth::user()->name }}!</h2>
        </div>
        <div id="item" class="time-count">
            <a style="course:pointer" class="time-entry days"><span>0</span>Completed Event</a>

            <div class="time-entry"><span>00</span> On Going</div>
            <div class="time-entry"><span>00</span> Upcomming</div>
            <a href="{{ route('profile') }}" class="time-entry" class="btn btn-primary" ><span><em class="lni lni-user"></em></span> Profile</a>
        </div>
    </div>
</div>
   
@endsection
