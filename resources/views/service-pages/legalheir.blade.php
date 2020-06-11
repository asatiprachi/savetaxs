
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
           
            <h1>Legal Heir Certificate</h1>
             
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
    
    <div class="row ">
       <div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">OverView</a></div>
            <div class="menu0"><a href="#m2">Who are Legal Heirs?</a></div>
            <div class="menu0"><a href="#m3">Documents required for Legal Heir Certificate?</a></div>
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
            <div id="m1">
             <h3>
               Legal Heir Certificate
             </h3>
             <p>When there has been a sudden demise of a family member, 
                 a Legal Heir Certificate has to be obtained to authenticate the relationship between the heir and the deceased.
                  It is an important document required for claiming the deceased person’s properties, provident fund, 
                 pension and other gratuity benefits, including benefits of central and state government departments.</p>

            </div><br>


            <div id="m2">
                <h3>Who are Legal Heirs?</h3>
                <p>Under the laws of India, 
                            the following people are considered to be the Legal Heirs of a person and can obtain a Legal Heir Certificate in India:</p>
                <ul>
                    <li>	Spouse</li>
                    <li>	Son</li>  
                    <li>    Daughter</li>
                    <li>	Mother</li>
                    <li>
                       	Father
                    </li>
                   
                </ul>
            </div><br>

            <div id="m3">
                <h3>Documents required for Legal Heir Certificate?</h3>
                <ul>
                    <li>@guest
                       	Self-undertaking, i.e. an affidavit drafted and notarised.
                    @else
                    Self-undertaking, i.e. an affidavit drafted and notarised.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                        	Documentary Proof of Identity
                          @else
                          Documentary Proof of Identity

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                       	Documentary Proof of the Heir’s Residence
                         @else
                         Documentary Proof of the Heir’s Residence

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                      	Documentary Proof of Date of Birth.
                        @else
                        Documentary Proof of Date of Birth.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                    <li>@guest
                       	Death Certificate of the Deceased Person
                         @else
                         Death Certificate of the Deceased Person

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                        
                    <li>@guest
                          	Documentary Proof of the Deceased’s Residence.
                            @else
                            Documentary Proof of the Deceased’s Residence.

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
                
            </div>

            

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">