@section('title')
    Member Create Order
@endsection

@extends('Users.Member.layouts.app')

@section('content')
<style type="text/css">
    #createm{
        max-width: 500px;
        padding: 50px;
        height: auto;
        width: 100%;
        margin: 50px auto;
        background-color: rgba(136, 135, 135, 0.337);
        border: 1px solid rgba(0,0,0,0.1);
    }
</style>
<br><br><br><br><br><b><b></b></b>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('member#index') }}">Member Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create menu</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">
      <div class="col col-sm-6" id="createm">
          <form action="{{ route('member#createOrder') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-foating py-3">
                <h3 class="text-center" ><b> Create Order </b></h3>
            </div>
            <div class="form-floating mb-3">
                <label for="name">Delivery Address</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="Add Delivery Address" name="delivery_address">
             

                {{-- Validation  --}}
                @if ($errors->has('delivery_address'))
                    <p class="text-danger">
                        {{ $errors->first('delivery_address') }}
                    </p>
                @endif
                {{-- end of validation  --}}

            </div>

            <div class="form-floating mb-3">
                <label for="name">Customer Name</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="Add Customer Name" name="customer_name">
             

                {{-- Validation  --}}
                @if ($errors->has('customer_name'))
                    <p class="text-danger">
                        {{ $errors->first('customer_name') }}
                    </p>
                @endif
                {{-- end of validation  --}}

            </div>

<br>
            <div class="form-floating mb-3">
                <select name="admin" class="form-control">
                    <option value="">Choose Organization Name</option>
                    @foreach ($adminData as $admin)
                        <option value="{{ $admin->id }}">{{ $admin->admin_organization }}</option>
                    @endforeach
                </select>
            </div>
            <br>

            <div class="form-floating mb-3">
                <select name="user" class="form-control">
                    <option value="">Choose City</option>
                    @foreach ($userData as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->address }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-floating mb-3">
                <select name="member" class="form-control">
                    <option value="">Member Name</option>
                    @foreach ($memberData as $members)
                        <option value="{{ $members->id }}">{{ $members->member_name }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-floating mb-3">
                <select name="product" class="form-control">
                    <option value="">Product name</option>
                    @foreach ($productData as $products)
                        <option value="{{ $products->id }}" >{{ $products->product_name }}</option>
                    @endforeach
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-blue" style="float: right;">Create
            </button>
            <button type="reset" class="btn btn-red" style="float: right;margin-right: 20px;">Clear</button>

        </form>

      </div>
    </div>
  </div>

<!-- End content-->
@endsection
