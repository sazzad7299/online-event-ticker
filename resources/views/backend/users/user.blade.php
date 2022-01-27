@extends('backend.layouts.master')


@section('main_content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">User(All)</h4>
        <p class="card-description">
          
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead> 
                <tr>
                    <th>
                        #Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                    {{ $user->id }}
                    </td>
                    <td>
                    {{ $user->name }}
                    </td>
                    <td>
                    {{ $user->email }}
                    </td>
                    <td>
                    {{  $user->phone }}
                    </td>
                    <td>
                    <a href=""><em class="fas fa-edit"></em></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection