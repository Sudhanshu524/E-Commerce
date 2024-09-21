@section('title')
    Donor
@endsection

@extends('Users.Partner.layouts.app')

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
        <li class="breadcrumb-item"><a href="{{ route('initiate.payment') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('initiate.payment') }}">Member Dashboard</a></li>
    </nav>

<div class="container" width="500px">
    <div  style="margin-top:110px;">
        <div ><h3 style="color: aliceblue" class="text-center"><b> Donation Box</b></h3></div>
        <div class="panel-body">
            <form action="{{ route('make.payment') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}

                @if($message = Session::get('message'))
                        <p>{!! $message !!}</p>
                    <?php Session::forget('success'); ?>
                @endif

                <div class="row">
                    <div class="col-md-12">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-12">
                        <strong>Mobile No:</strong>
                        <input type="text" name="mobile" class="form-control" maxlength="10" placeholder="Mobile No." required>
                    </div>
                    <div class="col-md-12">
                        <strong>Email:</strong>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="col-md-12" >
                        <br/>
                        <div >
                        <strong>Amount:</strong>
                        <input type="Int" class="form-control" placeholder="Amount" name="Amount" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br/>
                        <button type="submit" class="btn btn-success">Paytm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection