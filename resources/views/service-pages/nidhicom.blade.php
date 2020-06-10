
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
       
                        <h1>Nidhi Company</h1>
                        
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
            <div class="menu0"><a href="#m2">Requirements for Registration </a></div>
            <div class="menu0"><a href="#m3">Document required</a></div>
            <div class="menu0"><a href="#m4">Why Choose Us</a></div>
</div>
<div class="col-lg-9">

<div class="details" >
    <div id="m1">
     <h3>Nidhi Company</h3>
      <p>A Nidhi Company is recognised under section 406 of the companies act 2013 
          and belongs to the non-banking finance sector in India. They are regulated by
           the Ministry of Corporate Affairs and their core business is borrowing and lending money between their members... </p>
                        
    </div><br/>
   <div id="m2">
    <h3>Requirements to register a Nidhi Company</h3>
    <ul class="a">
        <li> A minimum paid-up equity share capital of Rs.5 lakhs is required with sole objective of lending and borrowing within the members.</li>
        <li> Company must have Nidhi Ltd after their unique name.</li>
        <li> Company should have a minimum of 200 members with a Net Owned Funds of Rs.10 lakhs or more that includes equity share capital and free reserves and excludes accumulated losses and intangible assets. </li>
        <li> Term deposits must be 10% or higher of the outstanding deposits.</li>
        <li> Maximum ratio of Net owned Funds to deposit must be 1:20 where 10% of the total deposits must be in fixed deposit account of a nationalised bank. </li>
    </ul>
    </div><br/>
<div id="m3">
     <h3>Documents required to register a Nidhi Company</h3>
     <p>Below are the documents required to be submitted by all the directors – </p>

<ul class="a">
    <li>@guest
     Passport (Foreign Nationals and NRIs)
           @else  
           Passport (Foreign Nationals and NRIs)
       
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
    Passport/Voter’s ID/Driver’s Licence
    @else    
    Passport/Voter’s ID/Driver’s Licence

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
    Current Bank Account Statement/Phone Bill/ Electricity or Gas Bill
    @else     
    Current Bank Account Statement/Phone Bill/ Electricity or Gas Bill
   
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
    Passport Sized Photograph
    @else       
    Passport Sized Photograph

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

</div><br/><br/>


<div id="m4">
     <h3>Why Choose Us? 	</h3>

<ul class="a">
     <li>	We help you in reserving your name with the MCA</li>
<li>	We help you in getting 3 DINs and 1 DSC</li>
<li>	We help you from end-to-end registration process. </li>
</ul>
</div>

    </div>
</div>
    </div>
  </div>
  @endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">