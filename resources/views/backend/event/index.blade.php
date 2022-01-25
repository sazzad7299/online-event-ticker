@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">AlL Events</h1>
            <a href="{{route('addEventForm')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Event</a>
                      

        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
              <tr class="text-center" style="background:rgb(35, 35, 245)">
                <th scope="col" class="text-white">Title</th>
                <th scope="col" class="text-white">Venue</th>
                <th scope="col" class="text-white">Category</th>
                <th scope="col" class="text-white">Seat</th>
                <th scope="col" class="text-white">Price</th>
                <th scope="col" class="text-white">Status</th>
                <th scope="col" class="text-white">Photo</th>

                <th class="text-white" scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($events  as $event )
                @php
                  $parent_cat = DB::table('categories')->select('title')->where('id',$event->parent_id)->get();
                @endphp
                <tr class="text-center">
                    <td>{{$event->title}}</td>
                    <td>{{$event->venue}}</td>
                    <td>
                      {{$event->category->title}}
                    </td>
                    <td>
                      {{$event->seat}}
                    </td>
                    
                    <td>
                      {{$event->price}}
                    </td>
                    <td>
                    @if ($event->status=='active')
                        <span class="badge badge-success">{{$event->status}} </span>
                    @else
                    <span class="badge badge-warning">{{$event->status}} </span>
                    @endif
                    </td>
                    <td>
                        <img src="{{asset('images/event/'.$event->image)}}" alt="" width="100" height="100" style="border-radius:50%">
                    </td>
                    <td>
                        <a href="{{route('eventEdit',$event->id)}}"  class="btn btn-primary btn-sm mr-1 edit"><span class="fa fa-edit"></span></a>
                                          
                        <a href="{{route('eventDelete',$event->id)}}"  class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                    </td>

                  </tr>
                @endforeach
             
              
            </tbody>
          </table>


    </div>    


    
@endsection

