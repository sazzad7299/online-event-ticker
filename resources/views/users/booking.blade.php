@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<div class="dashboard1">
    <div class="right-sidebar">
        <ul>
            <li><a href="{{ route('home') }}" >Dashboard</a></li>
            <li><a href="#" class="active">Booking</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
          </ul>
    </div>
    <div class="content">
        <div class="grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Your Booking Details</h4>
                <p class="card-description">
                  <code>You may download your ticket if admin verify your payment</code>
                </p>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                        
                        <tr>
                            <th>
                              #id
                            </th>
                            <th>
                              Name
                            </th>
                            <th>
                              Ticket
                            </th>
                            <th>
                              Amount
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        
                      
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                      <tr>
                        <td class="py-1">
                          {{ $loop->iteration }}
                        </td>
                        <td>
                          {{ $order->event_name }}
                        </td>
                        <td>
                          {{ $order->qty }}
                        </td>
                        <td>
                          ৳{{ $order->price }}
                        </td>
                        <td>{{ $order->pay_status }}</td>
                        <td>
                          <a href="{{ url('home/booking/details/'.$order->id) }}"><em class="lni lni-eye"></em></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
   
@endsection
