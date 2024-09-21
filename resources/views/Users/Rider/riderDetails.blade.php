@section('title')
    Rider Dashboard
@endsection

@extends('Users.Rider.layouts.app')

@section('content')
<style type="text/css">
    #rider{
            max-width: 600px;
            padding: 20px;
            margin: 50px auto;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.1);
    }
</style>
<br>
<br>
<br>
<br>
<br>

<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('rider#index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('rider#index') }}">Rider Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rider Details Page</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
 
  <div class="card  mb-4" style="background-color: rgba(0, 0, 0, 0.347)">
      <div class="card-body">
      <div class="table-responsive">
          <div class="mb-4">
              {{-- Adding Categroy Session Checking  --}}
             
              {{-- End of Session Checking --}}

              
              {{-- End of Session Checking --}}

              {{-- Deleting Categroy Session Checking  --}}
              @if (Session::has('OrderDeleted'))
                  <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                      {{ Session::get('orderDeleted') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
              {{-- End of Session Checking --}}
          </div>
          <table class="table table-bordered" >

              <thead>
                  <tr>
                    <th  style="color: aliceblue">No.</th>
                    <th  style="color: aliceblue">User Id</th>
                    <th  style="color: aliceblue">Admin Id</th>
                    <th  style="color: aliceblue">Member Id</th>
                    <th  style="color: aliceblue">Product Id</th>
                    <th  style="color: aliceblue">Customer Name</th>
                    <th  style="color: aliceblue">Delivery Address</th>
                    <th  style="color: aliceblue">Payment Status</th>
                    <th  style="color: aliceblue">Action</th>
                  </tr>
              </thead>

              <tbody>
                  @foreach ($memberOrder as $item)
                      <tr>
                          <td  style="color: aliceblue">{{ $item->id }}</td>
                          <td  style="color: aliceblue">{{ $item->user_id }}</td>
                          <td  style="color: aliceblue">{{ $item->admin_id }}</td>
                          <td  style="color: aliceblue">{{ $item->member_id }}</td>
                          <td  style="color: aliceblue">{{ $item->product_id }}</td>
                          <td  style="color: aliceblue">{{ $item->customer_name }}</td>
                          <td  style="color: aliceblue">{{ $item->delivery_address }}</td>
                          <td  style="color: aliceblue">{{ $item->payment_method }}</td>
                          <td style="color: black">If Order is Placed then click placed button to confirm
                          <a href="{{ route('rider#deleteOrder', $item->id) }}">
                          <button type="button" class="btn btn-outline-danger" id="delete">
                              Placed</button>
                          </a>
                          </td>
                          
                      </tr>
                  @endforeach
              </tbody>
          </table>
          <h2 style="color: aliceblue">Customer Location</h2>
          <section id="google-map">
            <div id="map-canvas" class="wow animated fadeInUp"></div>
          </section>
        
        {{-- {!! $productData->links() !!}  --}}
      </div>
      </div>
  </div>
</div>
<!-- End content -->


@endsection
