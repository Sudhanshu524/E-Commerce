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

<!-- Start content -->
<div class="container" style="background-color: rgba(0, 0, 0, 0.362)">
  <div class="card mt-4 mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped" >
  
          <thead>
            <tr>
              <th  style="color: aliceblue">Product Id</th>
              <th  style="color: aliceblue">Product Name</th>
              <th  style="color: aliceblue">Product Type</th>
              <th  style="color: aliceblue">Product Price</th>
              <th  style="color: aliceblue">Product Image</th>
              <th  style="color: aliceblue">Action</th>
            </tr>
          </thead>
  
          <tbody>
              @foreach ($productOrder as $item)
                  <tr>
                      <td  style="color: rgb(0, 0, 0)">{{ $item->id }}</td>
                      <td  style="color: rgb(0, 0, 0)">{{ $item->product_name }}</td>
                      <td  style="color: rgb(0, 0, 0)">{{ $item->product_type }}</td>
                      <td  style="color: rgb(0, 0, 0)">{{ $item->product_price }}</td>
                      <td  style="color: rgb(0, 0, 0)">  <img src="{{ asset('uploads/product/' . $item->product_image) }}" class="img-thumbnail" width="150px" height="150px"  alt="Images"></td>
                      <td  style="color: rgb(0, 0, 0)">
                          <a href="{{ route('member#addOrder', $item->id) }}">
                              <button type="button" class="btn btn-outline-primary" > Order</button>
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

<!-- End content -->


@endsection

              