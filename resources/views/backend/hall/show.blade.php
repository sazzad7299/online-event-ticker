@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">AlL Events</h1>
            <a href="{{route('addHall')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Event</a>
                      

        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
              <tr class="text-center" style="background:rgb(35, 35, 245)">
                <th scope="col" class="text-white">Name</th>
                <th scope="col" class="text-white">Day(TK)</th>
                <th scope="col" class="text-white">Night(TK)</th>
                <th scope="col" class="text-white">Fullday(TK)</th>
                <th scope="col" class="text-white">Photo</th>
                <th scope="col" class="text-white">Status</th>

                <th class="text-white" scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($halls as $item)
              <tr class="text-center">
                <td>{{ $item->name }}</td>
                <td>{{ $item->dPrice }}</td>
                <td>{{ $item->nPrice }}</td>
                <td>{{ $item->fPrice }}</td>
                <td>
                  @if(!empty($item->image))
                <img src="{{ asset('assets/img/hall/'.$item->image) }}" style="width:250px;" alt="">
                @endif
                </td>
                <td class="center">@if($item->status==1) Active @else Inactive @endif</td>
                <td>
                    <a href="{{ route('editHall',$item->id) }}"  class="btn btn-primary btn-sm mr-1 edit"><span class="fa fa-edit"></span></a>
                                      
                    <a href="{{ route('deleteHall',$item->id) }}"  class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                </td>
              </tr>
              @endforeach
                  
            </tbody>
          </table>


    </div>    


    
@endsection

