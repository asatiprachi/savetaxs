
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
           
                        <h1>One Person Company</h1>
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
        
            <div class="menu0"><a href="#m0">Overview</a></div>
            <div class="menu0"><a href="#m1">Documents Required for OPC</a></div>
            <div class="menu0"><a href="#m2">Registeration </a></div>
            <div class="menu0"><a href="#m3">Why Choose Us</a></div>
</div>

<div class="col-lg-9">
<div id="details">
<div id="m0">
     <h3>One Person Company</h3>
<p>As per the new concept introduced in the section 2(62) of the Companies Act 2013, 
    a company can be formed with just 1 director and member and where the compliance 
    requirement is lesser than that of a company. It is beneficial to those entrepreneurs
     who are in the earlier stages of their business and do not want to register as a sole
      proprietor business because of unique advantages that One Person Company offers. </p>
 </div>     

<div id="m1">
    <h3>Documents Required for OPC Registration (all documents must be scanned and uploaded)
</h3>
    <p>For Director (all documents must be self-attested before uploading</p>
    <ul class="a">
        <li> Passport (Foreign Nationals and NRIs)
            
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
        </li>
        <li> Passport/Voter’s ID/Driver’s Licence
            
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
        </li>
        <li> Current Bank Account Statement/Phone Bill/ Electricity or Gas Bill
             
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
        </li>
        <li> Passport Sized Photograph
           
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
        </li>
        <li> Specimen signature or impression
           
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
        </li>


    </ul>
 
    <button type="submit" id="btn">Submit</button>
 
    </div><br><br>
    <div id="m2">
<h3>For Registered Office</h3>
<ul class="a">
    <li> Current Bank Account Statement/Phone Bill/ Electricity or Gas Bill</li>
    <li> Rental Agreement in English</li>
    <li> No Objection Certificate from property owner</li>
    <li> Property Deed/Sale Deed in English</li>
</ul>
</div><br/>

<div id="m3">
<h3>Why Choose Us for OPC registration</h3>

<ul class="a">
    <li> We make the entire process smooth and quick for you – that is be rest assured that you will have the certificate of incorporation within 15 business working days. </li>
    <li> We will help you with all the paperwork making your government interaction convenient.</li>

</ul>

</div>

</div>
</div>
</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">