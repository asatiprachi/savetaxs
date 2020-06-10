
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@extends('layouts.default')
@section('content')

<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
                        <h1>Proprietorship Firm</h1>
                        
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
    

    <div class="row" >
        <div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2"> Registration </a></div>
            <div class="menu0"><a href="#m3">Document required</a></div>
            <div class="menu0"><a href="#m4">Why Choose Us</a></div>
</div>

<div class="col-lg-9">
<div class="details" >
    <div id="m1">

<h3>Proprietorship Firm</h3>
<p>A sole proprietorship firm is the easiest to form as one person is the owner and is solely liable 
    for all the debts and liabilities of the business. Any person who wants to start a business without
     getting into complex legal formalities, proprietorship firm is the best way to start. However,
      the sole proprietor must be a citizen and resident of India. </p>
                        
    </div>
<div id="m2">
    <h3>How to Register a Sole Proprietorship?	</h3>
    <ul class="a">
        <p >To register a sole proprietorship, no specific legal registration is required. But to avoid any complicated legal scenarios, it is advisable to apply for a few licenses under various laws – </p>
        <li> Under Shop and Establishment Act </li>
        <li> Under MSMED (Micro, Small, Medium Enterprises Development) Act</li>
        <li> Under GST (Goods and Service Tax)</li>
        <li> Under Trademark</li>
        <li> According to the nature of business</li>
    </ul>

</div>
<div id="m3">
     <h3>Documents Required for Registration</h3>

<ul class="a">
    <li>@guest
     Current Bank Account Statement
       @else
       Current Bank Account Statement

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest  
    </li>
    <li> @guest
    Registration certificates or licences from various departments
    @else
    Registration certificates or licences from various departments

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest  
    </li>
    <li>@guest
     PAN Card/Passport/Aadhar/Driving License
     @else
     PAN Card/Passport/Aadhar/Driving License

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
    </li>
    <li> @guest
    Address Proof of Sole Proprietor – Electricity Bill/ Gas Bill
    @else
    Address Proof of Sole Proprietor – Electricity Bill/ Gas Bill

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest     
    </li>
</ul>

<button type="submit" id="btn">Submit</button>

</div><br><br>


<div id="m4">
     <h3>Why Choose us for registration?</h3>

<ul class="a">
    <li>	Our experts will help you with a smooth registration process be it registration with service tax, sales tax, import/export code, professional tax. </li>
    <li>	We help you connect with established vendor who will help you keep an update on the end-to-end progress. </li>
    <li>	We will help you with quick and hustle free service. </li>

</ul>
</div>

</div>
</div>
</div>
</div>

@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">