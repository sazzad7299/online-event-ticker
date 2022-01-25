@extends('backend.layouts.master')


@section('main_content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">All Sliders</h1>
          <a href="{{route('allEvent')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                  class=" text-white-50"></i>All Sliders</a>                  
      </div>

    <div class="container-fluid">
        <form enctype="multipart/form-data" class="form-horizontal" action="{{ route('addslider') }}" method="post" name="add_banner" id="add-banner"> {{csrf_field()}}
           <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if(Session::has('flash_message_error'))
                            <div class="alert alert-error alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif   
                        @if(Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Heading(h1):</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title"  required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Text(p)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="text" id="text" required="true">
                                </div>
                            </div>
                            <div class="form-group row">
                                <h4 class="card-title mr-auto">Upload Image:</h4>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input name="image" id="image" type="file" size="19" required >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Text Position</label>
                                <div class="col-sm-9">
                                    <select name="position" id="position" class="form-control">
                                        <option value="0" selected>MIDDLE</option>
                                        <option value="1">TOP-LEFT</option>
                                        <option value="2" >TOP-RIGHT</option>
                                        <option value="3">BUTTOM-LEFT</option>
                                        <option value="4" >BUTTOM-RIGHT</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Enable:</label>
                                <div class="col-sm-9">
                                    <input class="mt-2" type="checkbox"  name="status" id="status" value="1">
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <input type="submit" class="btn btn-primary" value="Add Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </form>   
</div>
</div>
<!-- /.container-fluid -->
    
@endsection