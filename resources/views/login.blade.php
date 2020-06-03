
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

@extends('layouts.default')
@section('content')

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165577552-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());

               gtag('config', 'UA-165577552-1');
            </script>

    
    <style>
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
    
              
    </head>
   


    <div class="row" style="width:100vw">

        <div class="col-lg-6" style="width:100%;height:500px;margin:0px;padding:0px;outline:none;">
            <div class="customer" action="/user/login" style="width:100%;height:100%;background-color: #6610f2;">

                <img class="img1" src="images/png/cust-icon.png" alt="Cust-icon image" onclick="loginCust(this)">
            </div>

            <form  class="logincust" style="width:100%;height:100%;" method="POST" action="/user/login">
                <img src="images/png/cust-icon-blue.png" alt="logocust" style="margin-top:30px;margin-bottom:50px;width:160px;height:60px;">

                <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">Login</h3><br/>
            
                <input type="email" name="email" placeholder="Email ID" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
                <input type="password"  name="password" placeholder="Password" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
                <div style="margin-bottom:20px;">
                    <a href="" style="text-decoration: underline;color:grey;">Don't remember your password?</a>
                </div>
                <button type="submit" class="btn-login" onclick="loginIn(this)">Login</button>
            </form>
        </div>




        <div  class="col-lg-6" style="height:500px;margin:0px;padding:0px;outline-style:none;">
            <form action="/user/login" method="POST" class="partner" style="width:100%;height:100%;background-color:#F96554;" >
                <img class="img1" src="images/png/part-icon.png" alt="Part-icon image" onclick="loginPart(this)">
            </form>

            <form action="/user/login" method="POST" class="loginpart" style="width:100%;height:100%;">
                <img src="images/png/part-icon-blue.png" alt="logopart" style="margin-bottom:50px;width:200px;height:80px;">

                <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">Login</h3><br/>
                <input type="email"  name="email" placeholder="Email ID" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
                <input type="password" name="passroed" placeholder="Password" style="width:50%;height:40px;border:solid grey;margin-bottom:25px;padding-left:10px;"><br/>
                <div style="margin-bottom:20px;">
                    <a href="" style="text-decoration: underline;color:grey;">Don't remember your password?</a>
                </div>
                <button type="submit" class="btn-login" >Login</button>
            </form>
        </div>
    </div>
    </div>
    @endsection

<link href="{{ asset('css/main.css') }}" rel="stylesheet">

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
