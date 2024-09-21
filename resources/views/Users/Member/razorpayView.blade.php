<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @section('title')
    Member Dashboard
    @endsection
    
    @extends('Users.Member.layouts.app')
    
    @section('content')
    <script>
        function three() {
      alert('Details Submitted Now Proceed to Payment!!!!');
      window.location.href = '{{ route('razorpay.payment.store') }}';
    }
        </script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>JumpStart-Sports Payment</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
          

    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="col col-sm-6" id="createpayment">
                    <form action="{{ route('member#createPayment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="form-foating py-3">
                          <h3 class="text-center" style="color: black" ><b> Payment </b></h3>
                      </div>
                      <div class="form-floating mb-3">
                          <label for="name" style="color: black">Payer Name</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="payer_name">
                       
          
                          {{-- Validation  --}}
                          @if ($errors->has('payer_name'))
                              <p class="text-danger">
                                  {{ $errors->first('payer_name') }}
                              </p>
                          @endif
                          {{-- end of validation  --}}
          
                      </div>
          
                      <div class="form-floating mb-3">
                          <label for="name" style="color: black">Payer Address</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="Address" name="payer_address">
                    
          
                        {{-- Validation  --}}
                          @if ($errors->has('payer_address'))
                              <p class="text-danger">
                                  {{ $errors->first('payer_address') }}
                              </p>
                          @endif
                          {{-- end of validation  --}}
          
                      </div>
          
                      <div class="form-floating mb-3">
                          <label for="formFile" style="color: black">Payer Phone</label>
                          <input type="text" class="form-control" id="floatingInput" placeholder="Phone" name="payer_phone">
                
          
                          {{-- Validation  --}}
                          @if ($errors->has('payer_phone'))
                              <p class="text-danger">
                                  {{ $errors->first('payer_phone') }}
                              </p>
                          @endif
                          {{-- end of validation  --}}
                      </div>
          
                      <button type="submit" class="btn btn-blue" onclick="three();" style="float: right;">Submit
                      </button>
                      <button type="reset" class="btn btn-red" style="float: right;margin-right: 20px;">Clear</button>
          
                  </form>
          
                </div>
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
  
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
  
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                            <a href="{{ route('member#index') }}" class="btn btn-primary">Continue Shopping</a>
                        @endif
                        <br><br><br><br>
                        <div class="card card-default">
                            <div class="card-header">
                                JumpStart Payment
                            </div>
  
                            <div class="card-body text-center">
                                <form action="{{ route('razorpay.payment.store') }}" method="POST" >
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ env('RAZORPAY_KEY') }}"
                                            data-amount="1000"
                                            data-buttontext="Pay Now"
                                            data-name="ItSolutionStuff.com"
                                            data-description="Rozerpay"
                                            data-image="https://www.itsolutionstuff.com/frontTheme/images/logo.png"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="#ff7529">
                                    </script>
                                </form>
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
@endsection

</html>