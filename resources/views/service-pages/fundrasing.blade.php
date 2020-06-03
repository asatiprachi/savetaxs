
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@extends('layouts.default')
    @section('content')
<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
             <h1>Fundraising</h1>
           </div>
             <div class="col-lg-6" id="top2">
            <div class="card0">
                <h2 style="color:darkblue;"><b>Order Select</b></h2>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="form-group">
                   
                    <select class="form-control">
                        <option selected>Select state</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh </option>
                        <option>Assam</option>
                        <option>Bihar</option>
                         <option>Chhattisgarh</option>
                         <option>Goa</option>
                        <option>Gujarat </option>
                        <option>Haryana </option>
                        <option>Himachal Pradesh</option>
                        <option>Jammu and Kashmir</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                         <option>Madhya Pradesh</option>
                         <option>Maharashtra</option>
                         <option>Manipur </option>
                         <option>Meghalaya</option>
                         <option>Mizoram</option> 
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option> 
                        <option>Sikkim</option>
                        <option>Tamil Nadu </option>
                         <option>Telangana</option> 
                        <option>Tripura </option>
                        <option>Uttar Pradesh </option>
                         <option>Uttarakhand</option>
                         <option>West Bengal</option>

                    </select>
                </div>
                 <div class="form-group">
                    <select class="form-control">
                        <option selected>Language</option>
                        <option>English</option>
                        <option>Hindi</option>
                    </select>
                
                </div>
                <div class="form-group">
                    <input type="button" class="btn1" value="Add To Cart">
                </div>
            </div>   
        </div>
        
    </div>
    
    <div class="row" >
<div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Overview</a></div>
            
            <div class="menu0"><a href="#m2">How can we help?</a></div>
</div>

<div class="col-lg-9">
<div class="details">
    
    <div id="m1">
     <h3>Fundraising</h3>
       <p>Quite often, entrepreneurs do not have
     enough funds for all their business requirements. Thus, they start to seek funding through venture 
     capitals and accelerators. It aids their incorporation, marketing, advertising etc needs. </p>
    </div>

<div class="m2">
<ul class="a">
    <p class="extra">How can we help?</p>
    <li>	We help entrepreneurs with quality fundraising services that can help your business to escalate.  </li>
<li>Our partnership with prominent Venture capitals and accelerators will help to facilitate smooth deals for you.</li>
<li> We also provide support for online fundraising ideas that will help you run your business smoothly.</li>
<li> We guide and mentor you from time to time and help you understand any difficult financial terminologies, if any. </li>

</ul>
</div>
    </div>
    </div>

</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">