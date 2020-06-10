

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
           
                        <h1>Partnership Firm	</h1>
                        
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
                <button type="submit" class="btn-registration">
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
            <div class="menu0"><a href="#m2">Document required</a></div>
           <div class="menu0"><a href="#m3">Features </a></div>
            <div class="menu0"><a href="#m4">Why Choose Us</a></div>
</div>

<div class="col-lg-9">
<div class ="details" >
<div id="m1">
                <h3>Partnership Firm</h3>
                <p>Partnership firm in India are governed by the Partnership Act, 1932. Section 4 of the Act defines 
                    Partnership as - An agreement between persons who have agreed to share profits of the business carried on by all or any one of
                     them acting for all. Therefore, a partnership consists of three essential elements.</li>
                 <li> A partnership must be a result of an agreement between two or more individuals.</li>
                <li> The agreement must be built to share the profits obtained from the business.</li>
                 <li> The business must be run by all or any of them representing the rest.</li>
                 <p>All these conditions must coexist before a partnership can come into existence.</p>
                        
    <h3>Information required in a Partnership Deed</h3>
    <ul class="a">
        <li> Name and address of the firm and all the partners</li>
        <li>Nature of business</li>
        <li> Date of starting of business Capital to be contributed by each partner </li>
        <li> Capital to be contributed by each partner</li>
        <li> Profit/loss sharing ratio among the partners</li>
    </ul>

</div>

<div id="m2">
     <h3>Documents required to Register a Partnership Firm</h3>

<ul class="a">
    <li> @guest
    Application for registration of partnership (Form 1)
        @else
        Application for registration of partnership (Form 1)

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li>@guest
     Specimen of Affidavit
     @else
     Specimen of Affidavit

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li> @guest
    Certified original copy of Partnership Deed
    @else
    Certified original copy of Partnership Deed

                          <span>
                            <div class="upload-btn-wrapper">
                            <button class="btn"><i class="fa fa-upload" aria-hidden="true"></i></button>
                            <input type="file" name="myfile" />
                            </div>
                          </span>
                          @endguest
    </li>
    <li> @guest
    Proof of principal place of business (ownership documents or rental/lease agreement)
    @else
    Proof of principal place of business (ownership documents or rental/lease agreement)

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

<br/>
</div><br>


<div id="m3">
     <h4>Features of a Partnership Firm </h4>

<ul class="a">
    <li> A Partnership Firm is a business that require two or more people to manage and operate the functions of the firm in accordance with the law mentioned in the Partnership Deed. Members share their profits and liabilities in the predetermined ratio as mutually decided by them.</li>
    <li>It is best suited for small businesses as setting up cost is low and compliance requirements are also minimal.</li>
    <li> Ideally a partnership firm must have atleast two members, however in the banking business, it can have upto 10 members and in any other business, it can even have upto 20 members. </li>
    <li> Registering a partnership firm is not necessary, however it is advisable to have it registered online. </li>
<li> The partnership deed contains names of each partner and their respective addresses, the firm name, the date of commencement, capital invested by each partner, type of partnership, and profit-sharing ratio. </li>
</ul>
</div><br>
<div id="m4">

<h3>Why Choose Us for Partnership Registration?</h3>

<ul class="a">
    <li> We will help you get your partnership firm registered within 8 business days and help you get the partnership deed in a smooth processing way.</li>
    <li> We will help you with all the paperwork making your government interaction convenient.</li>
</ul>

</div>

</div>
</div>
</div>
</div>
@endsection
<link rel="stylesheet" href="css/services.css">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">