
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@extends('layouts.default')
@section('content')
<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
            <h1> Copyright</h1>
           
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
             
             <div class="menu0"><a href="#m1">OverView</a></div>
            <div class="menu0"><a href="#m2">Things that are protected under Copyright</a></div>
            <div class="menu0"><a href="#m3">Basics required for Copyright registration</a></div>
            <div class="menu0"><a href="#m4">Process to Register for Copyright</a></div>
           
      
       </div> 
       <div class="col-lg-9">
         <div class="details">

            <div id="m1">
                <h3>Copyright</h3>
                 <p>Copyright registration is done following the Copyright Act, 1957.
                 With copyright registration, you become a legal owner of your creative work in respect of books, paintings, music, 
                 website, etc. Copyright registration in India grants its proprietor exclusive, sole rights to distribute, replicate,
                  reproduce the work or give authorization to another entity for the same. </p>
                
            </div>

            <div id="m2">
             <h3>
               Things that are protected under Copyright
             </h3>
             <p>
                 It protects the creation of ideas alone it cannot be protected. The following may be protected under copyright law. 
             </p>
             <ul>
                 <li>
                    	Cinematography film
                 </li>
                 <li>
                     	Sound recording
                 </li>
                 <li>
                   	Musical work & Sound recording
                 </li>
                 <li>
                  	Artistic work like paintings, photographs
                 </li>
                 <li>
                   	Original literary others
                 </li>
                 <li>
                	 Books
                 </li>
                 <li>
                  	Computer programs
                 </li>
                 <li>
                       Website
                 </li>
                 <li>
                  	Broadcasts on Radio and Television
                 </li>
                 <li>
                  	Published editions
                 </li>
             </ul>
            </div><br>


            <div id="m3">
                <h3>Basics required for Copyright registration</h3>
                <ul>
                    <li>@guest
                    	Basic details of the candidate.
                        @else
                        Basic details of the candidate.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    	Soft copies of his work and optional files in JPEG, JPG or GIF format. For computer programs, 4 copies of CDs and DVDs are required
                        @else
                        Soft copies of his work and optional files in JPEG, JPG or GIF format. For computer programs, 4 copies of CDs and DVDs are required

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>	@guest
                    Trademark certificate for artistic work.
                    @else
                    Trademark certificate for artistic work.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                        Power of attorney
                        @else
                        Power of attorney

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

            <div id="m4">
                <h3>Process to Register for Copyright</h3>
                <ul>
                    <li>	Fill in the form and pay the requisite fees</li>
                    <li>	Application to be signed by the applicant and the Advocate in whose favour a POA has been executed</li>
                    <li>	Registrar will issue a diary number</li>
                    <li>	If there are no objections received within 30 days, the scrutinizer will check the application for any discrepancy and if no discrepancy is there, 
                        the registration will be done and an extract will be sent to the registrar for the entry in the Register of Copyright.</li>
                    <li>	If there is any objection, the examiner will give both the parties a hearing </li>
                     <li>	After the hearing, if the objections are resolved the scrutinizer will scrutinize the application and approve or reject the application as the case may be.</li>
                   
                </ul>
            </div><br>

           

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">