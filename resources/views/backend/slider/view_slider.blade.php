@extends('backend.layouts.master')


@section('main_content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">AlL Sliders</h1>
                <a href="{{route('viewslider')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                        class="fas fa-plus fa-sm text-white-50"></i> Add Event</a>
                          
    
            </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr class="text-center" style="background:rgb(35, 35, 245)">
                          <th scope="col" class="text-white">Title</th>
                          <th scope="col" class="text-white">Banner ID</th>
                          <th scope="col" class="text-white">Title</th>
                          <th scope="col" class="text-white">Position</th>
          
                          <th scope="col" class="text-white">Image</th>
                          <th scope="col" class="text-white">Status</th>
          
                          <th class="text-white" scope="col">Action</th>
          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($banners as $banner)
                        <tr class="gradeX">
                          <td class="center">{{ $banner->id }}</td>
                          <td class="center">{{ $banner->title }}</td>
                          <td>
                            @if($banner->position==0) Middle @endif
                            @if($banner->position==1) TOP-LEFT @endif
                            @if($banner->position==2) TOP-RIGHT @endif
                            @if($banner->position==3) BUTTOM-LEFT @endif
                            @if($banner->position==4) BUTTOM-RIGHT  @endif
                            
                          </td>
                          <td class="center">
                            @if(!empty($banner->image))
                            <img src="{{ asset('assets/img/slider/'.$banner->image) }}" style="width:250px;" alt="">
                            @endif
                          </td>
                          <td class="center">@if($banner->status==1) Active @else Inactive @endif</td>
                          <td class="center">
                            <a href="{{ route('editslider',$banner->id) }}" class="btn btn-primary btn-mini"><em class="far fa-edit"></em></a> 
                            <a  href="{{ route('deleteSlider',$banner->id) }}" class="btn btn-danger btn-mini"><em class="far fa-trash-alt"></em></a>
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
<!-- /.container-fluid -->
    
@endsection