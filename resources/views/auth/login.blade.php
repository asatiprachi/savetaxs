



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
   


@extends('layouts.default')

@section('content')



<div class="row" style="width:100vw">

<div class="col-lg-6" style="width:100%;height:500px;margin:0px;padding:0px;outline:none;">
    <div class="customer" action="/user/login" style="width:100%;height:100%;background-color: #6610f2;">

        <img class="img1" src="/images/png/cust-icon.png" alt="Cust-icon image" onclick="loginCust(this)">
    </div>

    <form  class="logincust" style="width:100%;height:100%;" method="POST" action="{{ route('login') }}">
        <img src="/images/png/cust-icon-blue.png" alt="logocust" style="margin-top:30px;margin-bottom:50px;width:160px;height:60px;">

        <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">Login</h3><br/>
    
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email ID" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
        <input type="password" id="password"  name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
        <div style="margin-bottom:20px;">
            <a href="" style="text-decoration: underline;color:grey;">Don't remember your password?</a>
        </div>
        <button type="submit" class="btn-login " onclick="loginIn(this)">Login</button>
    </form>
</div>




<div  class="col-lg-6" style="height:500px;margin:0px;padding:0px;outline-style:none;">
    <form action="{{ route('login') }} method="POST" class="partner" style="width:100%;height:100%;background-color:#F96554;" >
        <img class="img1" src="/images/png/part-icon.png" alt="Part-icon image" onclick="loginPart(this)">
    </form>

    <form action="/user/login" method="POST" class="loginpart" style="width:100%;height:100%;">
        <img src="/images/png/part-icon-blue.png" alt="logopart" style="margin-bottom:50px;width:200px;height:80px;">

        <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">Login</h3><br/>
        <input type="email" id="mail" class="form-control @error('email') is-invalid @enderror"  name="email" placeholder="Email ID" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
        <input type="password" id="password" name="passroed" class="form-control @error('password') is-invalid @enderror" placeholder="Password" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
        <div style="margin-bottom:20px;">
            <a href="" style="text-decoration: underline;color:grey;">Don't remember your password?</a>
        </div>
        <button type="submit" class="btn-login" >Login</button>
    </form>
</div>
</div>
</div>
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

@endsection
<link href="{{ asset('css/main.css') }}" rel="stylesheet">