
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@extends('layouts.default')
@section('content')

<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
                        <h1>Patent</h1>
                        
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
    

    <div class="row">
<div class="col-lg-3"> 
        
            <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2"> Procedure for Registration </a></div>
            <div class="menu0"><a href="#m3">Document required</a></div>
</div>
<div class="col-lg-9">
<div class="details">
    <div id="m1">

<h3>Patent</h3>
<p >A patent gives its owner the right to prevent others from making, using, importing or selling his/her
     invention without approval.  It involves a search of the intellectual property regulator of India’s database, to check whether there
      exists an object or invention that is the same as or similar to the applicant's invention.  </p>
                        
    </div><br>
<div id="m2">
    <p>Procedure of Patent Application	</p>
    <ul class="a">
        <li>	Fill in the form and submit your necessary documents</li>
        <li>	After receiving documents we will conduct a patentability search for you</li>
        <li> We will then draft your patent application</li>
        <li> After the final review, we will file the Patent application with Indian Patent office</li>
        <li> After submitting all the documents and Patent application, we will mail you the acknowledgement regarding same.</li>
    </ul>

</div>
<div id="m3">
     <p >Documents required for filing a Patent in India</p>

<ul class="a">
    <li> @guest
    Complete specification (in English)
       @else
       Complete specification (in English)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li>@guest
    Drawing(s)
    @else
    Drawing(s)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li> @guest
    Name, address, and nationality of inventors
    @else
    Name, address, and nationality of inventors

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                        
                          @endguest
    </li>
    <li>@guest
     Name, address, and nationality of applicants
     @else
     Name, address, and nationality of applicants

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li>	@guest
    Power of Attorney (To be filed in case the application is filed by a patent agent)
    @else
    Power of Attorney (To be filed in case the application is filed by a patent agent)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
        <li>@guest
        	Assignment Deed or Application Form endorsed by the inventor (if the inventors are not the applicants)
          @else
          Assignment Deed or Application Form endorsed by the inventor (if the inventors are not the applicants)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
        </li>
    <li>@guest
    	Details of correspond­ing applications filed in other countries (Infor­mation and undertaking under Section 8)
      @else
      Details of correspond­ing applications filed in other countries (Infor­mation and undertaking under Section 8)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li>@guest
    	Verified English translation of the priority application (required for convention applications).
      @else
      Verified English translation of the priority application (required for convention applications).

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li>@guest
    	Verified English translation of the PCT application (required only for national phase applications)
         Agent can verify the English translation of PCT application on behalf of the applicant.
         @else
         Verified English translation of the PCT application (required only for national phase applications)
         Agent can verify the English translation of PCT application on behalf of the applicant.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
         
         </li>
    <li>@guest
    	Certified copy of the priority application, if requested by the Controller (required usually for convention 
        applications, but may also be requested for national phase application in case the priority document was not 
        submitted with the International Bureau)
        @else
        Certified copy of the priority application, if requested by the Controller (required usually for convention 
        applications, but may also be requested for national phase application in case the priority document was not 
        submitted with the International Bureau)
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
        </li>
    <li>@guest
    	Sequence listing in computer-readable text format (if any) (no print form is required to be submitted)
      @else
      Sequence listing in computer-readable text format (if any) (no print form is required to be submitted)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li>@guest
    	Permission from National Biodiversity Authority (in case any Biological material used in the invention is from India).
      @else
      Permission from National Biodiversity Authority (in case any Biological material used in the invention is from India).

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