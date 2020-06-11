
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
           
            <h1>SSI/MSME Registration</h1>
              
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
    
    <div class="row ">
       <div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m2">What are MSME Enterprises?</a></div>
            <div class="menu0"><a href="#m3">Documents Required for registration</a></div>
            <div class="menu0"><a href="#m1">OverView</a></div>
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
             <div id="m1">
                 <h3>
                     SSI/MSME
                 </h3>
                 <p>For promoting entrepreneurship, the government provides special benefits to the small businesses in the form of subsidies and incentives. Also, banks give loans at concessional rates to set up these businesses.
                 For availing those, the small businesses need to register under Micro, Small and Medium Enterprises (MSMEs) act. </p>
              

             </div>      <br/>
     
           <div id="m2">
             <h3>
                 What are MSME Enterprises?
             </h3>
             <p>MSME enterprises of manufacturing sector can be categorized on the basis of amount invested in plant and machinery –</p>
             <ul>
                 <li>
                     Micro enterprises– Entities investing less than ₹ 25 lakhs in plant and machinery
                 </li>
                 <li>
                     Small enterprises– Entities investing between ₹ 25 lakhs and ₹ 5 crores in plant and machinery
                 </li>
                 <li>
                    Medium enterprises– Entities investing between ₹ 5 crores and ₹ 10 crores in plant and machinery
                 </li>
             </ul>

             <p >MSME enterprises in the service sector can be categorized on the basis of amount invested in equipment-</p>
             <ul>
                 <li>
                    Micro enterprises– Entities investing less than ₹ 10 lakhs
                 </li>
                 <li>
                    Small enterprises– Entities investing more than ₹ 10 lakhs but less than ₹ 2 crores
                 </li>
                 <li>
                   Medium enterprises– Entities investing ₹ 2 crores but less than ₹ 5 crores
                 </li>
             </ul>

            </div><br>


            <div id="m3">
                <h3>Documents Required for registration</h3>
                <ul>
                    <li>@guest
                    Business address proof
                      @else
                      Business address proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    Copies of the sale bill and purchase bill
                    @else
                    Copies of the sale bill and purchase bill

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    Partnership deed/ MoA and AoA
                    @else
                    Partnership deed/ MoA and AoA

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                    <li>@guest
                    Copy of Licenses
                    @else
                    Copy of Licenses

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    Bills of Machinery Purchased
                    @else
                    Bills of Machinery Purchased

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
                
            </div><br><br/>

            

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">