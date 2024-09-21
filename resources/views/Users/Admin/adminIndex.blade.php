@section('title')
    Admin Dashboard
@endsection

@extends('Users.Admin.layouts.app')

@section('content')
<br><br>
<br><br>
<br><br>
<br><br>

<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <a href="{{ route('admin#addProduct') }}">
            <button type="button" class="btn btn-primary mt-4 mb-4">Add Product</button>
            </a>
            </div>
        </div>

        <div class="card  mb-4" style="background-color: rgba(0, 0, 0, 0.347)">
            <div class="card-body">
            <div class="table-responsive">
                <div class="mb-4">
                    {{-- Adding Categroy Session Checking  --}}
                    @if (Session::has('productCreated'))
                        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                            {{ Session::get('productCreated') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- End of Session Checking --}}

                    {{-- Updating Categroy Session Checking  --}}
                    @if (Session::has('updateData'))
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            {{ Session::get('updateData') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- End of Session Checking --}}

                    {{-- Deleting Categroy Session Checking  --}}
                    @if (Session::has('productDeleted'))
                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            {{ Session::get('productDeleted') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- End of Session Checking --}}
                </div>
                <table class="table table-bordered" >

                    <thead>
                        <tr>
                        <th  style="color: aliceblue">No.</th>
                        <th  style="color: aliceblue">Product Name</th>
                        <th  style="color: aliceblue">Product Type</th>
                        <th  style="color: aliceblue">Product image</th>
                        <th  style="color: aliceblue">Product price</th>
                        <th  style="color: aliceblue">Action</th>
                        <th  style="color: aliceblue">Details</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($productData as $product)
                            <tr>
                                <td  style="color: aliceblue">{{ $product->id }}</td>
                                <td  style="color: aliceblue">{{ $product->product_name }}</td>
                                <td  style="color: aliceblue">{{ $product->product_type }}</td>
                                <td  style="color: aliceblue">{{ $product->product_price }}</td>
                                <td>
                                    <img src="{{ asset('uploads/product/' . $product->product_image) }}" class="img-thumbnail" width="150px" height="150px"  alt="Images">
                                </td>
                                <td>
                                <a href="{{ route('admin#editProduct', $product->id) }}">
                                <button type="button" class="btn btn-outline-primary" id="edit">
                                    <i class="fa fa-edit"></i></button>
                                </a>

                                <a href="{{ route('admin#deleteProduct', $product->id) }}">
                                <button type="button" class="btn btn-outline-danger" id="delete">
                                    <i class="fa fa-trash"></i></button>
                                </a>
                                </td>

                                <td>
                                    <a href="{{ route('admin#detailsProduct', $product->id) }}" >
                                    <button type="button" class="btn btn-outline-primary" style="color: black" id="details">
                                        <i class="fa fa-details"></i>  Detail</button>
                                    </a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                 {{-- {!! $productData->links() !!}  --}}
            </div>
            </div>
        </div>
    </div>
@endsection
