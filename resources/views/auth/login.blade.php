



    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   
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
        height:500px;
        margin:0px;
        padding:0px;
        outline:none;
    }
    img{
        margin-bottom:50px;
        width:200px;
        height:80px;
    }
    .card-header{
        text-align:center;
        font-weight:bold;
        font-size:45;
        font-family: open sans;
    }

    .img1 {
            position: absolute;
            top: calc( 30vh - 100px);
            left: calc( 23vw - 100px);
            width: 200px;
            height: 200px;
        }
        
        .btn-login {
            color: white;
            background-color: #28E096;
            text-align: center;
            border: none;
            width: 150px;
            height: 40px;
        }
        
        .container {
            margin-left: 0px;
            margin-right: 0px;
            border-right: 0px;
        }
        
        .logincust {
            margin-left: 100px;
            display: none;
        }
        
        .loginpart {
            margin-left: 100px;
            display: none;
        }
        
        .nav-link {
            font-weight: bold;
            font-size: 15px;
        }
        
       
        
        .navbar-brand {
            margin-left: 60px;
            font-size: 40px;
            font-weight: bold;
            font-style: italic;
        }
    </style>


@extends('layouts.default')

@section('content')

<div class="container" style="max-width:100%;">
    <div class="row " style="width:100%;">

        <div class="col-lg-6">

            <div class="customer" style="width:100%;height:100%;background-color: #6610f2;">

              <img class="img1" src="/images/png/cust-icon.png" alt="Cust-icon image" onclick="loginCust(this)">
            </div>
           

            <form method="POST" class="logincust" action="{{ route('login') }}">
                 @csrf
                 <img src="/images/png/cust-icon-blue.png" alt="logocust">
            <div class="card">
                <div class="card-header" style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic; font-size: 1.75rem;">{{ __('Login') }}</div>

                <div class="card-body">
                   
                        <div class="form-group row">
                            <label for="email" ></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email ID" type="email"  class="regInput form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" ></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="regInput form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input"  type="checkbox" name="remember" style="margin-left:-100px;" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="margin-left:-80px;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="margin-left:100px;margin-top:-40px;">
                                <button type="submit" class="btn-login " >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: underline;color:grey;margin-left:-170px; margin-top:100px;">
                                        {{ __('Forgot Your Password?') }}
                                        
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



        
        <div class="col-lg-6">

            <div class="partner" style="width:100%;height:100%;background-color: #F96554;;">

              <img class="img1" src="/images/png/part-icon.png" alt="Part-icon image" onclick="loginPart(this)">
            </div>
           

            <form method="POST" class="loginpart" action="{{ route('login') }}">
                 @csrf
                 <img src="/images/png/part-icon-blue.png" alt="logopart" >
            <div class="card">
                <div class="card-header"style=" font-size: 1.75rem; color:#001445;font-family:open sans;font-weight: bold;font-style: italic;" >{{ __('Login') }}</div>

                <div class="card-body">
                   
                        <div class="form-group row">
                            <label for="email"></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email ID" type="email" class="regInput form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" ></label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password"  class="regInput form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" style="margin-left:-100px;" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="margin-left:-80px;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" style="margin-left:100px;margin-top:-40px;">
                                <button type="submit" class="btn-login " >
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: underline;color:grey;margin-left:-170px; margin-top:100px; ">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
function openDash(){
    window.location.href="http://127.0.0.1:3000/dashboard/admin/index2.html"
}
function loginCust(asd) {
    document.getElementsByClassName('logincust')[0].style.display = "block";
    document.getElementsByClassName('customer')[0].style.display = "none";
    document.getElementsByClassName('partner')[0].style.display = "block";
    document.getElementsByClassName('loginpart')[0].style.display = "none";
}

function loginPart(bsd) {
    document.getElementsByClassName('loginpart')[0].style.display = "block";
    document.getElementsByClassName('partner')[0].style.display = "none";
    document.getElementsByClassName('customer')[0].style.display = "block";
    document.getElementsByClassName('logincust')[0].style.display = "none";

}
</script>


<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/registration.css') }}" rel="stylesheet">