
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@extends('layouts.default')
@section('content')
<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
            <h1>Importer/Exporter Code</h1>
           
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
    
    <div class="row">
       <div class="col-lg-3"> 
             
              <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2">Documents required for IEC registration</a></div>
            <div class="menu0"><a href="#m3">Procedure to Register</a></div>
            <div class="menu0"><a href="#m4">Exemptions for IEC code</a></div>
       </div> 
       <div class="col-lg-9">
         <div class="details">

             <div id="m1">
                 <h3>Importer/Exporter </h3>
                    <p>Import Export Code license is a prerequisite for businesses that are either importing or exporting from India. An Importer Exporter Code is a unique 10-digit code, issued by the Director-General of 
                Foreign Trade (DGFT), Ministry of Commerce and needs no filing or renewal. It is also required to transfer money to foreign banks. </p>
                
             </div>
            <div id="m2">
             <h3>
               Documents required for IEC registration
             </h3>
             <ol>
                 <li>@guest
                     		PAN card of the individual or company
                       @else
                       PAN card of the individual or company

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
          
                          @endguest
                 </li>
                 <li>@guest
                     	Copy of the entity’s government ID (Driving license/Aadhar/Voter ID)
                        @else 
                        Copy of the entity’s government ID (Driving license/Aadhar/Voter ID)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                 </li>
                  <li>@guest
                     	Incorporation certificate/Partnership deed
                        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                      </li>
                  <li>@guest
                    	Personal or company’s current bank account statement
                        @else
                        Personal or company’s current bank account statement

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest  
                 </li>
                 <li>@guest
                 	Address proof (Electricity bill/rent agreement/sale deed of the office location
                   @else
                   Address proof (Electricity bill/rent agreement/sale deed of the office location

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
                 </li>
                 <li>@guest
                 Copy of cancelled cheque leaf of the current account
                     @else
                     Copy of cancelled cheque leaf of the current account

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                 </li>
                 
             </ol>
            </div><br>


            <div id="m3">
                <h3>Procedure to Register</h3>
                <ul style="list-style: none;">
                    
                    <li>Step 1: Prepare an application form in the specified format – Aayaat Niryaat Form no. 2A format and file it with the respective Regional office of DGFT.</li>
                    <li>Step 2: Prepare the required documents with respect to your identity & legal entity and address proof with your bank details & the certificate in respect of ANF2A.</li>
                    <li>Step 3: Once your application is completed, you need to file with DGFT via DSC (Digital Signature Certificate) and pay the required fee for the IEC Registration.</li>
                    <li>Step 4: Once your application is approved then you would receive the IEC Code in a soft copy from the government.</li>
                   
                </ul>
            </div><br>

            <div id="m4">
                <h3>Exemptions for IEC code</h3>
                <p> IEC is not mandatory is cases where – </p>
                <ol>
                    <li>	All traders registered under GST</li>
                    <li>	Good exported or imported for personal purposes that are not used for commercial purposes</li>
                    <li>	Export/ Import done by the Government of India Departments and Ministries, Notified Charitable institutions</li>
                </ol>
                

                <button type="submit" id="btn">Submit</button>
               
            </div><br>

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">