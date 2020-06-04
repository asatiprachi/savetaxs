<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          
       
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('default.name', 'Savetaxs') }}</title>

          <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
</head>
<body>

<header>
<div id="webView"> 
  <nav>
     <div class="brand">
            <a href="/"><i>savetaxs</i></a>
      </div>

   
  

  <div class="wrapp">
        <ul class="links">
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn" >STARTUP</a>
                <div class="dropdown-content">
                  <div class="internal" style="width: 200px;">
                    <p class="head1">Business Registration</p>
                    
                        <a href="{{asset('privatelimitedcompany') }}">Private Limited Company</a>
                        <a href="{{asset('llp') }}">Limited Liability Partnership</a>
                        <a href="{{asset('onepersoncompany') }}">One Person Company</a>
                        <a href="{{asset('Nidhi') }}">Nidhi Company</a>
                        <a href="{{asset('producer') }}">Producer Company</a>
                        <a href="{{asset('partnership') }}">Partnership Firm</a>
                        <a href="{{asset('proprietorship') }}">Sole Proprietorship</a>
                    </div>
                     

                  <div class="internal1" style="width: 200px;">
                    <p class="head1">Government Registration</p>
                           
                           <a href="{{asset('shopANDestablishment') }}">Shop & Establishment Registration</a>
                        
                         <a href="{{asset('importer') }}">IEC(Import/Export Code)</a>
                         <a href="{{asset('msme') }}">MSME/SSI Registration</a>
                          <a href="{{asset('iso') }}">ISO Certification</a>
                         
                         <a href="{{asset('trade') }}">Trade License</a>
                  </div>

              </div>
           </li>

            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">TAXS & Compliances</a>
                  <div class="dropdown-content">
                                          
                     <div class="internal" style="width: 200px;">
                       <p class="head1">Tax Registration</p>
                     
                         <a href="{{asset('tax') }}"> Goods & Services Tax Registration (GST)</a>
                         <a href="{{asset('GSTReturn')}}">GST Return Filing</a>
                         <a href="{{asset('professionaltax') }}">Professional Tax Registration</a>
                         <a href="{{asset('tds') }}">TDS Return</a>
                         <a href="{{asset('pf') }}">EPF Registration</a>
                         <a href="{{asset('esi') }}">ESI Registration</a>
                         <a href="{{asset('itr') }}">Income Tax Return</a>
                         </div>
                         
                    
                   <div class="internal1" style="width: 200px;">
                    <p class="head1">Website Policies</p>
                    <a href="{{asset('web-and-app') }}"> Terms of Service and Privacy Policy, Disclaimer</a>
                     </div>
                     </div>

               
             </li>




            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn" >Trademark and IP</a>
                    <div class="dropdown-content">
                         <div class="internal" style="width: 200px;">
                       <p class="head1">Trademark</p>
                        <a href="{{asset('trademark') }}">Trademark Registration</a>
                        <br>
                        
                        <p class="head1">License</p> 
                          <a href="{{asset('fssai') }}">FSSAI(Food License)</a>  
                          <a href="{{asset('digitalsignature') }}">Digital Signature Certificate</a>
                         <a href="{{asset('otherservice') }}">OSP License</a>                
                    </div>

                    <div class="internal1" style="width:200px;">
                      <p class="head1">Copyright</p>
                      <a href="{{asset('copyright') }}">Copyright Registration</a>
                    </div>

                   </div>
              </li>

            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">FUNDRAISING</a>
                  <div class="dropdown-content">
                    <div class="internal" style="width: 200px;">
                    <p class="head1">Busssiness Funding</p>
                    <a href="{{asset('businessplan') }}"> Business Plan</a>
                    <a href="{{asset('businessloan') }}">Businessloan</a>
                   <a href="{{asset('fundrasing') }}"> Fundraising</a>
                    </div>

                    
                    <div class="internal1" style="width: 200px;">
                    <p class="head1">Patent</p>
                    
                    <a href="{{asset('patent') }}"> Patent</a>
                    </div>




            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Property Matters</a>
                  <div class="dropdown-content">
                   
                    

                     <div class="internal2" style="width: 200px;">
                        <p class="head1">Property</p>
                    <a href="{{asset('propertyverify') }}"> Property Title Verification</a>
                    <a href="{{asset('propertyregistration') }}">Property Registration</a>
                    <a href="{{asset('succession') }}">Succession Certificate</a>
                    <a href="{{asset('legalheir') }}">Legal Heir Certificate</a>
                    <a href="{{asset('residential') }}">Residential </a>
                     <a href="{{asset('relinquish') }}">Relinquishment </a>
                    </div>

                    
                    <div class="internal1" style="width: 200px;">
                    <p class="head1">Legal</p>
                    
                    <a href="{{asset('legalnotice') }}"> legalnotice</a>
                    </div>


                  </div>
            </li>


            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">NGO</a>
              <div class="dropdown-content">
                    <div class="internal" style="width: 200px;">
                    <p class="head1">Registration</p>
                    <a href="{{asset('NGO') }}"> NGO</a>
                    <ul style="list-style:square;">
                    <li> Section 8</li>
                    <li> Trust Registration</li>
                    <li>sSociety Registration</li>
                    </ul>
                    </div>

                   <div class="internal1" style="width: 200px;">
                    <p class="head1">Maintain</p>
                     <a href="{{ asset('accounts') }}">Accounts</a>

                   </div>
              </div>


              </li>
             <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn"> Personal</a>
              <div class="dropdown-content">
                    <div class="internal" style="width: 200px;">
                    <p class="head1">Personal</p>
                    <a href="{{asset('Caste') }}"> Caste Certificate </a>
                    <a href="{{asset('public') }}">Public Interest Litigation </a>
                    <a href="{{asset('caveat') }}">Caveat Petition</a>
                    <a href="{{asset('moneyrecovery') }}">Money Recovery</a>
                    <a href="{{asset('complaine') }}">Consumer Complaint </a>
                    <a href="{{asset('conjugal') }}">Conjugal </a>
                    </div>

                   <div class="internal1" style="width: 200px;">
                    <p class="head1">Name Change and Other Corrections</p>
                    
                     <a href="{{asset('namechange') }}">Name Change</a>
                     
                     <a href="{{asset('genderchange') }}">Gender Change</a>
                     <a href="{{asset('will') }}">Will Probate</a>

                   </div>
                </div>   
              </li>
            
              <li class="registration"><a href="{{asset('register') }}" id="signUp" style="color:white;">Sign up</a></li>
            <li class="login"><a href="{{asset('login') }}" id="signIn" style="color:white;">Sign in</a></li>
         
        </ul>
        </div>
</nav>
      </div>



 <div id="mobileView">
  
 <a href="/" style="float: right;font-size: 1.8em;display:inline-block;font-weight:bolder;color:darkblue;line-height:1;"> 
        savetaxs   <!-- Your logo goes here -->
    </a>
  
      
  <input type="checkbox" id="top-nav" />
        <span class="hamburgerspan"></span>
        <span class="hamburgerspan"></span>
        <span class="hamburgerspan"></span>
          <div id="menu-cont-1">
              <ul class="menu-ul">
              <li class="nav-item sub-menu"> STARTUP
                       <input type="checkbox" id="menu-1"/>
                          <div id="menu-cont-2">
                             <ul class="menu-ul">
                               <label class="menu-label" for="menu-1">STARTUP</label>
                               <li class="nav-item">Business Registration
                                       <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">Business Registration</label>
                                                <li class="nav-item"> <a href="{{asset('privatelimitedcompany') }}">Private Limited Company</a></li>
                                                <li class="nav-item"> <a href="{{asset('llp') }}">Limited Liability Partnership</a></li>
                                                <li class="nav-item"><a href="{{asset('onepersoncompany') }}">One Person Company</a></li>
                                                <li class="nav-item"><a href="{{asset('Nidhi') }}">Nidhi Company</a></li>
                                                <li class="nav-item"><a href="{{asset('producer') }}">Producer Company</a></li>
                                                <li class="nav-item"><a href="{{asset('partnership') }}">Partnership Firm</a></li>
                                                <li class="nav-item"><a href="{{asset('proprietorship') }}">Sole Proprietorship</a></li>
                                              </ul>
                                          </div>
                                </li>          

                               <li class="nav-item">Government Registration
                                      <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">Government Registration</label>
                                                <li class="nav-item"><a href="{{asset('shopANDestablishment') }}">Shop & Establishment Registration</a></li>
                                                <li class="nav-item"><a href="{{asset('importer') }}">IEC(Import/Export Code)</a></li>
                                                <li class="nav-item"><a href="{{asset('msme') }}">MSME/SSI Registration</a></li>
                                                <li class="nav-item"><a href="{{asset('iso') }}">ISO Certification</a></li>
                                                <li class="nav-item"><a href="{{asset('trade') }}">Trade License</a></li>
                                              </ul>
                                          </div>
                                 </li>
                             </ul>
                          </div>
                 
              </li>  
                 <li class="nav-item sub-menu"> TAXS & Compliances
                       <input type="checkbox" id="menu-1"/>
                          <div id="menu-cont-2">
                             <ul class="menu-ul">
                               <label class="menu-label" for="menu-1">TAXS & Compliances</label>
                               <li class="nav-item">Tax Registration
                                       <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">Tax Registration</label>
                                                <li class="nav-item"> <a href="{{asset('tax') }}"> Goods & Services Tax Registration (GST)</a></li>
                                                <li class="nav-item"> <a href="{{asset('GSTReturn')}}">GST Return Filing</a></li>
                                                <li class="nav-item"><a href="{{asset('professionaltax') }}">Professional Tax Registration</a></li>
                                                <li class="nav-item"><a href="{{asset('tds') }}">TDS Return</a></li>
                                                <li class="nav-item"><a href="{{asset('pf') }}">EPF Registration</a></li>
                                                <li class="nav-item"><a href="{{asset('esi') }}">ESI Registration</a></li>
                                                <li class="nav-item"><a href="{{asset('itr') }}">Income Tax Return</a></li>
                                              </ul>
                                          </div>
                                </li>          

                               <li class="nav-item">Website Policies
                                      <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">Website Policies</label>
                                                <li class="nav-item"><a href="{{asset('web-and-app') }}"> Terms of Service and Privacy Policy, Disclaimer</a></li>
                                              </ul>
                                          </div>
                               </li>
                             </ul>
                          </div>
                 </li>
                 
                 <li class="nav-item sub-menu">Trademark and IP
                       <input type="checkbox" id="menu-1"/>
                          <div id="menu-cont-2">
                             <ul class="menu-ul">
                               <label class="menu-label" for="menu-1">Trademark and IP</label>
                               <li class="nav-item">Trademark
                                       <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">Trademark</label>
                                                <li class="nav-item"> <a href="{{asset('trademark') }}">Trademark Registration</a></li>
                                                
                                              </ul>
                                          </div>
                                </li>          
                                
                                <li class="nav-item">License
                                       <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">License</label>
                                                <li class="nav-item"> <a href="{{asset('fssai') }}">FSSAI(Food License)</a></li>
                                                <li class="nav-item"> <a href="{{asset('digitalsignature') }}">Digital Signature Certificate</a></li>
                                                <li class="nav-item"><a href="{{asset('otherservice') }}">OSP License</a></li>
                                                </ul>
                                          </div>
                                 </li>
                               <li class="nav-item">Copyright
                                      <input type="checkbox" id="menu-2"/>
                                          <div id="menu-cont-3">
                                              <ul class="menu-ul">
                                                <label class="menu-label" for="menu-2">Copyright</label>
                                                <li class="nav-item"><a href="{{asset('copyright') }}">Copyright Registration</a></li>
                                              
                                              </ul>
                                          </div>
                                 </li>

                             </ul>
                          </div>
              </li>  
                 
              </ul>
          </div>
  
   

</div>
  
</header>


    <main>
            @yield('content')
    </main>



    <footer style="display:inline-flex;">
        
    <ul>
            <li class="h">Popular Services</li>
            <li>Private limited Company Registration</li>
            <li>One Person Company Registration</li>
            <li>Limited Labiality Partnership Registration</li>
            <li>Partnership Frim</li>
            <li>Sole Proprietorship Firm Registration</li>
        </ul>
        <ul>
            <li class="h">Company</li>
            <li><a href="/about" class="foota">About Us</a></li>
            <li><a href="/footerBlog" class="foota" >Blog</a></li>
            <li><a class="foota" >Partner with us</a></li>
            <li><a href="/contact" class="foota" >Contact Us</a></li>

            <li><a class="foota">Sitemap</a></li>
        </ul>
        <ul>
            <li class="h">Terms and Policies</li>
            <li>Privacy Policy</li>
            <li>Satisfaction Gauarantees</li>
        </ul>

   </footer>
    <div class="copy">
        Copyright 2020 savetaxs.com
    </div>

    



</body>
</html>
