

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
           
             <h1>ESI Registration</h1>
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
            <div class="menu0"><a href="#m3">Document required</a></div>
                        <div class="menu0"><a href="#m3">Entitys required Registration</a></div>

            </div>

        <div class="col-lg-9">
          <div class="details">
           <div id="m1">
              <h3>ESI Registration</h3>
                   <p>Employee State Insurance Corporation is a self-financing health 
            insurance scheme that provides medical benefits to the employees and their family. Units or 
            Establishments that have 10 or more employees, drawing the wages of up to Rs.15,000 a month are 
            required to be registered for ESIC under the ESI Act 1948.  At present, covered employees
            contribute 1.75% of the wages to the ESIC and covered employers contribute 4.75% of the wages, payable to their employees. </p>
                       
    </div>
<div id="m2">
    <h3>ESI Registration Procedure</h3>
    <ul class="a">
        <li> Fill up the form and submit your documents</li>
        <li> All the documents will be verified</li>
        <li> We will help you to fill different application forms </li>
        <li> After completion of ESI registration , we will send you the 17 digit identification code number and temporary ID card</li>
    </ul>

    </div>

<div id="m3">
     <h4>Documents required for ESIC registration</h4>

<ul class="a">
    <li> @guest
    A registration certificate obtained either under the:
         @else   
         A registration certificate obtained either under the:
         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
              @endguest         
    </li>
    <p>a. Factories Act</p>
        <p>b. Shops and Establishment Act</p>

    <li> @guest
    Certificate of Registration in case of Company, and Partnership deed in case of a Partnership
         @else
         Certificate of Registration in case of Company, and Partnership deed in case of a Partnership

          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
        @endguest
    </li>
    <li> @guest
    Memorandum of Association and Articles of Association of the Company
    @else
    Memorandum of Association and Articles of Association of the Company

           <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
           </span>
           @endguest
    </li>
    <li> @guest
    A list of all the employees working in the Establishment
    @else
    A list of all the employees working in the Establishment

           <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
           </span>
           @endguest
    </li>
    <li> @guest
    PAN Card of the Business Entity as well as all the Employees working under the entity
    @else 
    PAN Card of the Business Entity as well as all the Employees working under the entity

           <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
           </span>
           @endguest
    </li>
    <li>@guest
     The compensation details of all the employees
     @else
     The compensation details of all the employees

           <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
           </span>
           @endguest
    </li>
        <li>@guest
         A cancelled cheque of the Bank Account of the Company
         @else  
         A cancelled cheque of the Bank Account of the Company

           <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
           </span>
           @endguest
        </li>
    <li> @guest
    List of Directors of the Company
    @else 
    List of Directors of the Company

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
    <li>@guest
     Register containing the attendance of the employees
     @else
     Register containing the attendance of the employees

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
<br>


<div id="m4">
     <h4>Entities covered under ESIC</h4>
<h3>The entities covered are – </h3>
<ul class="a">
    <li>	Shops</li>
<li>	Movie theatres</li>
<li>	Medical institutions</li>
<li>	Hotels or restaurants/li>
<li>	Newspaper establishments</li>
<li>	Private Educational institutions</li>
<li>	Roadside motor transport establishments</li>
<li>	Cinemas</li>


</ul>
</div>

</div>
</div>
    </div>
  </div>
  @endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">