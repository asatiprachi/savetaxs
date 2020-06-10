
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
           
                        <h1 class="pt-3 mt-5">Goods & Service Tax Registration	</h1>
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
            <div class="menu0"><a href="#m2">GST tax rated </a></div>
            <div class="menu0"><a href="#m3">GSTIN</a></div>
            <div class="menu0"><a href="#m4">Document required</a></div>
            <div class="menu0"><a href="#m5">Panelty for GST</a></div>
            <div class="menu0"><a href="#m6">Online registration</a></div>

     </div>
     <div class="col-lg-9">
<div class="details" >
    <div id="m1">

        <h3> Goods & Service Tax Registration	</h3>
     <p>Introduced in India from the year July 2017, Goods & Service Tax (GST) 
         registration is mandatory if the annual turnover exceeds more than Rs. 40 lakhs 
         (10 lakhs for NE & Hill states) as per the latest amendment from 1st April 2019.
          However, for some specific business, even if the turnover does not exceed the said limit,
           they still have to register. GST is charged at every stage of the supply chain with full set-off benefits available. </p>
                
    </div>
<div id="m2">
    <h3>What are the GST tax rates?</h3>
    <ul class="a">
        <li> 	Items that are considered basic necessities come under exempt list i.e. they are not taxed.</li>
        <li> 	Household necessities and life-saving drugs etc. are taxed at 5%.</li>
        <li>	Products like computers and processed food are taxed at 12%.</li>
        <li> 	Hair oil, toothpaste and soaps, capital goods, industrial intermediaries and services are taxed at 18%.</li>
        <li>	Luxury items are taxed at 28%.</li>
    </ul>
        <p>You can see the tax rates for all the products here: https://cbec-gst.gov.in/gst-goods-services-rates.html</p>
    </div>


<div id="m3">
     <h3>What is GSTIN?</h3>
<p>GSTIN is a unique identification number given to each GST taxpayer.
     To verify a GSTIN number a person who has a GST number can log onto the GST portal.</p>
</div>


<div id="m4">
    <h3>Documents Required for GST Registration</h3>
<ul class="a">
    <li>@guest
           PAN of the Applicant
                        @else
                         PAN of the Applicant
        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
    </li>
    <li>@guest
    Aadhaar card
               @else 
        Aadhaar card
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
    </li>
    <li>@guest
        Proof of business registration or Incorporation certificate
                        @else 
        Proof of business registration or Incorporation certificate

       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
    </li>
    <li>@guest
    Identity and Address proof of Promoters/Director with Photographs.
                        @else
         Identity and Address proof of Promoters/Director with Photographs.
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
               @endguest          
    </li>
    <li>@guest
    Address proof of the place of business.
                        @else 
        Address proof of the place of business.
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                 @endguest       
    </li>
               <li>@guest
               Bank Account statement/Cancelled cheque.
                        @else
                        Bank Account statement/Cancelled cheque.
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                @endguest        
    </li>
    <li>@guest 
        Digital Signature.
                        @else 
        Digital Signature.
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
             @endguest           
    </li>
    <li>@guest
        Letter of Authorization/Board Resolution for Authorized Signatory.
                        @else
                         Letter of Authorization/Board Resolution for Authorized Signatory.
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
          @endguest        
    </li>

</ul>
@guest
@else
<button type="submit" id="btn">Submit</button>
@endguest

</div><br>
<br>



<div id="m5">
     <h3>Penalty for not registering GST</h3>
    <p >When an offender is making short payment or not paying taxes (genuine reasons), a penalty of 10% 
        of the total taxes due or Rs. 10000 whichever is higher is imposed. However if the offender deliberately evades paying the taxes,
         penalty will be 100% of the tax amount. </p>
</div>
<div id="m6">
    <h3>GST Online Registration Process</h3>
<ul class="a">
    <li>	Filing of Application for GST Registration</li>
    <li>	Secure GST Identification Number</li>
<li>	Dedicated manager to process your GST registration end to end.</li>

</ul>
</div>


</div>
</div>
    </div>
    </div>
    
    @endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">