
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" type="text/css">
        <link href="images/favicon.png" rel="icon">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">


    <link href="{{ asset('css/adminlte.min.css') }}" rel="stylesheet">


    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
<style>
/* admin dashboard */

.content-wrapper{
  margin-left: 20px;

}
.wrapper{
    margin-top: 70px;
    min-height: 10px;
    margin-left: 20px;

}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.bodyc{
    margin: 0;
    padding: 0;
}
input:hover,
input:focus{
    outline-style: none;
    border-bottom-color: rgb(43, 43, 109);
}

.has-treeview .nav-link1{
    text-align: center;
    padding: 10px 10px;
   
}
.nav-tabs>li>a:hover {
 margin-right: 2px; 
  
  border: 1px solid transparent;
 border-radius: 4px 4px 0 0; 
}
.tabs-left>li.active>a,
.tabs-left>li.active>a:hover,
.tabs-left>li.active>a:focus {
border-bottom-color: #ddd;
border-right-color: transparent;

border:none;
border-radius:0px;
margin:0px;
display: block;
}
.wrap{
    display: grid;       
    grid-template-columns: repeat(1, auto-fill);
    grid-template-rows: repeat(2, 300px);
     grid-gap:10px;
    
}
.nested{
    display: grid;
    grid-template-columns: repeat(5, minmax(100px,200px));
    grid-gap: 5px;
    background: honeydew;
    padding: 20px;
}
.nested #Imgprofile{
   width: 200px;
   height: 200px;
   padding: 10px;
}
.nested li{
    list-style: none;
    line-height: 2.0;
}
.nested li .Gender{
    margin-top: 20px;
    width: 20px;
}
.nested li input{
    width: 180px;
    border-style: none;
    border-bottom: 1px solid;
    background: honeydew;
    }

      .content-header{
          margin: 10px;
      }
      
      .nested{
          border: solid 1px whitesmoke;
            background-color:whitesmoke;
            box-shadow:  0 0 10px  rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            border-radius: 5px;
      
          
      }
      
      .grid-container {
        display: grid;
        width:280px;
        height:350px;
            border: solid 1px whitesmoke;
            background-color:whitesmoke;
            box-shadow:  0 0 10px  rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            list-style-type: none;
      border-radius: 5px;
      margin-left: 50px;
      margin-top: 10px;
      }
      
      .itm{
          color: black;
          font-weight: lighter;
          margin-top: 20px;
      }
      
      .a{
          list-style: none;
          color: black;
      }
      .manue-box{
              display: inline-block;
          margin-left: 50px;
      
      
      }
      
      .grid-containers {
        display: grid;
        width:280px;
        height:350px;
            border: solid 1px whitesmoke;
            background-color:whitesmoke;
            box-shadow:  0 0 10px  rgba(0,0,0,0.6);
            -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
            list-style-type: none;
      border-radius: 5px;
      margin-left: 50px;
      margin-top: 10px;
      }
      
      .itms{
          text-align: center;
          color: black;
          font-weight: lighter;
          margin-top: 20px;
      }
      
      .ab{
          list-style: none;
          color: black;
      }
      .manue-boxs{
          display: inline-block;
          margin-left: 50px;
      
      
      }
      .ims{
          width: 50%;
          height: 80px;
          float: left;
      
      }
      
      @import url('https://fonts.googleapis.com/css?family=Raleway');
      
      .btn-container{
        height:44px;
        width:166.23px;
        float: right;
      }
      a:active{
        color:#ffd323;
      }
      button{
        user-select:none;
        -webkit-user-select:none;
        -moz-user-select:none;
        -ms-user-select:none;
        cursor:pointer;
        border-radius: 45%;
        padding:6px;
        font-size:15px;
        background-color: green;
        color:white;
        font-family:cursive;
        box-sizing:border-box;
      
        
      }
      
</style>

     

<body class="hold-transition sidebar-mini layout-fixed bodyc">
<div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index2.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard/admin/index2.html" class="brand-link">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dashboard/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                </div> -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item has-treeview menu-open">
                            <a id="analytics_a" class="nav-link active" onclick="toggleDashboardView(this)">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                        Analytics
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a id="user_management_a" class="nav-link" onclick="toggleDashboardView(this)">
                                <i class="fas fa-child" style="margin-left:-30px;"></i>
                                <p>
                                    Customer Management
                                    <i class="fas fa-angle-left right" style="margin-right:-15px;"></i>
                                </p>
                            </a>
                        <li>

                        <li class="nav-item has-treeview ">
                            <a id="partner_management_a" class="nav-link" onclick="toggleDashboardView(this)">
                                <i class="fas fa-child"></i>
                                <p>
                                    Partner Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview ">
                            <a id="chat_video_a" class="nav-link" onclick="toggleDashboardView(this)">
                                <i class="fas fa-comments"></i>
                                <p>
                                    Video Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        <li>

                        <li class="nav-item has-treeview ">
                            <a id="blog_management_a" class="nav-link" onclick="toggleDashboardView(this)">
                                <i class="fas fa-columns"></i>
                                <p>
                                    Blog Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        </li>

                        
                        <li class="nav-item has-treeview ">
                            <a id="report_feedback_a" class="nav-link" onclick="toggleDashboardView(this)">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Report and Feedback
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        <li>

                            <li class="nav-item has-treeview ">
                                <a id="notification_a" class="nav-link" onclick="toggleDashboardView(this)">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Notifications
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            <li>
                                <li class="nav-item has-treeview ">
                                    <a id="chat_a" class="nav-link" onclick="toggleDashboardView(this)">
                                        <i class="nav-icon fas fa-tree"></i>
                                        <p>
                                            Chat
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                <li>
                                    <li class="nav-item has-treeview ">
                                        <a id="helpcenter_a" class="nav-link" onclick="toggleDashboardView(this)">
                                            <i class="nav-icon fas fa-tree"></i>
                                            <p>
                                            Helpcenter
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a>
                                    <li>
                                                
                            
                        <li class="nav-item has-treeview ">
                            <a id="logout_a" class="nav-link" href="#">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>
                                    Logout
                                    <i class="fas fa-angle-left left"></i>
                                </p>
                            </a>
                        <li>                                         
                    </ul>
                </nav>
            </div>
            <!--/.sidebar-menu -->
            <!-- /.sidebar -->
        </aside>
    
      </div>  
  
      
      <script>
        $('.main-header').on('click', function(){
  $('body').toggleClass('sidebar-collapse');
});
    </script>
    
     
            <section id="user-management-tab" class="content-wrapper">

                <div class="grid-containers col-lg-6" >
                    <div><img src="/dashboard/admin/images/profilepic.jpg" alt="profile" id="Imgprofile" class="ims">
                        
                 </div>
                    <li class="itms"> <a href="#" class="ab"> Varification status</a></li>
                    <li class="itms"><a href="#" class="ab">Recent order</a></li>
                    <li class="itms"> <a href="#" class="ab"> Task allocation</a></li>
                    <div class="btn-container">
                        <button id="customer_view" onclick="toggleDashboardView(this)">Continue</button>
                    </div>
                  </div class="manue-boxs">
                  <div class="grid-containers col-lg-6" >
                    <div><img src="/dashboard/admin/images/profilepic.jpg" alt="profile" id="Imgprofile" class="ims">
                    </div>
                    <li class="itms"> <a href="#" class="ab"> Varification status</a></li>
                    <li class="itms"><a href="#" class="ab">Recent order</a></li>
                    <li class="itms"> <a href="#" class="ab"> Task allocation</a></li>
                    <div class="btn-container">
                        <button id="customer_view" onclick="toggleDashboardView(this)">Continue</button>
                        </div>
                  </div>
                  <div class="grid-containers col-lg-6" >
                    <div><img src="/dashboard/admin/images/profilepic.jpg" alt="profile" id="Imgprofile" class="ims">
                    </div>
                    <li class="itms"> <a href="#" class="ab"> Varification status</a></li>
                    <li class="itms"><a href="#" class="ab">Recent order</a></li>
                    <li class="itms"> <a href="#" class="ab"> Task allocation</a></li>
                    <div class="btn-container">
                        <button id="customer_view" style="float: right;" onclick="toggleDashboardView(this)">Continue</button>
                        </div>
                  </div>
         
</section>


           

            <section  id="customer-view-tab" class="content-wrapper" style="display: inline-block;">
             <div class="col-lg-12">
             <div class="wrap">
                
               <div class="nested col-12 allSides" >
                  <div><img src="/dashboard/admin/images/profilepic.jpg" alt="profile" id="Imgprofile">
                  </div>
                  <div>
                      <li><b>About</b></li><br/>
                      <li><i class="glyphicon glyphicon-earphone" style="font-size:24px;"></i></li><br/>
                      <li><i class="fas fa-envelope" style="font-size:24px;"></i></li><br/>
                      <li><i class="fas fa-map-marker-alt"  style="font-size:24px;"></i> </li><br/>
                  </div>
                  <div id="icon"  style="float: right;">
                    <i class='far fa-bell' style="font-size:25px; 
                    margin: 0 20px 0 0; "></i>
                    <i class="far fa-comment-dots" style="font-size:25px;  
                    margin: 0 20px 0 0; "></i>
                    <i class="far fa-edit"  style="font-size:25px;  
                    margin: 0 20px 0 0; "></i>
                    <i class="far fa-trash-alt" style="font-size:25px;  
                    margin: 0 20px 0 0; "></i>

                  </div>

              </div> 
            
              <div class="grid-container col-lg-4">
               
                <li class="itm"><a href="#" class="a">Order</a></li>
                <li class="itm" > <a href="#" class="a">Status</a></li>
                <li class="itm"> <a href="#" class="a"> Task allocation</a></li>
                <li class="itm"> <a href="#" class="a"> Doc</a></li>
                <li class="itm"> <a href="#" class="a">Payment</a></li>

              </div>
              <div class="grid-container col-lg-4">
               
                <li class="itm"><a href="#" class="a">Order</a></li>
                <li class="itm" > <a href="#" class="a">Status</a></li>
                <li class="itm"> <a href="#" class="a"> Task allocation</a></li>
                <li class="itm"> <a href="#" class="a"> Doc</a></li>
                <li class="itm"> <a href="#" class="a">Payment</a></li>

              </div>
              <div class="grid-container col-lg-4">
               
                <li class="itm"><a href="#" class="a">Order</a></li>
                <li class="itm" > <a href="#" class="a">Status</a></li>
                <li class="itm"> <a href="#" class="a"> Task allocation</a></li>
                <li class="itm"> <a href="#" class="a"> Doc</a></li>
                <li class="itm"> <a href="#" class="a">Payment</a></li>

              </div>
              
            </div>
           </div>
          </div>
          

         
         
            </section>
            



            <section id="analytics-tab" class="content-wrapper">
           
          
        </section>

        
  

        
<!-- report_feedback_a -->
            <section id="feedback-management-tab" class="content-wrapper">
               
            </section>

           <script>
               function displayMenu(av){
                  if(document.getElementById('flex').style.display==="none"){
                  document.getElementById('flex').style.display="block";
                  }
                  else{
                    document.getElementById('flex').style.display="none";
                  }
               }
           </script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                
        
     
            
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->

        </div>
        <!-- ./wrapper -->
        <!-- <script  src="{{ asset('js/adminlte.js') }}"></script> -->
        <script src="dist/js/adminlte.js"></script>

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
                <!-- help sction script-->



        <!-- OPTIONAL SCRIPTS -->
        <!-- Video-Confrencing-Page SCRIPTS -->
        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>

        <!---- ChartJS -->
        <!-- PAGE SCRIPTS  -->
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script>
            var analytics_tab = document.getElementById("analytics-tab");
            var user_management = document.getElementById("user-management-tab");
            var customer_view = document.getElementById("customer-view-tab");
            var feedback_view = document.getElementById("feedback-management-tab");



            blog_management.style.display = "none";
            user_management.style.display = "none";
             customer_view.style.display = "none";
             feedback_view.style.display = "none";




            // document.getElementById("analytics-tab").style.display="none";
            function toggleDashboardView(evt) {
                analytics_tab.style.display = "none";
                user_management.style.display = "none";
                customer_view.style.display = "none";
                feedback_view.style.display = "none";


                var target_element = evt;
                switch (target_element.id) {
                    case "user_management_a":
                        user_management.style.display = "block";
                        break;
                    case "analytics_a":
                        analytics_tab.style.display = "block";
                        break;
                    
                    case "customer_view":
                        customer_view.style.display = "block";
                        break;
                    case "report_feedback_a":
                        feedback_view.style.display = "block";
                        break;

                }
            }
        </script>
       
    

                
        
       <script  src="{{ asset('js/dashboard2.js') }}" ></script>
       </body>