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
    <head>
    <style>
        .img1 {
            position: absolute;
            top: calc( 50vh - 100px);
            left: calc( 23vw - 100px);
            width: 200px;
            height: 200px;
        }
        .regInput{
            width:50%;
            height:40px;
            border:solid grey;
            margin-bottom:25px;
            padding-left:10px;"
        }
        .btn-registration {
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
        
        .registrationcust {
            margin-left: 100px;
            display: none;
        }
        
        .registrationpart {
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
              <!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://www.googletagmanager.com/gtag/js?id=UA-165577552-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165577552-1');

</script>
              
    </head>
    
              

   


    <div class="row"  style="width:100vw">

        <div class="col-lg-6" style="width:100%;height:650px;margin:0px;padding:0px;outline:none;">
            <div class="customer" action="/user/registration" style="width:100%;height:100%;background-color: #6610f2;">

                <img class="img1" src="images/png/customer_signup.png" alt="Cust-icon image" onclick="registrationCust(this)">
            </div>

            <form  class="registrationcust" style="width:100%;height:100%;" method="POST" action="/user/registration">
                <img src="images/png/customer_signup_blue.png" alt="logocust" style="margin-top:30px;margin-bottom:50px;width:160px;height:60px;">

                <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">Registration</h3><br/>
            
                <input class="regInput" type="text" name="firstname" placeholder="First Name">
                <input class="regInput" type="text" name="secondname" placeholder="Last Name"><br/>
                <input class="regInput" type="email" name="email" placeholder="Email ID"><br/>
                <input  class="regInput" type="password" name="password" placeholder="Password"><br/>
                <input class="regInput" type="password"  name="password2" placeholder="Re-Enter Password"><br/>
                <div style="margin-bottom:20px;">
                </div>
                <button type="submit" class="btn-registration"  >Registration</button><br/><br/>
              
                            </form>
        </div>


        <div  class="col-lg-6" style="height:650px;margin:0px;padding:0px;outline-style:none;">
            <form action="/user/registration" method="POST" class="partner" style="width:100%;height:100%;background-color:#F96554;" >
                <img class="img1" src="images/png/partner_signup.png" alt="Part-icon image" onclick="registrationPart(this)">
            </form>

            <form action="/user/registration" method="POST" class="registrationpart" style="width:100%;height:100%;">
                <img src="images/png/partner_signup_blue.png" alt="logopart" style="margin-bottom:50px;width:200px;height:80px;">

                <h3 style="color:#001445;font-family:open sans;font-weight: bold;font-style: italic;">Registration</h3><br/>
                <input class="regInput" type="text"  name="firstname" placeholder="First Name"><br/>
                <input class="regInput" type="text"  name="secondname" placeholder="Second Name"><br/>
                <input class="regInput" type="email"  name="email" placeholder="Email ID" ><br/>
                <input  class="regInput" type="password" name="passroed" placeholder="Password"><br/>
                <input class="regInput" type="password" name="passroed2" placeholder="Re-Enter Password"><br/>
                <div style="margin-bottom:20px;">
                </div>
                <button type="submit" class="btn-registration" >Registration</button><br/><br/>
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
