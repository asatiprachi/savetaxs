
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

@extends('layouts.default')
@section('content')
<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
            <h1>Web-or-app Related</h1>
             
        </div>
        <div class="col-lg-6" id="top2">
            <div class="card0">
                <h2 style="color:darkblue;"><b>Order Select</b></h2>
                <form method="POST" action="{{URL('orderhistory')}}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phonenumber" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="City">
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
                <button type="submit" class="btn-registration">
                                    {{ __('Add To Cart') }}
                                </button>
                </div>
</form>
            </div>   
        </div>
        
    </div>
    
    <div class="row">
       <div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Terms of Service, Privacy Policy and Disclaimer</a></div>
            <div class="menu0"><a href="#m2">How can we help?</a></div>
            
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
            <div id="m1">
             <h3>
               Terms of Service, Privacy Policy and Disclaimer
             </h3>
             <p>Every online business needs to specify a detail description of their terms and conditions and the privacy policy eminently featured on their online site. It is a legal relationship 
                 with everyone who visits your website, regardless of whether they buy anything or even identify themselves.</p>
                 <p>A disclaimer is a declaration communicated to the buyer of any merchandise or service, of the likely consequences of purchasing and using a particular product. 
                     It is specifically defined and showcased on products which raises a concern for safety or ambiguity.</p>
             
            </div><br>


            <div id="m2">
                <h3>How can we help?</h3>
                <ul>
                    <li>	We will help you with verified lawyers who can render a professional service at all cost.</li>
                    <li>	We help in smooth movement of the legal process</li>
                    <li>	Our experts are always there to help in case of any queries</li>
                   
                </ul>
            </div><br>

            

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">