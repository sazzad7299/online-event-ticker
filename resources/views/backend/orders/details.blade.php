@extends('backend.layouts.master')


@section('main_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="content">
        <a href="{{ route('admin.orders') }}" class="btn btn-primary">Back</a>
        <button style="" class="btn btn-danger" onclick="printDiv('printMe')"> <em class="fas fa-print" ></em></button>
          <div class="card" id="printMe">
            <div class="card-body" >
              <h4 class="card-title">Booking #</h4>
              
              <div class="row">
                <div class="col-md-6">
                    <p class="card-description">
                        <h4>User Details</h4>
                      </p>
                  <address>
                    <p class="fw-bold">Name: {{ $user->name }}</p>
                    <p>
                      Email:{{ $user->email }}
                    </p>
                    <p>
                        Phone: {{ $user->phone }}
                    </p>
                  </address>
                </div>
                <div class="col-md-6">
                    <p class="card-description">
                        <h4>Payment Details</h4>
                      </p>
                  <address >
                    <p>Payment Method: <strong>{{ $order->payment_method }}</strong></p>
                    <p>Transection Number: <strong>{{ $order->transaction_number }}</strong></p>
                    <p>Transection Id: <strong>{{ $order->transaction_id }}</strong></p>
                    <p>Amount: <strong>{{ $order->grand_total }}৳</strong></p>
                    <p>Payment Status: <strong>{{ $order->status }}</strong></p>
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
                            Ticket
                          </th>
                          <th>
                            Amount
                          </th>
                        </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->event_name }}</td>
                        <td>{{ $order->qty }}</td>
                        <td>{{ $order->price }}৳</td>
                    </tr>
                    @endforeach
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