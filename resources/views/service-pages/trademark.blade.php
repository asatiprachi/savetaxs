
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
           
            <h1>Trademark Registration</h1>
           
                
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
                    <input type="button" value="Add To Cart">
                </div>
            </div>   
        </div>
        
    </div>
    
    <div class="row">
       <div class="col-lg-3"> 
             <div class="menu0"><a href="#m0">OverView</a></div>
            <div class="menu0"><a href="#m1">Documents Required for Trademark Registration</a></div>
            <div class="menu0"><a href="#m2">Trademark Registration Procedure</a></div>
            <div class="menu0"><a href="#m3">Trademark Objection</a></div>
            <div class="menu0"><a href="#m3">Trademark Assignment</a></div>
       </div> 
       <div class="col-lg-9">
         <div class="details">
             <div id="m0">
                 <h3>Trademark Registration</h3>
                  <p>Trademarking your company is a way of protecting your unique ideas, the brand, and its reputation.
                 It is a unique identity that makes your brand stand out from the rest. n India, trademarks are registered
                  by the Controller General Of Patents, Designs and Trademarks, Ministry Of Industry and Commerce, Government Of India.
                   You can register the trademark under the act named, The Trademark Act, 1999. Once you register a trademark,
                    you can use an R symbol along with it, and it will be valid till 10 years from the
                 date of registration. You can easily get a ™ within 3 days. But, to get an ®, it takes up to 2 years. </p>
             </div>
            <div id="m1">
             <h3>
               Documents Required for Trademark Registration
             </h3>
             <ul>
                 <li>
                     		Proof of Applicant.
                        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                  </li>
                 <li>
                     		PAN Card and Address Proof of Applicant.
                         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
                 </li>
                  <li>
                     		Certificate of registration (other than an Individual applicant).
                        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                      </li>
                  <li>
                    		Brand Name & Logo.
                       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                     
                 </li>
                 <li>	
                     	User Affidavit.
                     
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                 </li>
                 <li>	Proof of TM Use.
                         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                 </li>
                 <li>	MSME / Start-up Recognition.
                    
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
                 </li>
                 <li>Signed Form TM – 48.
                     
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
                 </li>
               
                  <button type="submit" id="btn">Submit</button>
                 
                  <br>
                  <br/>
                  <br>
                  
                 <p><b>Notes:</b></p>
                 <ul>
                     <li>
                        	Identity and business proofs: The trademark owner or the person who is approved by the trademark owner requires to present 
                         their identity proof. It can be your Aadhar Card, Driving License, Passport, Ration card or Voter’s ID.
                     </li>
                     <li>
                         	Using Logo with Tagline: If a trademark application is prepared for a tagline with only words there is no requirement for a logo. In cases where a logo is applied, then it must be submitted in black and white format. 
                         The number of words in the logo must exactly be the same as specified in the application for a trademark.
                     </li>
                     <li>
                        	Brand Name & Logo: The logo must have the brand name applied for trademark registration.
                     </li>
                     <li>
                         	User Affidavit: If a particular user data is to be claimed, the user affidavit is expected to be submitted.
                     </li>
                     <li>
                        	Proof of TM use: To demand specific user date, documentary proof like invoices, registration certificates, etc with the brand name must be given.
                     </li>
                     <li>	MSME or Start-up Recognition: A partnership firm, body corporates can give a certificate of registration under MSME or Start-up India scheme to get a 50% rebate on the Government fee
                     </li>
                     <li>
                         	Signed Form TM – 48: TM-48 is a lawful document that enables the attorney to file the trademark on your behalf with the trademark registry. The document will be made by LW professionals for the signature.
                     </li>
                 </ul>
                 
             </ul>
            </div><br>


            <div id="m2">
                <h3>Trademark Registration Procedure</h3>
                <ul >
                    
                    <li>	Choose a brand name </li>
                    <li>Prepare a trademark application</li>
                    <li>	Fill the application of brand name registration</li>
                    <li>	Examine the process of the brand name application.</li>
                    <li>	Publish your brand in the Indian Trade Mark Journals</li>
                    <li>	The trademark registration certificate issuance</li>
                   
                </ul>
            </div><br>

            <div id="m3">
                <h3>Trademark Objection</h3>
                <p> If a Trademark is registered and the status is shown as “Objected” this means that the authority has received 1 or more objections on the trademark, this can be because of duplication of existing registered trademark. The objection is raised under section 9 and section 11. 
                    In Section 9 the objections are made if the authority determines the trademark to be descriptive of goods. </p>
                <p>In Section 11 the objections are made by the authority when they see the same trademark already exists for similar goods, services or products. When the objection is done, the candidate requires 
                    to make sure that he/she gives appropriate documents within the provided time, this will help you to overcome the objection.</p>
            </div><br>

            <div id="m4">
                <h3>Trademark Assignment</h3>
                <p>Trademark rights are transferable through assignment agreements. When a trademark is assigned by an owner to another party, its ownership is conferred upon the other party, either completely (with goodwill) or
                     for a limited number of products or services (without goodwill). It usually involves a one-time payment.</p>
            </div><br>

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">