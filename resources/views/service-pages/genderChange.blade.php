
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
           
            <h1>Gender Change </h1>
             
        </div>
        <div class="col-lg-6 " id="top2">
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
                    <input type="button" value="Add To Cart">
                </div>
            </div>   
        </div>
        
    </div>
    
    <div class="row">
       <div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">OverView</a></div>
             <div class="menu0"><a href="#m1">Documents required for gender change application</a></div>
       </div> 
       <div class="col-lg-9">
         <div class="details">
            <div id="m1">
             <h3>
               Gender Change
             </h3>
             <p>The freedom to choose one’s gender is a legal right granted to every Indian citizen, irrespective of caste and creed. When an individual feels that his or her identity does not match the birth gender, the person decides to undergo gender reassignment and are called transsexuals. 
                 Gender change has to be officially notified to the weekly Gazette, published by the Department of Publication, Government of India.  </p>
                
            </div><br>

            <div id="m2">
                <h3>Documents required for gender change application</h3>
                <p>For preparing an application for change of gender the below-mentioned documents are required:</p>
                <ul>
                    <li>@guest
                     	Self-attested identity proof copies (Aadhar/Voter ID/Passport)
                     @else
                     Self-attested identity proof copies (Aadhar/Voter ID/Passport)

     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                            @endguest
        </span>
      
                    </li>
                    <li>@guest
                        Two self-attested passport size photographs
                        @else
                        Two self-attested passport size photographs

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                       	An original newspaper in which gender change advertisement was given.
                       @else
                       An original newspaper in which gender change advertisement was given.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                        	A specimen proforma as prescribed by the department, duly signed by the applicant and two major witnesses.
                        @else
                        A specimen proforma as prescribed by the department, duly signed by the applicant and two major witnesses.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                       	A declaration stating that the contents in the application are true.
                        @else
                        A declaration stating that the contents in the application are true.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                       	A request letter together with the registration fee to the authority.
                   @else
                   A request letter together with the registration fee to the authority.

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