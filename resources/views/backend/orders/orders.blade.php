@extends('backend.layouts.master')


@section('main_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <a id="complete" class="card-title btn btn-primary m-2 text-white">Completed ({{ $comorders->count() }})</a><a id="pending"  class="card-title btn btn-danger m-2 text-white">Pending ({{ $pendingorders->count() }})</a>
        <p class="card-description">
            @if(Session::has('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('message') !!}</strong>
            </div>
        @endif
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
                <tr>
                    <th>
                        #Id
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Amount
                    </th>
                    <th>
                        Payment Method
                    </th>
                    <th>
                        Trans Num
                    </th>
                    <th>
                        Trans Id
                    </th>
                    <th>
                        Status
                    </th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody class="complete">
            @foreach ($comorders as $order)
                <tr>
                    <td>
                    {{ $order->id }}
                    </td>
                    <td>
                    {{ $order->user_email }}
                    </td>
                    <td>
                        {{ $order->grand_total }}
                    </td>
                    <td>
                    {{$order->payment_method }}
                    </td>
                    <td>
                    {{  $order->transaction_number }}
                    </td>
                    <td>
                    {{  $order->transaction_id }}
                    </td>
                    <td>
                    <span class="btn btn-primary">{{ $order->status }}</span>
                    </td>
                    <td><a href="{{ url('admin/orders/details/'.$order->id) }}" class="btn btn-warning"> <em class="fas fa-eye"></em></a></td>
                </tr>
            @endforeach
            </tbody>
            <tbody class="pending">
                @foreach ($pendingorders as $order)
                    <tr>
                        <td>
                        {{ $order->id }}
                        </td>
                        <td>
                        {{ $order->user_email }}
                        </td>
                        <td>
                            {{ $order->grand_total }}
                        </td>
                        <td>
                        {{$order->payment_method }}
                        </td>
                        <td>
                        {{  $order->transaction_number }}
                        </td>
                        <td>
                        {{  $order->transaction_id }}
                        </td>
                        <td>
                            <span class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-xs" type="button" data-toggle="dropdown">{{ucfirst($order->status)}}
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="orders/status/{{$order->id}}/complete">Completed</a></li>
                                </ul>
                            </span>
                        </td>
                        <td><a href="{{ url('admin/orders/details/'.$order->id) }}" class="btn btn-warning"> <em class="fas fa-eye"></em></a></td>
                    </tr>
                @endforeach
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
