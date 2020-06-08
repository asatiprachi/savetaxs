
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
<div class="wrapper">
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

<!-- notification section -->

<section id="notification-management-tab" class=" content-wrapper ">
    
<div id="contentc" class="py-4">
    <div class="containerc">
      <div class="rowc"> 
        <!-- Left Panel
        ============================================= -->
        <aside class="col-lg-3"> 
          
          <!-- Profile Details
          =============================== -->
          <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
            <div class="profile-thumb mt-3 mb-4"> <img class="rounded-circle" src="images/profilepic.jpg" alt="">
              <div class="profile-thumb-edit custom-file bg-primary text-white" data-toggle="tooltip" title="" data-original-title="Change Profile Picture"> <i class="fas fa-camera position-absolute"></i>
                <input type="file" class="custom-file-input" id="customFile">
              </div>
            </div>
            <p class="text-3 font-weight-500 mb-2">Hello, Smith Rhodes</p>
            <p class="mb-2"><a href="profile.html" class="text-5 text-light" data-toggle="tooltip" title="" data-original-title="Edit Profile"><i class="fas fa-edit"></i></a></p>
          </div>
          <!-- Profile Details End --> 
          
          <!-- Available Balance
          =============================== -->
          <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-wallet"></i></div>
            <h3 class="text-9 font-weight-400">$2956.00</h3>
            <p class="mb-2 text-muted opacity-8">Available Balance</p>
            <hr class="mx-n3">
            <div class="d-flex"><a style="text-decoration: none;" href="withdraw-money.html" class="btn-link mr-auto">Withdraw</a> <a style="text-decoration: none;" href="deposit-money.html" class="btn-link ml-auto">Deposit</a></div>
          </div>
          <!-- Available Balance End --> 
          
          <!-- Need Help?
          =============================== -->
          <div class="bg-light shadow-sm rounded text-center p-3 mb-4">
            <div class="text-17 text-light my-3"><i class="fas fa-comments"></i></div>
            <h3 class="text-3 font-weight-400 my-4">Need Help?</h3>
            <p class="text-muted opacity-8 mb-4">Have questions or concerns regrading your account?<br>
              Our experts are here to help!.</p>
            <a href="#" style="text-decoration: none;" class="btn btn1-primary btn1-block">Chate with Us</a> </div>
          <!-- Need Help? End --> 
          
        </aside>
        <!-- Left Panel End --> 
        
        <!-- Middle Panel
        ============================================= -->
        <div class="col-lg-9">
          
          <!-- Notifications
          ============================================= -->
          <div class="bg-light shadow-sm rounded p-4 mb-4">
            <h3 class="text-5 font-weight-400">Notifications</h3>
            <p class="text-muted">Select subscriptions to be delivered to <span class="text-body">smithrhodes1982@gmail.com</span></p>
            <hr class="mx-n4">
            <form id="notifications" method="post">
              <div class="form-check custom-control custom-checkbox">
                <input id="announcements" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="announcements">Announcements</label>
                <p class="text-muted line-height-3 mt-2">Be the first to know about new features and other news.</p>
              </div>
              <hr class="mx-n4">
              <div class="form-check custom-control custom-checkbox">
                <input id="sendPayment" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="sendPayment">Send payment</label>
                <p class="text-muted line-height-3 mt-2">Send an email when I send a payment.</p>
              </div>
              <hr class="mx-n4">
              <div class="form-check custom-control custom-checkbox">
                <input id="receiveApayment" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="receiveApayment">Receive a payment</label>
                <p class="text-muted line-height-3 mt-2">Send me an email when I receive a payment.</p>
              </div>
              <hr class="mx-n4">
              <div class="form-check custom-control custom-checkbox">
                <input id="requestPayment" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="requestPayment">Request payment</label>
                <p class="text-muted line-height-3 mt-2">Send me an email when i request payment.</p>
              </div>
              <hr class="mx-n4">
              <div class="form-check custom-control custom-checkbox">
                <input id="problemWithPayment" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="problemWithPayment">Have a problem with a payment</label>
                <p class="text-muted line-height-3 mt-2">Send me an email when have a problem with a payment.</p>
              </div>
              <hr class="mx-n4">
              <div class="form-check custom-control custom-checkbox">
                <input id="specialOffers" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="specialOffers">Special Offers</label>
                <p class="text-muted line-height-3 mt-2">Receive last-minute offers from us.</p>
              </div>
              <hr class="mx-n4">
              <div class="form-check custom-control custom-checkbox">
                <input id="reviewSurveys" name="notifications" class="custom-control-input" type="checkbox">
                <label class="custom-control-label text-3" for="reviewSurveys">Review Surveys</label>
                <p class="text-muted line-height-3 mt-2">Share your payment experience to better inform users.</p>
              </div>
              <hr class="mx-n4">
              <button class="btn btn1-primary mt-1" type="submit">Save Changes</button>
            </form>
          </div>
          <!-- Notifications End --> 
          
        </div>
        <!-- Middle Panel End --> 
      </div>
    </div>
  </div>
</section>
                 <!-- chat section -->

         <section id="chat-management-tab" class="content-wrapper">

            <div class="fullscreen">
                <div class="containerz" style="margin-left: 10px;">
                <h3 class=" text-center">Messaging</h3>
                <div class="messaging">
                      <div class="inbox_msg">
                        <div class="inbox_people">
                          <div class="headind_srch">
                            <div class="recent_heading">
                              <h4>Recent</h4>
                            </div>
                            <div class="srch_bar">
                              <div class="stylish-input-group">
                                <input type="text" class="search-bar"  placeholder="Search" >
                                <span class="input-group-addon">
                                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span> </div>
                            </div>
                          </div>
                          <div class="inbox_chat">
                            <div class="chat_list active_chat">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                            <div class="chat_list">
                              <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                <div class="chat_ib">
                                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                  <p>Test, which is a new approach to have all solutions 
                                    astrology under one roof.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mesgs">
                          <div class="msg_history">
                            <div class="incoming_msg">
                              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                              <div class="received_msg">
                                <div class="received_withd_msg">
                                  <p>Test which is a new approach to have all
                                    solutions</p>
                                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
                              </div>
                            </div>
                            <div class="outgoing_msg">
                              <div class="sent_msg">
                                <p>Test which is a new approach to have all
                                  solutions</p>
                                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                            </div>
                            <div class="incoming_msg">
                              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                              <div class="received_msg">
                                <div class="received_withd_msg">
                                  <p>Test, which is a new approach to have</p>
                                  <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                              </div>
                            </div>
                            <div class="outgoing_msg">
                              <div class="sent_msg">
                                <p>Apollo University, Delhi, India Test</p>
                                <span class="time_date"> 11:01 AM    |    Today</span> </div>
                            </div>
                            <div class="incoming_msg">
                              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                              <div class="received_msg">
                                <div class="received_withd_msg">
                                  <p>We work directly with our designers and suppliers,
                                    and sell direct to you, which means quality, exclusive
                                    products, at a price anyone can afford.</p>
                                  <span class="time_date"> 11:01 AM    |    Today</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="type_msg">
                            <div class="input_msg_write">
                              <input type="text" class="write_msg" placeholder="Type a message" />
                              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                            
                    </div></div>
                    </div>     
                    
            </section>

            <!-- helpdesk section  -->
         
            <section id="helpcenter-management-tab" class=" content-wrapper ">
               <div class="uk-background-muted">
		<div class="uk-container">
			<div class="uk-margin">
				<form class="uk-search uk-search-default uk-width-1-1 awesomplete">
					<a href="" class="uk-search-icon-flip" data-uk-search-icon></a>
					<input id="search" class="uk-search-input uk-search-default uk-width-1-1 uk-form-large" type="search" placeholder="Search" autocomplete="off" data-minchars="1" data-maxitems="30" >
				</form>
			</div>
		</div>
	</div>

	<div class="uk-section uk-background-muted">
		<div class="uk-container uk-text-center">

			<h1 class="uk-heading-primary uk-margin-medium-bottom" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium;">How can we help?</h1>

			<div class="uk-grid-collapse uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match uk-text-center" data-uk-grid data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 80">
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: cog; ratio: 3"></span>
						<p class="uk-margin-medium-top">Getting Started</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: sign-in; ratio: 3"></span>
						<p class="uk-margin-medium-top">User Login</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: user; ratio: 3"></span>
						<p class="uk-margin-medium-top">My Account</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: lock; ratio: 3"></span>
						<p class="uk-margin-medium-top">Security</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: cart; ratio: 3"></span>
						<p class="uk-margin-medium-top">Ecommerce</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: comments; ratio: 3"></span>
						<p class="uk-margin-medium-top">Communication</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: settings; ratio: 3"></span>
						<p class="uk-margin-medium-top">Settings Options</p>
					</a>
				</div>
				<div>
					<a href="category.html" class="uk-card card-box uk-card-body uk-border-rounded">
						<span data-uk-icon="icon: code; ratio: 3"></span>
						<p class="uk-margin-medium-top">Customization</p>
					</a>
				</div>
			</div>

		</div>
	</div>

	<div class="uk-section">
		<div class="uk-container">
			<div class="uk-grid-divider uk-grid-large uk-child-width-1-2@m" data-uk-grid>

				<div>
					<div class="uk-flex uk-flex-middle" data-uk-grid>
						<div class="uk-width-auto uk-text-primary">
							<span data-uk-icon="icon: mail; ratio: 2"></span>
						</div>
						<div class="uk-width-4-5">
							<h5 class="margin-xsmall-bottom">Need more help?</h5>
							<p class="uk-margin-remove uk-link-reset">Get in touch with us, support is provided daily <a class="button-link" href="contact.html">contact us</a></p>
						</div>
					</div>
				</div>

				<div>
					<div class="uk-flex uk-flex-middle" data-uk-grid>
						<div class="uk-width-auto uk-text-primary">
							<span data-uk-icon="icon: receiver; ratio: 2"></span>
						</div>
						<div class="uk-width-4-5">
							<h5 class="margin-xsmall-bottom">Interested in our products?</h5>
							<p class="uk-margin-remove">Our sales representatives can help you chose <a class="button-link" href="contact.html">call us</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>

	@endsection


            </section>
            <!-- helpdesk section  script -->

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
          
                
        
