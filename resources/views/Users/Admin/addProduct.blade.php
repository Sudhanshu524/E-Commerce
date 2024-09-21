@section('title')
   Admin Create Product
@endsection

@extends('Users.Admin.layouts.app')

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
        <li class="breadcrumb-item"><a href="{{ route('admin#index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin#index') }}">Admin Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create menu</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">
      <div class="col col-sm-6" id="createm">
          <form action="{{ route('admin#createProduct') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-foating py-3">
                <h3 class="text-center" ><b> Create Product </b></h3>
            </div>
            <div class="form-floating mb-3">
                <label for="name">Product Name</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="name" name="product_name">
             

                {{-- Validation  --}}
                @if ($errors->has('product_name'))
                    <p class="text-danger">
                        {{ $errors->first('product_name') }}
                    </p>
                @endif
                {{-- end of validation  --}}

            </div>

            <div class="form-floating mb-3">
                <label for="name">Product Type</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="type" name="product_type">
          

              {{-- Validation  --}}
                @if ($errors->has('product_type'))
                    <p class="text-danger">
                        {{ $errors->first('product_type') }}
                    </p>
                @endif
                {{-- end of validation  --}}

            </div>
            <div class="form-floating mb-3">
                <label for="name">Product Price</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="price" name="product_price">
          

              {{-- Validation  --}}
                @if ($errors->has('product_price'))
                    <p class="text-danger">
                        {{ $errors->first('product_price') }}
                    </p>
                @endif
                {{-- end of validation  --}}

            </div>

            <div class="form-floating mb-3">
                <label for="formFile">Product Image</label>
              <input type="file" class="form-control" id="floatingInput" placeholder="Image" name="product_image">
      

                {{-- Validation  --}}
                @if ($errors->has('product_image'))
                    <p class="text-danger">
                        {{ $errors->first('product_image') }}
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
                    <option value="">Choose Address</option>
                    @foreach ($userData as $user)
                        <option value="{{ $user->id }}">
                            
                                {{ $user->address }}
                       
                        </option>
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
