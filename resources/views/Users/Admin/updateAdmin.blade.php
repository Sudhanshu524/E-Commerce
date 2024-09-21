@section('title')
    Partner Update product
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
<style type="text/css">
    #partner{
      max-width: 500px;
        padding: 50px;
        height: auto;
        width: 100%;
        margin: 50px auto;
        background-color: rgba(136, 135, 135, 0.337);
        border: 1px solid rgba(0,0,0,0.1);
    }
</style>
<br><br><br><br><br><br>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin#index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin#index') }}">Admin Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update admin</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->

<div class="container">
    <div class="row">

    <div class="col col-sm-6" id="admin">
      <form action="{{ route('admin#updateAdmin', $editAdmin->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-foating py-3">
            <h3 class="text-center"> Update Menu</h3>
        </div>
        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="admin_name" value="{{ old('admin_name', $editAdmin->admin_name) }}">
        <label for="name">admin Name</label>
        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="admin_type" value="{{ old('admin_type', $editAdmin->admin_type) }}">
        <label for="name">Product Type</label>
        </div>

        <div class="form-floating mb-3 text-center">
            @if ($editProduct->product_image)
                <img src="{{ asset('uploads/product/'. $editProduct->product_image) }}" class="img-thumbnail" width="150px" height="150px" alt="category image ">
                <br>
            @endif
        </div>

        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingInput" placeholder="name" name="product_image" value="{{ $editProduct->product_image }}">
            <label for="formFile">product Image</label>
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
<!-- End content -->

@endsection
