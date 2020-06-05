


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
    
@extends('layouts.default')


@section('content')


<div class="row"  style="width:100vw">

<div class="col-lg-6" style="width:100%;height:700px;margin:0px;padding:0px;outline:none;">
    <div class="customer" action="/user/registration" style="width:100%;height:100%;background-color: #6610f2;">

        <img class="img1" src="/images/png/customer_signup.png" alt="Cust-icon image" onclick="registrationCust(this)">
    </div>

    <form  class="registrationcust" style="width:100%;height:100%;" method="POST" action="{{ route('register') }}">
    

        <img src="/images/png/customer_signup_blue.png" alt="logocust" style="margin-top:30px;margin-bottom:50px;width:160px;height:60px;">

        <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">{{ __('Register') }}</h3><br/>

        <input id="name" class="regInput form-control @error('name') is-invalid @enderror" type="text"  placeholder="Frist Name" ><br/>
        <input id="second name" class="regInput" type="text" name="secondname" placeholder="Last Name"><br/>
        <input id="email" class="regInput form-control @error('name') is-invalid @enderror" type="email" name="email" placeholder="Email ID"><br/>
        <input id="password" class="regInput form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password"><br/>
        <input id="password-confirm" class="regInput form-control @error('password') is-invalid @enderror" type="password"  name="password2" placeholder="Re-Enter Password"><br/>
        <div style="margin-bottom:20px;">
        </div>
        <button type="submit" class="btn-registration btn btn-primary"  >Registration</button><br/><br/>
      
                    </form>
</div>


<div  class="col-lg-6" style="height:700px;margin:0px;padding:0px;outline-style:none;">
    <form action="{{ route('register') }}" method="POST" class="partner" style="width:100%;height:100%;background-color:#F96554;" >
        <img class="img1" src="/images/png/partner_signup.png" alt="Part-icon image" onclick="registrationPart(this)">
    </form>

    <form action="/user/registration" method="POST" class="registrationpart" style="width:100%;height:100%;">
        <img src="/images/png/partner_signup_blue.png" alt="logopart" style="margin-bottom:50px;width:200px;height:80px;">

        <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">{{ __('Register') }}</h3><br/>

        <input id="name" class="regInput form-control @error('name') is-invalid @enderror" type="text"  placeholder="Frist Name" ><br/>
        <input id="second name" class="regInput" type="text" name="secondname" placeholder="Last Name"><br/>
        <input id="email" class="regInput form-control @error('name') is-invalid @enderror" type="email" name="email" placeholder="Email ID"><br/>
        <input id="password" class="regInput form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password"><br/>
        <input id="password-confirm" class="regInput form-control @error('password') is-invalid @enderror" type="password"  name="password2" placeholder="Re-Enter Password"><br/>

        <div style="margin-bottom:20px;">
        </div>
        <button type="submit" class="btn-registration btn btn-primary" >Registration</button><br/><br/>
    </form>
</div>
</div>
</div>
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

@endsection
<link href="{{ asset('css/main.css') }}" rel="stylesheet">