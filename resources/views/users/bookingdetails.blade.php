@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<div class="dashboard1">
  <div class="right-sidebar">
    <ul>
      <li><a href="{{ route('home') }}" >Dashboard</a></li>
      <li><a href="#" class="active">Booking</a></li>
      <li><a href="{{ route('profile') }}">Profile</a></li>
    </ul>
  </div>
  <div class="nav">
    <ul>
      <li><a href="{{ route('home') }}" ><em class="lni lni-home"></em></a></li>
      <li><a href="#" class="active"><em class="lni lni-home"></em></a></li>
      <li><a href="{{ route('profile') }}"><em class="lni lni-home"></em></a></li>
    </ul>
  </div>
  <div class="content">
    <a href="{{ route('booking') }}" class="btn btn-primary">Back</a>
    <button style="" class="btn btn-danger" onclick="printDiv('printMe')"> <em class="lni lni-printer" ></em></button>
      <div class="card" id="printMe">
        <div class="card-body" >
          <h4 class="card-title">Booking #{{ $orderDetails->id }}({{ $orderDetails->pay_status }})</h4>
          <p class="card-description">
            Billing Details
          </p>
          <div class="row">
            <div class="col-md-6">
              <address>
                <p class="fw-bold">{{ $user->name }}</p>
                <p>
                  Email:{{ $user->email }}
                </p>
                <p>
                    Phone: {{ $user->phone }}
                </p>
              </address>
            </div>
            <div class="col-md-6">
              <address class="text-primary">
                
              </address>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h4 class="card-title">Event</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                  
                  <tr>
                      <th>
                        Name
                      </th>
                      <th>
                        Location
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
                        Valid To
                      </th>
                    </tr>
                  
                
              </thead>
              <tbody>

                <tr>
                  <td>{{ $eventDetails->title }}</td>
                  <td>{{ $eventDetails->venue }}</td>
                  <td>{{ $orderDetails->qty }}</td>
                  <td>{{ $orderDetails->price }}</td>
                  <td>{{ $orderDetails->pay_status }}</td>
                  <td><?php echo date('d F',strtotime($eventDetails->end_date));?></td>
                </tr>

              </tbody>
            </table>
          </div>
          
          
        </div>
      </div>
  </div>
</div>
<script>
  function printDiv(printMe){
    var printContents = document.getElementById(printMe).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;

  }
</script>
   
@endsection
