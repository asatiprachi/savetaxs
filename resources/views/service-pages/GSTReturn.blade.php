
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
           
            <h1>GST Return Filing</h1>
           
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
             
              <div class="menu0"><a href="#m1">Overview</a></div>
            <div class="menu0"><a href="#m2">Types of GST Return</a></div>
            <div class="menu0"><a href="#m3">Procedure to Register</a></div>
            <div class="menu0"><a href="#m4">GST Return Filing Dates</a></div>
       </div> 
       <div class="col-lg-9">
         <div class="details">

             <div id="m1">
                 <h3>GST Return Filing</h3>
                    <p>A GST Return is a document that mentions about the details of the taxpayer’s income that is 
                        required to file with the tax administrative authorities to calculate tax liabilities. Filing the return helps the taxpayers to intimate 
                        the Goods and Services Network about the inflow and outflow of supplies including the amount of tax paid and collected. </p>
             </div>

             <div id="m2">
             <h3>
               Types of GST Return
             </h3>
                <table>
                    <tr>
                        <th>Return Form</th>
                        <th>Particulars</th>
                        <th>Frequency</th>
                        <th>Due Date</th>
                    </tr>
                    <tr>
                        <td>GSTR-1</td>
                        <td>Details of outward supplies of goods and services</td>
                        <td>Monthly</td>
                        <td>11th of the next month</td>
                    </tr>
                    <tr>
                        <td>GSTR-2</td>
                        <td>Details of inward supplies of goods and services affected</td>
                        <td>Monthly</td>
                        <td>15th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-3</td>
                        <td>Monthly return, in the case of finalization of details of
                             outward supplies <br>
                            and inward supplies along with the payment of tax.</td>
                        <td>Monthly</td>
                        <td>20th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-3B</td>
                        <td>It is a simple return in which the summary of outward suppliesalong<br> with  Input Tax Credit is declared and payment of tax is affected by the taxpayer.</td>
                        <td>Monthly</td>
                        <td>20th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-4</td>
                        <td>For all the taxable person registered under the composition levy</td>
                        <td>Quarterly</td>
                        <td>18th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-5</td>
                        <td>Returns for a non-resident foreign taxable person</td>
                        <td>Monthly</td>
                        <td>20th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-6</td>
                        <td>Returns for an input service distributor</td>
                        <td>Monthly</td>
                        <td>13th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-7</td>
                        <td>Returns for authorities deducting TDS</td>
                        <td>Monthly</td>
                        <td>10th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-8</td>
                        <td>Details of supplies effected through the e-commerce operator and the amount of tax collected</td>
                        <td>Monthly</td>
                        <td>10th of the next month</td>
                    </tr>
                     <tr>
                        <td>GSTR-9</td>
                        <td>Annual return for a normal taxpayer</td>
                        <td>Annually</td>
                        <td>31th December of the<br> next financial year</td>
                    </tr>
                     <tr>
                        <td>GSTR-9A</td>
                        <td>Annual return of a taxpayer registered under the composition levy<br> anytime during the year</td>
                        <td>Annually</td>
                        <td>31th December of the<br> next financial year</td>
                    </tr>
                     <tr>
                        <td>GSTR-10</td>
                        <td>Final Return</td>
                        <td>Only once,<br> when GST<br> registration <br>is cancelled or surrendered</td>
                        <td>Within 3 months of the<br> date of cancellation or the date of <br>cancellation of order, whichever is later</td>
                    </tr>
                     <tr>
                        <td>GSTR-11</td>
                        <td>Details of inward supplies to be furnished by a person having UIN <br>and claiming a refund</td>
                        <td>Monthly</td>
                        <td>28th of the following <br>month for which the statement is filed</td>
                    </tr>
                     
                </table> 
             </div><br>

            <div id="m3">
             <h3>
              Documents Required for GST Return
             </h3>
             <ol>
                 <li>
                     		PAN card of the individual or company
                        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                       
                 </li>
                 <li>
                     	Copy of the entity’s government ID (Driving license/Aadhar/Voter ID)
                         
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                         
                 </li>
                  <li>
                     	Incorporation certificate/Partnership deed
                        
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                       
                      </li>
                  <li>
                    	Personal or company’s current bank account statement
                       
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                       
                 </li>
                 <li>	Address proof (Electricity bill/rent agreement/sale deed of the office location
                     
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                       
                 </li>
                 <li>Copy of cancelled cheque leaf of the current account
                     
                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                       
                 </li>
                 
             </ol>
             
             <button type="submit" id="btn">Submit</button>
             
            </div><br>


            <div id="m4">
                <h3>GST Return Filing Dates</h3>
                <p>For turnovers up to Rs.1.5 Crores, the quarterly filing dates are as follows:</p>
                <table>
                    <tr>
                        <th>Time Period</th>
                        <th>The Dates Due</th>
                    </tr>
                    <tr>
                        <td>January-March</td>
                        <td>
                            30 April 2018
                        </td>
                    </tr>
                    <tr>
                        <td>April-June 2018</td>
                        <td>31 July 2018</td>
                    </tr>
                    <tr>
                        <td>July-September 2018</td>
                         <td>31 October 2018</td>
                    </tr>
                </table><br/>
                <p>Turnovers more than Rs. 1.5 Crore / Turnover less than 1.5 Crore, still opted for filing monthly</p>
                  <table >
                      <tr>
                          <th>Period</th>
                          <th>Due Dates</th>
                      </tr>
                      <tr>
                          <td>April 2018</td>
                          <td>1 May 2018</td>
                      </tr>
                      <tr>
                          <td>May 2018</td>
                          <td>10 June 2018</td>
                      </tr>
                      <tr>
                          <td>June 2018</td>
                          <td>10 July 2018</td>
                      </tr>
                      <tr>
                          <td>July 2018</td>
                           <td>10 August 2018</td>
                      </tr>
                  </table>
            </div><br>

            

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">