@section('title')
    Partner Update Meal
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
<br>
<br><br><br><br>

<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin#index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin#index') }}">admin Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Menu</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container"style="background-image: url(../img/background.jpg); ">
    <div class="row">

        <div class="col col-sm-6" id="createm">
            <form action="{{ route('admin#updateProduct', $editProduct->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-foating py-3">
                    <h3 class="text-center"> Update Menu</h3>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name" name="product_name" value="{{ old('product_name', $editProduct->product_name) }}">
                <label for="name">Meal Name</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name" name="product_type" value="{{ old('product_type', $editProduct->product_type) }}">
                <label for="name">Meal Type</label>
                </div>

                <div class="form-floating mb-3 text-center">
                    @if ($editProduct->product_image)
                        <img src="{{ asset('uploads/product/'. $editProduct->product_image) }}" class="img-thumbnail" width="150px" height="150px" alt="category image ">
                        <br>
                    @endif
                </div>

                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingInput" placeholder="name" name="product_image" value="{{ $editProduct->product_image }}">
                    <label for="formFile">Meal Image</label>
                </div>

                <div class="form-floating mb-3">
                    <select name="admin" class="form-control">
                        <option value="">Choose Organization Name</option>
                        @foreach ($adminData as $admin)
                            <option value="{{ $admin->id }}">{{ $admin->admin_organization }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-floating mb-3">
                    <select name="user" class="form-control">
                        <option value="">Choose Address</option>
                        @foreach ($userData as $user)
                            <option value="{{ $user->id }}">
                                @if ($user->role == 'admin')
                                    {{ $user->address }}
                                @endif
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-outline-primary" style="float: right;">Update
                </button>

            </form>

      </div>
    </div>
  </div>

<!-- End content-->
@endsection
