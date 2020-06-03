
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
           
            <h1> Trade License</h1>
             
        </div>
        <div class="col-lg-6" id="top2">
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
                    <input type="button" class="btn1" value="Add To Cart">
                </div>
            </div>   
        </div>
        
    </div>
    
    <div class="row">
       <div class="col-lg-3"> 
             
             <div class="menu0"><a href="#m0">OverView</a></div>
            <div class="menu0"><a href="#m1">Types of Trade License</a></div>
            <div class="menu0"><a href="#m2">Eligibility for a Trade License</a></div>
            <div class="menu0"><a href="#m3">Documents Required for Trade Licence</a></div>
            <div class="menu0"><a href="#m4">What Are the Documents Required to Renew A Trade License?</a></div>
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
             <div id="m0">
                 <h3>
                     TradeLicense
                 </h3>
                  <p>A Trade License is a legal document issued by the local municipality that 
                provides authorization to a person, or a party, to commence business operations. In perspective of this,
                 it is essential for any business establishments 
                to take primary licenses from the License Department before beginning manufacturing, exchange or storage of any activity. </p>
             </div>

            <div id="m1">
             <h3>
                Types of Trade License
             </h3>
             <ul>
                 <li>
                     Shop License – for those who wants to open a shop
                 </li>
                 <li>
                      Industrial License – for those who wants to open a small or mid sized industrial unit
                 </li>
                 <li>
                      Food Establishment License – For those who wants to get into food and beverage industry
                 </li>
             </ul>
            </div><br>


            <div id="m2">
                <h3>Eligibility for a Trade License</h3>
                <ul>
                    <li>	Applicant must have attained the age of 18 years</li>
                    <li>	Applicant must not have any criminal records</li>
                    <li>	Businesses must be lawfully permissible</li>
                    
                </ul>
            </div><br>

            <div id="m3">
                <h3>Documents Required for Trade Licence</h3>
                <ul>
                    <li>	Lease documents/agreement in case of premises are on lease
                       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                      
                    </li>
                    <li>	ID Proof
                       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                    
                    </li>
                    <li>	Occupancy Certificate
                      
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                   
                    </li>
                    <li>	Address Proof 
                        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                    </li>
                    <li>	Cancelled Cheque 
                       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
                    </li>
                     <li>	Certificate of Incorporation 
                         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                     </li>
                    <li>	PAN of Entity 
                      
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                    </li>
                </ul>
                 
                <button type="submit" id="btn">Submit</button>
               
            </div><br>
            <br>

            <div id="m4">
                <h3>What Are the Documents Required to Renew A Trade License?</h3>
                <p >In India, Trade License renewals take place between January 1 and March 1 of every year.
                     While applying, a person should present the following documents for verification;</p>
                <ul>
                    <li>	The original trade licenses</li>
                    <li>	All tax receipts, showing up to date payments</li>
                    <li>	Past payment challans</li>
                    
                </ul>
            </div><br>

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">