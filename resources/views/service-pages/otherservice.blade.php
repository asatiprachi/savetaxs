
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
@extends('layouts.default')
@section('content')

<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
                        <h1>Other Service Providers (OSP) License</h1>
                        
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
    
    <div class="row " >
<div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2">Document required</a></div>
            <div class="menu0"><a href="#m3">Why Choose Us</a></div>
</div>

<div class="col-lg-9">
    <div id="details"> 
    <div id="m1">
        <h3>Other Service Providers (OSP) License</h3>
        <p>It refers to the services provided in the telecommunication industry like
             E commerce, tele-medicine, BPO/call centres, Tele-education, telebanking and other
              IT services. As per the Department of Telecommunication under the Telecom Policy 1999 
              has made it a mandate to obtain licence for OSP.</p>
                        
    </div><br/>


<div id="m2">
    <p>Documents Required for Registration (all documents must be scanned and attested)
        </p>
    <ul class="a">
        <li> @guest
        Certificate of Incorporation issued by the registrar of Company
            @else
            Certificate of Incorporation issued by the registrar of Company

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
        </li>
        <li>@guest
         MOA and AOA
         @else
         MOA and AOA

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
        </li>
        <li>@guest
         Board Resolution or POA authorizing the Authorized Signatory
         @else     
         Board Resolution or POA authorizing the Authorized Signatory

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
        </li>
        <li>@guest
        A note on the nature of Business
        @else
        A note on the nature of Business

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
        </li>
        <li>@guest
         List of the Directors of the Company
         @else
         List of the Directors of the Company

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
        </li>
        <li>@guest
        	List of the Shareholders of the Company
            @else
            List of the Shareholders of the Company

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

<div id="m3">
     <h3>Why Choose us for registration?</h3>

<ul class="a">
    <li> After giving us your details, we will process your application in 3 working days.</li>
    <li> We will help you with all the paperwork making your government interaction convenient.</li>
    <li> Our expert and experienced experts will ensure to guide you at every step of the procedure.</li>

</ul>
</div><br>

</div>
</div>
</div>
</div>

@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">