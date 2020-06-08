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
           
                        <h1>Income Tax Return	</h1>
                       
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
            <div class="menu0"><a href="#m2">Procedure to file ITR</a></div>
            <div class="menu0"><a href="#m3">acknowledgment</a></div>
                        <div class="menu0"><a href="#m4">Who should file</a></div>

            <div class="menu0"><a href="#m5">Document required</a></div>
</div>

<div class="col-lg-9">
<div class="details">
    <div id="m1">
         <h3>Income Tax Return	</h3>
                        <p>An income tax return is a document that helps a taxpayer to declare his income,
                             expenses, tax deductions, investments, etc. Under Income Tax Act 1961, under various scenarios, it is mandatory 
                             for a tax payer to file a return. he tax returns have to be filed by a specific date depending on the type of 
                             assesses:</p>
                             <ul>
                        <li> 31st July without tax audit</li>
                        <li> 30th September with the tax audit</li>
                      
    </div><br/>
<div id="m2">
    <h3>Procedure to file ITR</h3>
    <ul class="a">
        <li> Calculation of Income and Tax</li>
        <li> Tax Deducted at Source (TDS) certificates and Form 26AS</li>
        <li> Choose the right Income Tax Form</li>
        <li> Download ITR utility from income tax portal</li>
        <li>Fill in your details in the downloaded file</li>
        <li> Validate the information entered</li>
        <li> Convert the file to XML format</li>
        <li> Upload the XML file on the income tax portal and filing</li>

    </ul>
    </div><br/>
<div id="m3">
<h3>Income Tax Return acknowledgment</h3>
<p>Once ITR is filed, an acknowledgment slip in duplicate is issued. It consists of details like:</p>
<ul class="a">
    <li>Name</li>
    <li> Address </li>
    <li> Status</li>
    <li> Permanent Account Number </li>
    <li> A brief statement of taxable income</li>
    <li> Deductions</li>
    <li> Tax paid</li>
    <li> Verification</li>

</ul>
</div>


<div id="m4">
     <h3>Who should file income tax return?</h3>
    <p>IAs per the Income Tax Department the entities required to file IT returns annually are:</p>

<ul class="a">
    <li> Every company, be it Private limited, LLP or partnership irrespective of the income or loss must file IT returns</li>
    <li> Individuals enjoying income from mutual funds, bonds, stocks, fixed deposits, income from interest, house property,etc</li>
    <li> Individuals receiving income from property under charitable trusts, religious trusts or income from voluntary contributions</li>
    <li> Individuals or companies who want to claim tax refunds</li>
    <li> Salaried persons whose gross income before deductions under section 80C to 80U exceeding the exemption limit</li>
    <li> All individuals with foreign income, foreign assets, NRI’s and tech professionals on onsite deputation.</li>
    <li> People who have opted for one job from another are also eligible.</li>


</ul>
</div><br/>
<div id="m5">
     <h3>Documents required for Income Tax Filing in India</h3>

<ul class="a">
    <li>@guest
    	Bank statements
          @else  
          Bank statements
      
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                       @endguest
                    </li>
    </li>
    <li>@guest
     Proof of investments
     @else  
     Proof of investments
        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
    </li>
    <li> @guest
    T.D.S. Certificates in Form 16 or 16A as applicable
    @else  
    T.D.S. Certificates in Form 16 or 16A as applicable
         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
    </li>
    <li> @guest
    Documents on purchase and sale of investments/assets
    @else  
    Documents on purchase and sale of investments/assets
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
    </li>
    <li> @guest
    Challan of tax paid such as advance tax or self-assessment tax
    @else   
    Challan of tax paid such as advance tax or self-assessment tax
         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
    </li>
    <li>@guest
     If PAN is applied but not received, a copy of filed PAN application and its acknowledgment
     @else  
     If PAN is applied but not received, a copy of filed PAN application and its acknowledgment
       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
    </li>
    <li> @guest
    In case not applied for PAN, a PAN application form duly filled in and two passport size photographs
    @else   
    In case not applied for PAN, a PAN application form duly filled in and two passport size photographs
        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
                    </li>
    </li>
    <li>@guest
    For businesses - a copy each of the audit report, balance sheet, trading, profit and loss account, 
        personal account of proprietor or partners
        @else  
        For businesses - a copy each of the audit report, balance sheet, trading, profit and loss account, 
        personal account of proprietor or partners          
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
        
        </li>
    <li>@guest
    Statement of receipts and payments when no regular books are maintained
    @else  
    Statement of receipts and payments when no regular books are maintained
      
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest 
    </li>
    <li>@guest
     Receipts of payment of insurance premium, provident purchase of NSCs, new equity shares, mutual fund, NSS,
         donations, etc. to support claimed deductions
         @else         
         Receipts of payment of insurance premium, provident purchase of NSCs, new equity shares, mutual fund, NSS,
         donations, etc. to support claimed deductions
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