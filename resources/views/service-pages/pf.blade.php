
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

@extends('layouts.default')
@section('content')

<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
                        <h1>PF Registration</h1>
                       
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
            <div class="menu0"><a href="#m2">Who has to Register for EPF </a></div>
            <div class="menu0"><a href="#m3">Document required</a></div>
              
            <div class="menu0"><a href="#m4">Why Choose Us</a></div>

          </div>

          <div class="col-lg-9">
  <div class ="details" >
    <div id="m1">
        <h3>PF Registration</h3>
    <p>Employees Provident Fund [EPF] is a scheme under the Employees’ 
        Provident Funds and Miscellaneous Provisions Act, 1952. It is regulated
         under the purview of Employees’ Provident Fund Organisation (EPFO).
          Estabishment Registration with Employers Provident Fund Organisation (EPFO)
           is mandatory if the number of employees exceeds 20 and may be obtained voluntarily 
           if the employee's number is less than 20. </p>
                       
    </div><br>

    
<div id="m2">
    <h3>Who has to Register for EPF</h3>
    <p>To be eligible for PF Registration, an organization has to fulfill the following criteria:</h6>
    <ul class="a">
        <li>	A factory with the total employee strength of 20 or more.</li>
        <li>	An establishment that employs more than 20 persons. Here, the Central Government defines the class of such firms.</li>
        <li>	An establishment that has less than 20 workers and has been notified of compulsory registration for not less than 2 months.</li>
<li>	Companies with less than 20 employees (Note: Such companies must issue a notice to the Employees’ Provident Fund Organization in 2 months or less than that)</li>
<li>	The employer and the employees of an establishment must mutually agree to apply for PF to the Central PF Commissioner. A notification has to be sent to the Official Gazette from the date of the agreement.</li>


    </ul>
    </div><br>


<div id="m3">
     <h3>Documents Required for EPF Registration</h3>
<p class="extra">1. Proprietorship Firm</p>
<ul class="a">
<li>@guest
 Name
 @else
 Name

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
</li>
<li>@guest
 PAN Card
 @else
 PAN Card

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
</li>
<li>@guest
 ID Proof – Driving License / Passport / Voter Card
 @else
 ID Proof – Driving License / Passport / Voter Card

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
</li>
<li>@guest
 Address Proof for the premises
 @else
 Address Proof for the premises

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
</li>
<li> @guest
Residential address proof
@else
Residential address proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
</li>
<li> @guest
Telephone number
@else
Telephone number

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
</li>



</ul>



         <p class="extra">2. Society/Trust</p>
               <ul class="a">
                   <li>@guest
                   	Certification of Incorporation
                     @else
                     Certification of Incorporation

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>
                   <li>	@guest
                   MOA and By-laws
                   @else
                   MOA and By-laws

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>
                   <li>	@guest
                   Pan Card number
                   @else
                   Pan Card number

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>
                  <li>	@guest
                  Address proof
                  @else
                  Address proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
                  </li>
                   <li>@guest
                   	ID proof
                     @else
                     ID proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                   </li>


              </ul>



               <p class="extra">3. Partnership Firms</p>
                 <ul class="a">
                 <li>@guest
                  Certificate of Registration Firms
                  @else
                  Certificate of Registration Firms

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                 </li>
                  <li>@guest
                  Partnership Deed
                  @else
                  Partnership Deed

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                  </li>
                 <li> @guest
                 ID Proof – Driving License / Passport / Voter Card
                 @else
                 ID Proof – Driving License / Passport / Voter Card

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                 </li>
                 <li>@guest
                  List of all partners with address proof
                  @else
                  List of all partners with address proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                 </li>
                 <li> @guest
                 ID proof of all partners
                 @else
                 ID proof of all partners

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                 </li>

               </ul>

                <p class="extra"> 4. LLP/Company</p>
                     <ul class="a">
                         <li> @guest
                         Incorporation Certificate
                         @else
                         Incorporation Certificate

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                         </li>
                         <li>@guest
                         	proof of directors
                           @else
                           proof of directors

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                         </li>
                        <li>@guest
                        	DSC of directors
                          @else
                          DSC of directors

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                         <li>@guest
                         	List of all directors with address proof
                           @else
                           List of all directors with address proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                              </li>
                         <li>	@guest
                         ID proof
                         @else
                         ID proof

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                         </li>


                    </ul>

               <p class="extra">5. Employees</p>
                  <ul class="a">
                      <li>	Name</li>
                      <li>	Date of Joining</li>
                      <li>	Date of birth</li>
                      <li>	Mobile number</li>
                       <li>	Postal address</li>
                      <li> Name of Nominee</li>
                      <li>	Grade</li>
                        <li>	Salary</li>
                       <li>	Designation</li>
                       <li> @guest
                       ID Proof – Driving License / Passport / Voter Card
                       @else
                       ID Proof – Driving License / Passport / Voter Card

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                       </li>
                        <li>@guest
                         Bank account number with IFSC code
                         @else
                         Bank account number with IFSC code

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                          <li> @guest
                          Voluntary application
                          @else
                          Voluntary application

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                          </li>
                        <li>@guest
                         Employee details
                         @else
                         Employee details

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                       <li> @guest
                       Signature
                       @else
                       Signature

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                       </li>
                       <li> Date of agreement</li>

                   </ul>

                <p class="extra">6. Other Entities</p>
                    <ul class="a">
                        <li> @guest
                        First sale bill.
                        @else
                        First sale bill.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                         <li> @guest
                         First purchase bill of raw material and machinery.
                         @else
                         First purchase bill of raw material and machinery.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                         </li>
                        <li>@guest
                         GST Registration Certificate, if registered
                         @else
                         GST Registration Certificate, if registered

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                        <li> @guest
                        Bankers details- name, address, branch, IFSC code
                        @else
                        Bankers details- name, address, branch, IFSC code

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                        <li>@guest
                         Record of a monthly strength of the number of employees.
                         @else
                         Record of a monthly strength of the number of employees.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                        <li>@guest
                         Register of salary and wages, all vouchers, 
                            all balance sheets from day one to current date of provisional coverage.
                            @else
                            Register of salary and wages, all vouchers, 
                            all balance sheets from day one to current date of provisional coverage.
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                            </li>
                        <li>@guest
                         Salary and PF Statement.
                         @else
                         Salary and PF Statement.

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                        </li>
                        <li>@guest
                        Cross cancelled cheque.
                           @else
                           Cross cancelled cheque.

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
             <h3>Why choose us?</h3>
                <ul class="a">
                  <li> We help you save time in going through the legal complexities of registering PF.</li>
                   <li> Our experts will help you submit the documents to the concerned authority on time..</li>
                  <li> After all the documents have been verified, we help you get you the PF number at the earliest.</li>


             </ul>
          </div>
    </div>
</div>
</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">