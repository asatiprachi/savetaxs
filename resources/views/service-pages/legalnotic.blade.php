

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
           
                        <h1>Legal Notice</h1>
                        
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
                <select class="form-control" name="state">
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
                    <select class="form-control" name="language">
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
    

    <div class="row " >
<div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2">Checklist</a></div>
            <div class="menu0"><a href="#m3">content of ligela notice </a></div>
                        <div class="menu0"><a href="#m4">Check bounce </a></div>
                                    <div class="menu0"><a href="#m5">Document required</a></div>


</div>

<div class="col-lg-9">
<div class="details" >
    <div id="m1">

      <h3>Legal Notice</h3>
      <p >A legal notice is an official communication to take legal 
    action against the offender and warn him of his intentions 
    when a specified condition was not complied upon as agreed. We help you draft and send a legal notice. </p>
                        
    </div><br>


<div id="m2">
    <h3>Checklist for Issuing A Legal Notice	</h3>
    <ul class="a">
        <li> Legitimate rights to the property are denied.</li>
        <li> A bounced cheque.</li>
        <li> Personal disputes i.e divorce, maintenance and custody of children.</li>
        <li> To execute a specific performance of the contract.</li>
        <li> If the intellectual property of the rightful owner has been infringed.</li>
        <li> When employees of any organization are subject to sexual harassment, cruelty and other violation of labor laws.</li>
                <li> Unlawful termination from employment.</li>
        <li> Payment dispute between the company and its employees or laborers.</li>
        <li> Breach of contract by the signatory.</li>

    </ul>

</div><br/>
<div id="m3">
     <h3>Contents of A Legal Notice</h3>

<ul class="a">
    <li>	The legal notice contains the basic averment of the affected party.</li>
        <li>	The aggrieved party will make his allegation on the person addressed or receiver.</li>
    <li>	The aggrieved party will state his solution to the dispute.</li>
    <li>	It contains the claim of the aggrieved party to remedy the current issue.</li>
    <li>	It will enumerate the civil and penal consequences if the rights and claims of the aggrieved party were not fulfilled.</li>

</ul>
</div><br/>
<div id="m4">
     <h3>Cheque Bounce</h3>
     <p>A cheque bounce is governed by the Section 138 of the Negotiable instruments Act,
          1881.A cheque bounces when a bank doesn’t honour a payment. A few of the reason
           are wrong signature, mismatch of figures written on the cheque (in words and figures) and overwriting. </p>
</div><br/>


<div id="m5">
     <h3>Documents Required for Registration</h3>

<ul class="a">
    <li> @guest
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
    </li>
    <li>@guest
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
    </li>
    <li> @guest
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
    </li>
    <li>@guest
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
    </li>
</ul>

<button type="submit" id="btn">Submit</button>

</div>



</div>
</div>

</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">