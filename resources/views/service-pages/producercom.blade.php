
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
           
                        <h1>Private Limited Company.</h1>

                        
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
                <button type="submit" class="btn-register">
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
            <div class="menu0"><a href="#m3">Process for Registration</a></div>
            <div class="menu0"><a href="#m4">Document required</a></div>
            <div class="menu0"><a href="#m5">Why Choose Us</a></div>
</div>
<div class="col-lg-9">
<div class="details">
<div id="m1">
           <h3>Private Limited Company</h3>
    <p>If you are looking to start a business, then a Private Limited Company is the highly recommended way to start
         in India. Registered under the Companies Act, 2003, it is a company that is privately held for small businesses. It is owned by a small
          group of members called the shareholders and the objectives are also pre defined. Section 2(68) of the Companies Act defines Private 
          Limited Company as – </p>
    <p>A company having a minimum paid-up share capital as may be prescribed, and which by its articles, - </p>
    <ul class="a">
                            <li>1. Restricts the right to transfer its shares</li>
                            <li>2. Except in case of One Person Company, limits of the number of its members to two hundred</li>
                            <li>3. Prohibits any invitation to the public to subscribe for any securities of the company</li>
                    </ul>
</div>


<div id="m2">
<h3>Requirements for Registration</h3>
<p >According to the Companies Act 2003, below are the requirements for any company to be registered in India</p>
<ul class="a">
    <li><b>Members</b> – Before the registration of the company, a minimum of 2 members and a maximum of 200 members or shareholders are required as per the companies act.</li>
    <li><b>Name</b> – The name of the business should be unique and should not match with the existing registered companies. Also, it is necessary that companies use the word Private Limited Company at the end of the name. </li>
    <li><b>Directors</b> – To register the company, a minimum of two directors are required. They must have their Director Identification Number (DIN) which is given to them by the Ministry of Corporate Affairs (MCA). Also, one of the directors must be a resident of India. </li>
    <li><b>Registered Office</b> – Until the company is registered, the owner should provide temporary address of the company. And after it is registered, the permanent address of its registered office should be suited with the registrar of the company. </li>
    <li><b>Digital Signature Certificate</b> – In today’s fast and technological world, everything is done electronically. Thus to submit all your documents online, every company must obtain a digital signature certificate which is used to authenticate the documents. </li>
</ul>
</div>


<div id="m3">
<h3>Process to Register a Company Online</h3>
<p style="padding-left: 22px;">Below are the rules and regulations governed by the Ministry of Corporate Affairs to register a company online – </p>
<ul class="a">
    <li><b>Step 1:</b> Application for DSC (Digital Signature Certificate).</li>
    <li><b>Step 2:</b> Apply for the DIN (Director Identification Number)</li>
    <li><b> Step3:</b> Application for the name availability.</li>
    <li><b>Step 4:</b> Filing of the EMoa and EAOA to register private limited company</li>
    <li><b>Step 5:</b> Apply for the PAN and TAN of the company</li>
    <li><b>Step 6:</b> Issued certificate of incorporation by RoC with PAN and TAN</li>
    <li><b>Step 7:</b> Opening a current bank account on company name</li>
</ul>
</div>


<div id="m4">
<h3>Documents required for online registration</h3>

<p style="padding-left: 22px;">Mentioned below are the documents needed and accepted by MCA for online registration – </p>

<ol class="a">
    <li>@guest
    Scanned copy of PAN Card or Passport (Foreign Nationals & NRIs)
    @else
    Scanned copy of PAN Card or Passport (Foreign Nationals & NRIs)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
    </li>
    <li>@guest
    Scanned copy of Voter’s ID/Passport/Driver’s License
    @else
    Scanned copy of Voter’s ID/Passport/Driver’s License

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
    </li>
    <li>@guest
    Scanned copy of the latest bank statement/telephone or mobile bill/electricity or gas bill
       @else
       Scanned copy of the latest bank statement/telephone or mobile bill/electricity or gas bill

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest   
    </li>
    <li>@guest
    Scanned passport-sized photograph specimen signature (blank document with signature [directors only])
       @else
    Scanned passport-sized photograph specimen signature (blank document with signature [directors only])

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                    @endguest    
    </li>
</ol>

  <p style="padding-left: 22px;">For the foreign nationals, apostilled or notarized copy of the passport has to be submitted mandatorily.
       All documents submitted should be valid. The residence proof documents like the bank statement or the electricity bill must be less than 2 
       months old.</p>
      
      
       <button type="submit" id="btn">Submit</button>
      
</div><br/><br>


<div id="m5">
<h3>Why Choose Us?</h3>
<p style="padding-left: 22px;">Well, the biggest advantage for choosing us is that you do not have to run here and there to register your business,
    we take care of that online while you are seated at your home. The entire process of Company Registration can be done within 14 days which 
    includes</p>
<ul class="a">
    <li>Register your directors with the MCA (Ministry of Corporate Affairs)</li>
    <li>Get guidance to choose the right company name</li>
    <li>Draft your company's constitution (MoA and AoA)</li>
    <li>iv.	A Certificate of Incorporation (CoI), along with PAN and TAN can be received post approval of the company registration process</li>
</ul>
<p style="padding-left: 22px;">Our affordable package is inclusive of the following fee – </p>
<ul class="a">
    <li>DIN and DSC for two Directors</li>
    <li>Drafting of MoA & AoA</li>
    <li>Registration fees and stamp duty</li>
    <li>Company Incorporation Certificate</li>
    <li>Company PAN and TAN</li>
</ul>
</div>
</div>
</div>
</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">