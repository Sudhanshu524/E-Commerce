@section('title')
    Rider Dashboard
@endsection

@extends('Users.Rider.layouts.app')

@section('content')
<br><br><br><br><br><br>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('rider#index') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rider Dashboard</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<div class="container">
    <div class="card mt-4 mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table style="color: black" class="table table-bordered" >

            <thead>
              <tr>
                <th style="color: black">No.</th>
                <th style="color: black">User Id</th>
                <th style="color: black">Admin Id</th>
                <th style="color: black">Member Id</th>
                <th style="color: black">Product Id</th>
                <th style="color: black">Customer Name</th>
                <th style="color: black">Delivery Address</th>
                <th style="color: black">Payment Status</th>
                <th style="color: black">Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($order as $item)
                    <tr>
                        <td style="color: black">{{ $item->id }}</td>
                        <td style="color: black">{{ $item->user_id }}</td>
                        <td style="color: black">{{ $item->admin_id }}</td>
                        <td style="color: black">{{ $item->member_id }}</td>
                        <td style="color: black">{{ $item->product_id }}</td>
                        <td style="color: black">{{ $item->customer_name }}</td>
                        <td style="color: black">{{ $item->delivery_address }}</td>
                        <td style="color: black">{{ $item->payment_method }}</td>
                        <td>
                            <a href="{{ route('rider#riderDetails', $item->id) }}">
                                <button type="button" class="btn btn-outline-primary" > Details</button>
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
