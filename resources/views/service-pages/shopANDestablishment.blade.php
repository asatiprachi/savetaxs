
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
           
            <h1>Shops & Establishment Registrations</h1>
           
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
    
    <div class="row">
       <div class="col-lg-3"> 
             
             <div class="menu0"><a href="#m0">OverView</a></div>
            <div class="menu0"><a href="#m1">Who should register?</a></div>
            <div class="menu0"><a href="#m2">Documents required to register</a></div>
            <div class="menu0"><a href="#m3">Information required </a></div>
            <div class="menu0"><a href="#m4">Procedure to Register</a></div>
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
             <div id="m0">
                 <h3>Shop And Establishment</h3>
                  <p>When an entity employs people who may be casual workers,
                 full time employees, contract based etc, to regulate the work conditions and ensure the workers’ rights 
                 are protected, it is mandatory to get registered under the Shops and Establishments Act, informally called Shop Licence. </p>
                
             </div>
            <div id="m1">
             <h3>
                 Who should register?
             </h3>
             <ol>
                 <li>
                     	Individuals running a shop or having an office or place where they are carrying out business activity
                 </li>
                 <li>
                      	All entities having an office (and/or branch) where any commercial activity is being carried out
                 </li>
             </ol>
            </div><br>


            <div id="m2">
                <h3>Documents required to register</h3>
                <ol>
                    <li>@guest
                        Passport size photo of the applicant.
                        @else
                        Passport size photo of the applicant.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        @endguest
                    </li>
                    <li>@guest
                        Photo of the shop along with the owner.
                        @else
                        Photo of the shop along with the owner.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        @endguest
                    </li>
                    <li>@guest
                        	List of management employees and directors, if applicable.
                       @else
                       List of management employees and directors, if applicable.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        @endguest
                    </li>
                    <li>@guest
                        Details of employees, their wage rates and the company.
                        @else
                        Details of employees, their wage rates and the company.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        @endguest
                    </li>
                    <li>@guest
                        Address proof of establishment.
                       @else
                       Address proof of establishment.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        @endguest
                    </li>
                    <li>@guest
                        	Affidavit to be shared with the applicant.
                       @else
                       Affidavit to be shared with the applicant.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        @endguest
                    </li>
                </ol>
                @guest
                @else   
                <button type="submit" id="btn">Submit</button>
               @endguest
            </div><br><br>

            <div id="m3">
                <h3>Information required before Shop & Establishment license</h3>
                <ol>
                    <li>Employer’s name and manager name.</li>
                    <li>	Postal address of the establishment.</li>
                    <li>	Name of the establishment.</li>
                    <li>	Establishment category of the restaurant, amusement park, hotel etc.</li>
                    <li>	The number of employees.</li>
                </ol>
            </div><br>

            <div id="m4">
                <h3>Procedure to Register</h3>
                <ol>
                    <li>Fill in the form</li>
                    <li>Submit the necessary documents</li>
                    <li>We will create your application and file them with concerned authorities</li>
                    <li>Once the certificate is issued we will send it through courier</li>
                </ol>
            </div><br>

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">