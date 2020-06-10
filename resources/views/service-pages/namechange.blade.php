
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
           
            <h1>Name Change</h1>
           
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
                <button type="submit" class="btn-registration">
                                    {{ __('Add To Cart') }}
                                </button>
                </div>
</form>
            </div>   
        </div>
        
    </div>
    
    <div class="row ">
       <div class="col-lg-3"> 
           <div class="menu0"><a href="#m1">OverView</a></div>
            <div class="menu0"><a href="#m2">Procedure of Name Changer</a></div>
            <div class="menu0"><a href="#m3">Documents required for Online Name Change Application</a></div>
            
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
            <div id="m1">
                <h3>Name Change</h3>
                 <p>A name change can be done owing to multiple reasons as per either one’s belief or compulsion.
                 However, whatsoever the reason maybe, name change involves legal processes which have to adhered to. </p>
             

            </div><br/>

            <div id="m2">
             <h3>
               Procedure of Name Change
             </h3>
             <ul>
                 <li>
                     	Select or look for a new name before making a Name changing affidavit on a stamp paper. 
                 </li>
                 <li>
                    	An advertisement has to be placed in the national newspaper. Married women changing their name after marriage should write in their husband's name and address in the notification.
                 </li>
                 <li>
                   	Name has to be published in the National Gazette
                 </li>
             </ul>
            </div><br>


            <div id="m3">
                <h3>Documents required for Online Name Change Application</h3>
                <ul>
                    <li>@guest
                    	An affidavit on a stamp paper, minimum value should be Rs.10. 
                        @else
                        An affidavit on a stamp paper, minimum value should be Rs.10. 

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                    The original newspaper cutting of the name change advertisement. A prescribed perform 
                        in printed format duly signed by the applicant and two witnesses.
                        @else
                        The original newspaper cutting of the name change advertisement. A prescribed perform 
                        in printed format duly signed by the applicant and two witnesses.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                    <li>@guest
                      	Two passport size photographs.
                        @else
                        Two passport size photographs.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
                   <li>@guest
                      	Photocopies of valid ID proof ( PAN card, Aadhar card or passport)
                        @else
                        Photocopies of valid ID proof ( PAN card, Aadhar card or passport)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>
                   <li>@guest
                       	A CD with a soft copy of the application in .docx format duly filled.
                         @else
                         A CD with a soft copy of the application in .docx format duly filled.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>
                   <li>@guest
                   	A letter stating that the content in the hard and soft copy of the application is true.
                     @else
                     A letter stating that the content in the hard and soft copy of the application is true.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>
                   <li>	@guest
                   A request letter along with the registration fee to the authority.
                   @else
                   A request letter along with the registration fee to the authority.

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
<br/>
            

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">