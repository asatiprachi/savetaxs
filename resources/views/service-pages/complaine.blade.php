
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
@extends('layouts.default')
@section('content')
<div class="container1">
    <div class="row" style="background-color: rgb(3, 3, 82);">
        <div class="col-lg-6" id="top1">
           
            <h1>Consumer Complaint</h1>
             
        </div>
        <div class="col-lg-6 " id="top2">
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
        
            <div class="menu0"><a href="#m1">OverView</a></div>
            <div class="menu0"><a href="#m2">Who Can File A Consumer Complaint In India</a></div>
            <div class="menu0"><a href="#m3">What are Consumer Rights?</a></div>
      
       </div> 
       <div class="col-lg-9">
         <div class="details">
            <div id="m1">
             <h3>
               Consumer Complaint
             </h3>
             <p>A Consumer Complaint is a formal complaint against a seller or service provider and is filed before the appropriate consumer forum (also called consumer court).
                  The Complaint is filed when the seller or service provider fails to rectify the problem even after receiving a legal notice.</p>
            
            </div><br>


            <div id="m2">
                <h3>Who Can File A Consumer Complaint In India</h3>
                <p class="extra">According to the Consumer Protection Act, you can file a Consumer Complaint if you are:-</p>
                <ul>
                    <li>	A consumer - i.e. an individual who purchases goods or avails services for his/her personal use (but not for resale or commercial purposes).</li>
                    <li>	Any registered volunteer organization that acts on behalf of consumers (e.g. The Consumer Guidance Society of India).</li>
                    <li>	A group of consumers having a common interest</li>
                    <li>	Legal heirs of a deceased consumer.</li>
                    <li>
                       .	Relatives of a consumer.
                    </li>
                   <li>	he legal guardian of a consumer, in case the consumer is a minor.</li>
                </ul>
            </div><br>

            <div id="m3">
                <h3>What are Consumer Rights?</h3>
               <ul>
                   <li>	Right to safety against any hazardous or potentially dangerous products or services.</li>
                   <li>	The right to information about the products or services you are purchasing.</li>
                   <li>	Right to choose from a variety of products and services at competitive price points</li>
                   <li>	Right to be heard and seek redressal through the various consumer courts in each district.</li>
                   <li>
                       	Right against unfair trade practices
                   </li>
               </ul>

         </div>
       </div>


    </div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">