@extends('layouts.front_master')
@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<div class="container">
    <div class="row " >
        <div class="col-md-12">
            <h5 class="text-center pb-5">All Categories</h5>
            <div class="row mb-5"> 
                @if(count($categories)>0)
                    @foreach($categories as $category)
                    <div class="col-md-3">
                        <div class="card">
                          <a href=""><img src="{{asset('images/category/'.$category->photo)}}" class="card-img-top" alt="{{$category->title}}" height="250px" /></a>
                          <div class="card-body">
                            <h5 class="card-title"><a href="">{{$category->title}}</a></h5>
                          </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <p class="alert alert-danger">No Category Found</p>
                @endif
            </div>
            <!-- Pagination -->
            {{$categories->links()}}
        </div>
        <!-- Right SIdebar -->
        
    </div>
</div>

@endsection