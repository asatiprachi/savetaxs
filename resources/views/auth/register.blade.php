


    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
    .card{
        width:90%;
    }
    .col-lg-6{
        width:100%;
        height:650px;
        margin:0px;
        padding:0px;
        outline:none;
    }
    img{
        margin-top:30px;
        margin-bottom:50px;
        width:160px;
        height:60px;
    }
    .card-header{
        text-align:center;
        font-weight:bold;
        font-size:45;
        font-family: open sans;
    }
    </style>
@extends('layouts.default')


@section('content')

<div class="container" style="max-width:100%;">
    <div class="row" style="width:100%;">
        <div class="col-lg-6">


          <div class="customer" style="width:100%;height:100%;background-color: #6610f2;">

             <img class="img1" src="/images/png/customer_signup.png" alt="Cust-icon image" onclick="registrationCust(this)">
          </div>
          

          <form method="POST" class="registrationcust" action="{{ route('register') }}">
            @csrf
            <img src="/images/png/customer_signup_blue.png" alt="logocust">

            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="regInput" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="regInput" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="regInput" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="regInput" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-registration">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        

        <div class="col-lg-6">


          <div class="partner" style="width:100%;height:100%;background-color: #F96554;">

             <img class="img1" src="/images/png/partner_signup.png" alt="part-icon image" onclick="registrationPart(this)">
          </div>
          

          <form method="POST" class="registrationpart" action="{{ route('register') }}">
            @csrf
            <img src="/images/png/partner_signup_blue.png" alt="logopart">

            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="regInput" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="regInput" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="regInput" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="regInput" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-registration">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
@endsection

<script>

function registrationCust(asd) {
    document.getElementsByClassName('registrationcust')[0].style.display = "block";
    document.getElementsByClassName('customer')[0].style.display = "none";
    document.getElementsByClassName('partner')[0].style.display = "block";
    document.getElementsByClassName('registrationpart')[0].style.display = "none";
}

function registrationPart(bsd) {
    document.getElementsByClassName('registrationpart')[0].style.display = "block";
    document.getElementsByClassName('partner')[0].style.display = "none";
    document.getElementsByClassName('customer')[0].style.display = "block";
    document.getElementsByClassName('registrationcust')[0].style.display = "none";

}
</script>


<link href="{{ asset('css/main.css') }}" rel="stylesheet">