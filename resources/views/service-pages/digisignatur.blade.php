<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 @extends('layouts.default')
 @section('content')
<div class="container1">
    <div class="row" id="headpart" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
              <h1> Digital Signature Certificate</h1>
          </div>
          <div class="col-lg-6 " id="top2">
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
            <div class="menu0"><a href="#m2">Benefits of signature</a></div>
            <div class="menu0"><a href="#m3">Checklist</a></div>
            <div class="menu0"><a href="#m4">Why Choose Us</a></div>
</div>

<div class="col-lg-9">
<div class="details">
    <div id="m1">
          <h3> Digital Signature Certificate</h3>
    <p>It is issued by a recognised Certifying Authority. 
        It is a secured digital key to validate the identity of the certificate holder.
         It contains a person’s name, pin code, country, date of issuance of the certificate
          and date of expiry and the name of the Certifying Authority.   </p>
                       
    </div><br/>
<div id="m2">
    <h3>Benefits of Digital Signature Certificate</h3>
    <ul class="a">
        <li> One can digitally sign the PDF files and send it across which reduced a lot of time and cost.</li>
        <li> Digitally signed documents cannot be altered or edited after signing. Thus integrity of the data is intact.</li>
        <li> Digital signature also gives authenticity of the documents. </li>

    </ul>

    </div><br>

<div id="m3">
     <h3>Checklist to apply for DSC</h3>
<h6>Indian Individuals Looking to Obtain DSC Must Submit:</h6>
<ul class="a">
    <li> ID proof: Passport/Driving license or any Photo Identity issued by the Govt
                  
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
    </li>
    <li>@guest
     PAN card
         @else  
         PAN card
         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                 @endguest       
    </li>
    <li> @guest
    Address proof: Aadhaar card/Voter ID/Driving license/Registration Certificate
             @else 
             Address proof: Aadhaar card/Voter ID/Driving license/Registration Certificate
    
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                 @endguest      
    </li>
    <li> @guest
    Attesting Officer proof
        @else 
        Attesting Officer proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                   @endguest     
    </li>
</ul>
<h3>Indian Organizations Looking to Get DSC Must Submit:</h3>
<ul class="a">
    <li>@guest
    	Organizational PAN
      @else
      Organizational PAN

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                     @endguest   
    </li>
    <li>@guest
    	Partnership deed, if applicable
        @else 
        Partnership deed, if applicable

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
             @endguest           
    </li>
    <li>@guest
    	List of Authorised Signatories which could be the list of Directors, Board resolution, etc.
        @else 
        List of Authorised Signatories which could be the list of Directors, Board resolution, etc.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                     @endguest   
    </li>
    <li>@guest
    	Authorised Signatory ID proof
       @else 
       Authorised Signatory ID proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                  @endguest      
    </li>
    <li>	@guest
    GST certificate
       @else  
       GST certificate

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
 
</div><br/>
<br/>


<div id="m4">
     <h3>Why choose us for DSC</h3>

<ul class="a">
    <li>	We provide all 3 class of DSC</li>
    <li>	Simple and systematic guidance</li>
    <li>	We are authorised providers of DSC</li>
    <li>	Digital signature with advanced SHA-256 algorithm as mandated by Indian Government. </li>
    <li>	Delivery of Digital Signature are compliant with FIPS security standards.</li>


</ul>
</div>

</div>
</div>
    </div>
  
</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">