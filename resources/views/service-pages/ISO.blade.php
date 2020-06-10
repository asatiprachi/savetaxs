
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
           
            <h1>ISO Certification</h1>
              
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
    
    <div class="row">
       <div class="col-lg-3"> 
             
             <div class="menu0"><a href="#m1">OverView</a></div>
            <div class="menu0"><a href="#m2">Types of ISO Certification</a></div>
            <div class="menu0"><a href="#m3">Process of ISO Registration</a></div>
            <div class="menu0"><a href="#m4">Documents required for ISO Registration</a></div>
       </div> 
       <div class="col-lg-9">
         <div class="details">
             <div id="m1">
                <h3>ISO</h3>
                <p >International Standards Organization (ISO) is an independent organization that sets the standards for businesses in terms of quality, safety, and efficiency of products. The aim of getting ISO certification is to advance the improvement of standardisation in the technology of an organisation. It also certifies that the management system, manufacturing process, 
                service or the documentation process has fulfilled all the requirements for standardization and quality assurance. </p>
              

             </div>     <br/> 
      
            <div id="m2">
             <h3>
               Types of ISO Certification
             </h3>
             <ul>
                 <li>
                     	ISO 9001 2008      –     Quality Management
                 </li>
                 <li>
                     		ISO 14001        –     Environmental Management
                 </li>
                  <li>
                     	ISO 27001       –      Information security Management
                      </li>
                  <li>
                    		ISO  22008      –      Food Safety Management 
                 </li>
                
                 
             </ul>
            </div><br>


            <div id="m3">
                <h3>Process of ISO Registration</h3>
                <ul>
                    
                    <li>	Complete ISO Registration form.</li>
                    <li>	Select the registration form</li>
                    <li>	Submit all your necessary documents</li>
                    <li>	Once we IDO audit on your certificate, we will send it to you via mail. </li>
                   
                </ul>
            </div><br>

            <div id="m4">
                <h3>Documents required for ISO Registration Process</h3>
                <p class="extra" >Proof that the business is registered. This can be done through: </p>
                <ul>
                    <li>@guest
                    Certificate of Incorporation
                     @else
                     Certificate of Incorporation

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest

                    </li>
                    <li>@guest
                    GST Certificate
                       @else 
                       GST Certificate

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
 
                        </li>
                    <li>@guest
                    MSME Certificate
                       @else
                       MSME Certificate

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
 
                    </li>
                    <li>@guest
                    A letterhead or visiting card of the business.
                       @else
                       A letterhead or visiting card of the business.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest

                    </li>
                </ul>    

                <p class="extra">	The details of an invoice that includes:</p>
                <ul>
                    <li>@guest
                    	Sale Invoice
                        @else
                        Sale Invoice

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest

                    </li>
                    <li>	@guest
                    Purchase Invoice
                        @else
                        Purchase Invoice

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
               
            </div><br>

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">