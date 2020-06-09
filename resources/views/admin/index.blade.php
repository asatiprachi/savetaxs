
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
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    @extends('layouts.default')
@section('content')

<style>
    .content-wrapper{
  margin-left: 20px;

}
.wrapper{
    margin-top: 70px;
    min-height: 10px;
    margin-left: 20px;

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
                


<div class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="container">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard/admin/index2.html" class="brand-link">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <span class="brand-text font-weight-light">{{ __('Register') }}</span>
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
                                <i class="fas fa-child"></i>
                                <p>
                                    Customer Management
                                    <i class="fas fa-angle-left right"></i>
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

                <!--/dashboard-->
              
              
              <!--sample code-->
              <button id="auth-button" hidden>Authorize</button>
              
              <h1>Hello Analytics</h1>
              
              <textarea cols="60" rows="10" id="query-output"></textarea>
              
             
          
        </section>

        
  

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

            
            
            <section id="blog-management-tab" class=" content-wrapper ">

                <div id="medium-feeds" >
                    <div id="retainable-rss-embed" data-rss="https://medium.com/feed/LateralX" data-maxcols="2" data-layout="grid" data-poststyle="inline"  data-readmore="Read the rest" data-buttonclass="btn btn-success" data-offset="-200" class="mt-auto " ></div>
                </div>
            </section>

            
            <section id="video-management-tab" class=" content-wrapper ">
                <br/><br/>

                <h4>My Feed :</h4>
                <div id="me"></div>
                
                <h4>Remote Feeds :</h4>
                <div id="remote-container">
                
                </div>
                <h4>Canvas :</h4>
                <div id="canvas-container">
                
                </div>
            </section>
<!-- report_feedback_a -->
            <section id="feedback-management-tab" class="content-wrapper">
                <div class="imagebg"></div>
                <div class="row " style="margin-top: 50px">
                    <div class="col-md-6 col-md-offset-3 form-container">
                        <h2 class="txt">Feedback</h2>
                        <p class="txt">
                            Please provide your feedback below:
                        </p>
                       <form  method="post" id="reused_form">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                <label class="txt">How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline txt">
                                    <input type="radio" name="experience" class="radio_experience" value="bad"  class="txt">
                                    Bad
                                    </label>
                
                                    <label class="radio-inline txt" >
                                    <input type="radio" name="experience" class="radio_experience" value="average" >
                                    Average
                                     </label>
                
                                    <label class="radio-inline txt">
                                    <input type="radio" name="experience" class="radio_experience" value="good" >
                                    Good
                                    </label>
                                </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group txt">
                                    <label for="comments">
                                        Comments:</label>
                                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="name">
                                        Your Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email">
                                        Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                
                                        <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button type="submit" class="btn btn-lg btn-warning btn-block" >Submit </button>
                                </div>
                            </div>
                
                        </form>
                        <div id="success_message" style="width:100%; height:100%; display:none; ">
                            <h3>Posted your feedback successfully!</h3>
                        </div>
                        <div id="error_message"
                                style="width:100%; height:100%; display:none; ">
                                    <h3>Error</h3>
                                    Sorry there was an error sending your form.
                
                        </div>
                    </div>
                </div>
            </section>


            <script src="dist/js/awesomplete.js"></script>
	
            <script>
                var input = document.getElementById("search");
            
                input.addEventListener("awesomplete-selectcomplete", function(e) {
                    window.location.href = e.text.value;
                }, false);
                
                new Awesomplete(input, {
                    container: function (tag) {
                        return ".awesomplete";
                    },
                    autoFirst: true,
                    list: [
                        { label: "How do I enable payment gateway?", 					value: "article.html" },
                        { label: "What happens if I clear cache?", 						value: "article1.html" },
                        { label: "Which payment methods do you offer?", 				value: "article.html" },
                        { label: "How long does it take to propagate DNS settings?", 	value: "article.html" },
                        { label: "How can I force SSL certificate?", 					value: "article.html" }
                    ],
                    replace: function(suggestion) {
                        this.input.value = suggestion.label;
                    }
                });
            </script>
        


            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->

        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
                <!-- help sction script-->

        <script src="dist/js/help.js"></script>


        <!-- OPTIONAL SCRIPTS -->
        <!-- Video-Confrencing-Page SCRIPTS -->
        <script src="dist/js/scripts/AgoraRTCSDK-2.4.0.js"></script>
        <script src="dist/js/scripts/script.js"></script>
        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>

        <!---- ChartJS -->
        <!-- PAGE SCRIPTS  -->
        <script src="dist/js/pages/dashboard2.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script>
            var analytics_tab = document.getElementById("analytics-tab");
            var user_management = document.getElementById("user-management-tab");
            var blog_management = document.getElementById("blog-management-tab");
            var video_management = document.getElementById("video-management-tab");
            var customer_view = document.getElementById("customer-view-tab");
            var feedback_view = document.getElementById("feedback-management-tab");
            var chat_view = document.getElementById("chat-management-tab");
            var notification_view = document.getElementById("notification-management-tab");
            var helpcenter_view = document.getElementById("helpcenter-management-tab");



            blog_management.style.display = "none";
            user_management.style.display = "none";
            video_management.style.display = "none";
             customer_view.style.display = "none";
             feedback_view.style.display = "none";
             chat_view.style.display = "none";
             notification_view.style.display = "none";
             helpcenter_view.style.display = "none";




            // document.getElementById("analytics-tab").style.display="none";
            function toggleDashboardView(evt) {
                analytics_tab.style.display = "none";
                user_management.style.display = "none";
                blog_management.style.display = "none";
                video_management.style.display = "none";
                customer_view.style.display = "none";
                feedback_view.style.display = "none";
                chat_view.style.display = "none";

                notification_view.style.display = "none";
             helpcenter_view.style.display = "none";


                var target_element = evt;
                switch (target_element.id) {
                    case "user_management_a":
                        user_management.style.display = "block";
                        break;
                    case "analytics_a":
                        analytics_tab.style.display = "block";
                        break;
                    case "blog_management_a":
                        blog_management.style.display = "block";
                        break;
                    case "chat_video_a":
                    video_management.style.display = "block";
                        break;
                    case "customer_view":
                        customer_view.style.display = "block";
                        break;
                    case "report_feedback_a":
                        feedback_view.style.display = "block";
                        break;
                        case "chat_a":
                        chat_view.style.display = "block";
                        break;

                        case "notification_a":
                        notification_view.style.display = "block";
                        break;

                        case "helpcenter_a":
                        helpcenter_view.style.display = "block";
                        break;

                }
            }
        </script>
       
    

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                 
                
        
