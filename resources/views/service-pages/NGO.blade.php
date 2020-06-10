
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
           
            <h1> NGO Registrations</h1>
         
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
            <div class="menu0"><a href="#m2">Acts governing NGO registration process</a></div>
            <div class="menu0"><a href="#m3">Documents required for Trust Registration</a></div>
            <div class="menu0"><a href="#m4">Documents Required for Society registration and Section 8 company</a></div>
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
           
             <div id="m1">
                 <h3>NGO</h3>
                      <p>NGO registration is regulated under three acts: Indian Trust Act, Indian Societies Act, and Companies Act. As NGOs are non profit organisation, it is not supposed to distribute its profit to its members
                 as dividend. Instead, the profits are supposed to be reinvested for the social cause the NGO is helping in.  </p>
                
             </div>

            <div id="m2">
             <h3>
                Acts governing NGO registration process
             </h3>
             <p >The national authority in India allows for online registration of an NGO under three laws:</p>
             <ul>
                 <li>
                    	Trust under Public Trusts Act of each state.
                 </li>
                 <li>
                     	Society under the Societies Registration Act 1860
                 </li>
                 <li>
                   	Section 8 Company under the Companies Act, 2013
                 </li>
             </ul>
            </div><br>


            <div id="m3">
                <h3>Documents required for Trust Registration</h3>
                <ul>
                    <li>@guest
                    Address proof – Electricity/Gas bill
                       @else
                       Address proof – Electricity/Gas bill

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                   
                    </li>
                    <li>@guest
                    	ID proof (at least two members of the company) – Voter ID/Driving License/ Passport/Aadhar Card
@else
                    	ID proof (at least two members of the company) – Voter ID/Driving License/ Passport/Aadhar Card

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
                    </li>
                <p>It takes about 8-10 days for online registration to take place after the payment has been made. </p>
                    
                </ul>
            </div><br>

            <div id="m4">
                <h3>Documents Required for Society registration and Section 8 company</h3>
                <ul>
                    <li>@guest
                    	The name of the society
@else
The name of the society

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    Address proof of the office
                    @else
                    Address proof of the office

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    	ID Proof - Voter ID/Driving License/ Passport/Aadhar Card
                        @else
                        ID Proof - Voter ID/Driving License/ Passport/Aadhar Card

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    Two copies of MoA and By-laws of the society
                    @else
                    Two copies of MoA and By-laws of the society

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                <p>It takes about 8 to 10 days for drafting the MoA and By-laws of the Society. Thereafter it takes 21 to 30 days for the Society to be registered.</p>   
                </ul>
            </div><br>
             
              <button type="submit" id="btn">
                SUBMIT
            </button>
          
         </div>
      
       </div>
           

    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">