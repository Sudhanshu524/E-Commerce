@section('title')
Member Dashboard
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<br><br>
<br><br>
<br><br>
<br><br>
<!-- Start breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Member Dashboard</li>
    </ol>
</nav>

<!-- END breadcrumb -->

<div class="container" style="background-color: rgba(0, 0, 0, 0.362)">
<div class="card mt-4 mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" >

        <thead>
          <tr>
            <th  style="color: aliceblue">partner_id</th>
            <th  style="color: aliceblue">user_id</th>
            <th  style="color: aliceblue">meal_name</th>
            <th  style="color: aliceblue">meal_type</th>
            <th  style="color: aliceblue">meal_image</th>
            <th  style="color: aliceblue">Action</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($order as $item)
                <tr>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->partner_id }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->user_id }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->meal_name }}</td>
                    <td  style="color: rgb(0, 0, 0)">{{ $item->meal_type }}</td>
                    <td  style="color: rgb(0, 0, 0)">  <img src="{{ asset('uploads/meal/' . $item->meal_image) }}" class="img-thumbnail" width="150px" height="150px"  alt="Images"></td>
                    <td  style="color: rgb(0, 0, 0)">
                        <a href="{{ route('member#memberDetails', $item->id) }}">
                            <button type="button" class="btn btn-outline-primary" >Details</button>
                        </a>
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
