
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
           
             <h1>FSSAI Registrations</h1>

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
                    <input type="button" class="btn1" value="Add To Cart">
                </div>
            </div>   
        </div>
        
    </div>
    
    <div class="row" >
       <div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2">Requirements for Registration </a></div>
            <div class="menu0"><a href="#m3">How to obtain registration</a></div>
            <div class="menu0"><a href="#m4">Document required for registration</a></div>
            <div class="menu0"><a href="#m5">FASSI licence</a></div>
            <div class="menu0"><a href="#m6">Document required for central licence</a></div>
            <div class="menu0"><a href="#m7">Document required for state licence</a></div>

         </div>
        <div class="col-lg-9">
           <div class="details">
            <div id="m1">
                <h3>FSSAI Registrations</h3>
               <p style="padding-left: 22px;">Food Security and Standard Authority of India FSSAI registration 
                   is for those who wants to start their business in food sector. 
                   FSSAI supervises the business under the regulations listed in FSSAI Act 2006.
                    This Act ensures that food products go under quality check and that no food adulteration happens. </p>

    </div><br/>

<div id="m2">
    <h3>Requirements for FSSAI Registration</h3>
    <ul>
        <li> Any FBO with an annual turnover of not more than Rs. 12 Lakhs</li>
        <li> Petty retailer dealing in food products</li>
        <li> Any person who manufactures or sells any food article by himself</li>
        <li>Food sale is done by the temporary stall holder</li>
        <li> Any individual who distributes food in any religious or social gathering except a caterer</li>
    </ul>

    </div><br/>

<div id="m3">
     <h3>How to Obtain FSSAI Registration</h3>
<ul>
<li>	FSSAI registration is initiated by submitting Form A (application) to food and safety department.</li>
<li>	This application can be accepted or it may be rejected by the Department within 7 days from the application date and the fact has to be intimated to the applicant in writing</li>
<li> If the application is accepted, then the department will grant a registration certificate with the registration number and the photo of the applicant.</li>
<li>FBO should prominently display the certificate of registration at the place of business during the business hours.</li>

</ul>
</div><br/>


<div id="m4">
<h3>Documents required for FSSAI Registration</h3>

<ul class="a">
<li> Form B – completed and signed
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
        
</li>
<li> Photo Identity of FBO
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Proof of possession of premises (eg. Rental Agreement )
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Partnership Deed / Certificate of Incorporation / Articles of Association etc
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> List of food products to be dealt with
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Food safety management system plan
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>

</ul>

</div><br/>
<div id="m5">
<h3>FSSAI License</h3>
<p>FSSAI Registration is compulsory for small businesses
     whose turnover is less than Rs. 12 lakhs per year. However any food business
      exceeding the turnover limit of Rs.12 lakhs per year, then they require a FSSAI License. </p>

</div><br/>

<div id="m6">
<h3>Documents required for Central License </h4>

<ul class="a">
<li> Form B duly completed and signed
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Plan of the processing unit showing the dimensions and operation-wise area allocation  
    
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
         </li> 
<li>List of Directors/ Partners/ Proprietor with address, contact details, and photo ID
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Name and list of equipment and machinery used with the number and installed capacity
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
    
</li>
<li> List of food category to be manufactured
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li>Authority letter from manufacturer nominated a responsible person name and address
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li>Analysis report of water to be used in the process to confirm the portability
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Source of raw material for milk, meat etc
    
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Recall plan wherever applicable
    
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li>Ministry of Commerce Certificate for 100% EOU
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
    
</li>
<li> NOC/PA document issued by FSSAI
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> IE code document issued by DGFT
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Form IX
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Certificate from Ministry of Tourism 
       
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
        </li> 
<li> Proof of possession of premises
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Partnership deed/ affidavit of proprietorship
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
    
</li>
<li> NOC and copy of License from the manufacturer
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
    
</li>
<li> Food safety management system plan or certificate
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> NOC from the municipality or local body
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Supporting document for proof of turnover and transportation
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Declaration form
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
</ul>
</div><br/>


<div id="m7">
<h3>Documents required for State License</h3>

<ul class="a">
<li>	Form B duly completed and signed
     
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
    
</li>
<li>	Plan of the processing unit showing the dimensions and operation-wise area allocation 
        
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
        </li>
<li> List of Directors/ Partners/ Proprietor with address, contact details, and photo ID
    
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Name and list of equipment and machinery used with the number and installed capacity
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> List of food category to be manufactured
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li> Authority letter from manufacturer nominated a responsible person name and address
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Analysis report of water to be used in the process to confirm the portability
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Proof of possession of premises
      
           <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li>	Partnership deed/ affidavit of proprietorship
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
     
</li>
<li>	NOC and copy of License from the manufacturer
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li>Copy of certificate obtained under Coop Act 1861/Multi state Coop Act 2002
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>
<li> Food safety management system plan or certificate
      
     <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
        </span>
      
</li>

</ul>

<button type="submit" id="btn">Submit</button><br>

</div>
</div>

</div>
</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">