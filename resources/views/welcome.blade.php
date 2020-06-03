
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     
        <!--script bootsrcipt-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
           
           <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    @extends('layouts.default')
    @section('content')
     <div class="main">
        <div class="container">
          <div class="row">
          <div class="col-lg-6" id="hello">
            <div class="content">
                <p class="title">Providing 1 stop solution for all the Startup & Legal Compliances</p>
                <p class="subtitle">
                    Savetaxs provides you all kind of solution starting from company registration, GST Resitration, Tax Filling, Trademark, Registration and much more..
                </p>
                
                <!--for search -->
                    <div class="group">
                        <input type="text" id="myInput" onkeyup="mySearch()" placeholder="Search anything..." onfocus=" return myDisplay();">
                         <button type="submit" onclick="clickSearch()"><i class="fa fa-search" aria-hidden="true"></i></button>
                     </div>    
                          <ul id="myUL" style="display:none;">
                              <li><a href="/privatelimcom">Private Limited Company</a></li>
                              <li><a href="/llp">Limited Liability Partnership</a></li>
                               <li><a href="/oneperson">One Person Company</a></li>
                              <li><a href="/nidhicom">Nidhi Company</a></li>
                              <li><a href="/producercom">Producer Company</a></li>
                              <li><a href="/partnership">Partnership Firm</a></li>
                              <li><a href="/propertoship">Sole Proprietorship</a></li>
                              <li><a href="/Shop-And-Establishment">Shop & Establishment Registration</a></li>
                              <li><a href="/IMPORTERCODE">IEC(Import/Export Code)</a></li>
                              <li><a href="/SSI-MSME">MSME/SSI Registration</a></li>
                              <li><a href="/ISO">ISO Certification</a>
                              <li><a href="/Trade_License">Trade License</a></li>
                              <li><a href="/tax"> Goods & Services Tax Registration (GST)</a></li>
                              <li><a href="/GSTReturn">GST Return Filing</a></li>
                              <li><a href="/professnaltax">Professional Tax Registration</a></li>
                              <li><a href="/tds">TDS Return</a></li>
                              <li><a href="/pf">EPF Registration</a></li>
                              <li><a href="/esi">ESI Registration</a></li>
                              <li><a href="/itr">Income Tax Return</a></li>
                              <li><a href="/Web-and-App"> Terms of Service and Privacy Policy, Disclaimer</a></li>
                              <li><a href="/Trademark">Trademark Registration</a></li>
                              <li><a href="/fssai">FSSAI(Food License)</a>  </li>
                              <li><a href="/digisignatur">Digital Signature Certificate</a></li>
                              <li><a href="/otherservice">OSP License</a>  </li>
                              <li><a href="/Copyright">Copyright Registration</a></li>
                              <li><a href="/businessplan"> Business Plan</a></li>
                              <li> <a href="/businessloan">Businessloan</a></li>
                              <li><a href="/businessfund"> Fundraising</a></li>
                              <li><a href="/patent"> Patent</a></li>
                              <li><a href="/PropertyVerify"> Property Title Verification</a></li>
                              <li><a href="/PropertyRegistration">Property Registration</a></li>
                              <li><a href="/Succession">Succession Certificate</a></li>
                              <li><a href="/Legal_Heir">Legal Heir Certificate</a></li>
                              <li><a href="/residential">Residential </a></li>
                              <li><a href="/Relinquish">Relinquishment </a></li>
                              <li><a href="/legalnotic"> legalnotice</a></li>
                              <li><a href="/NGO"> NGO</a></li>
                              <li><a href="{{ asset('/accounts') }}">accounts</a></li>
                              <li><a href="/Caste"> Caste Certificate </a></li>
                              <li><a href="/Public">Public Interest Litigation </a></li>
                              <li><a href="/CaveatPetition">Caveat Petition</a></li>
                              <li><a href="/MoneyRecovery">Money Recovery</a></li>
                              <li><a href="/Complaints">Consumer Complaint </a></li>
                              <li><a href="/Conjugal">Conjugal </a></li>
                              <li> <a href="/NameChange">Name Change</a></li>
                              <li><a href="/GenderChange">Gender Change</a></li>
                              <li><a href="/will">Will Probate</a></li>
                          </ul>

            </div>
            </div>
            <div class="col-lg-6" id="hello10">
            <img id="img1" src="/images/home-img.png" alt="home">
            </div>
        </div>

      </div>  
    </div>

 <script>
   function myDisplay(){
      document.getElementById("myUL").style.display = "block";
      return false;
   }
function mySearch(env) {
    
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function clickSearch(){
       var input = document.getElementById("myInput").value;
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li").childNodes;
        
         a = li.getElementsByTagName("a")[0];
         if(input == a.textContent){
          var path = location.pathname;
          document.getElementById("myUL").style.display = path;
         }

}
</script>

  
    <!-- services -->
    <section class="service">
        <p class="title">Our Services</p>
      <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false" style="width: 100%;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-bottom: 80px;">
      <div class="cards">
           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2999</p>
              <p class="more">Know More</p>
           </div>

           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2999</p>
              <p class="more">Know More</p>
           </div>

           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2999</p>
              <p class="more">Know More</p>
           </div>
       </div>
    </div>
    <div class="carousel-item" style="margin-bottom: 80px;">
      <div class="cards">
           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2999</p>
              <p class="more">Know More</p>
           </div>

           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2979</p>
              <p class="more">Know More</p>
           </div>

           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2989</p>
              <p class="more">Know More</p>
           </div>
       </div>
    </div>
    <div class="carousel-item" style="margin-bottom: 80px;">
      <div class="cards">
           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2799</p>
              <p class="more">Know More</p>
           </div>

           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2999</p>
              <p class="more">Know More</p>
           </div>

           <div class="card">
              <p class="head">Private Limited company Registration</p>
              <p class="price">&#x20b9 2999</p>
              <p class="more">Know More</p>
           </div>
       </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

 </section>
    <!-- consult -->
    <section class="consult">
      
    
        <form action="">
            <input type="text" placeholder="Full Name">
            <input type="text" placeholder="Phone Number">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="City">
            <button>Submit</button>
        </form></br>
        <span>
        <div class="side">
            <p class="title">Get Free Consultation</p>
            <p>Get a call from our expert and get a free Consultation on any of your requirements</p>
        </div>
</span>

    </section>

    <section class="business">
        <p class="title">Business Serverd</p>
        <div class="badges">
            <div class="badge">
                <div class="badgeimg one"></div>
                <p class="count">4,000+</p>
                <p class="sub">Clients Served</p>
            </div>
            <div class="badge">
                <div class="badgeimg two"></div>
                <p class="count">150+</p>
                <p class="sub">Happy Customers</p>
            </div>
            <div class="badge">
                <div class="badgeimg three"></div>
                <p class="count">7,000+</p>
                <p class="sub">Partners</p>
            </div>
        </div>
    </section>

    <section class="choose">
        <div class="content">
            <p class="title">Why choose <i><b>savetaxs</b></i>?</p>
            <ul list-style-type="disc">
                <li>India's <b>best startup's legal service provider</b> company.</li>
                <li><b>Lowest pricing</b> through autmation and technology.</li>
                <li><b>Startup friendly team</b> which gives you service beyond satisfaction</li>
                <li><b>Superb packages</b> which you cant find anywhere.</li>
                <li>After service <b>Lifetime support policy</b> as premium client</li>
                <li><b>Confidential documents policy</b> during the process</li>
                <li><b>Highest credibilty partners</b> from the induastry.</li>
            </ul>
        </div>
    </section>

    <section class="trust">
        <div class="content1">
            <p class="title">Trusted by the best</p> 
        </div>
  
    <div class="container-fluid">

    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel" >

     
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">

            <div class="col-md-4 clearfix d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/ola.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-4 clearfix d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/fresh-menu-png-logo.png"
                  alt="Card image cap">
               
              </div>
            </div>

            <div class="col-md-4 clearfix d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/paytm.png"
                  alt="Card image cap">
                
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 clearfix  d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/fresh-menu-png-logo.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-4 clearfix  d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/paytm.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-4 clearfix  d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/ola.png"
                  alt="Card image cap">
                
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 clearfix  d-md-block">
              <div class="card1">
                <img class="card-img-top" src="/images/paytm.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-4 clearfix  d-md-block">
              <div class="card1 mb-2">
                <img class="card-img-top" src="/images/ola.png"
                  alt="Card image cap">
                
              </div>
            </div>

            <div class="col-md-4 clearfix  d-md-block">
              <div class="card1 mb-2">
                <img class="card-img-top" src="/images/fresh-menu-png-logo.png"
                  alt="Card image cap">
                
            </div>
          </div>

        </div>
        <!--/.Third slide-->
       
      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->
  </div>
   <!--Controls-->
   <div class="controls-down">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->
    </section>

  

    <section class="contact">
        <div class="content">
            <p class="title">Contact us</p>
            <div class="group">
                <p class="head">Call us</p>
                <p class="sub">+91-7515795165, +91-8624562452</p>
            </div>
            <div class="group">
                <p class="head">Email us</p>
                <p class="sub">support@savetaxs.com</p>
            </div>
            <div class="group">
                <p class="head">Connect with us</p>
                <ul class="social">
                    <li><img src="images/Contact/fb.png" alt="" srcset=""></li>
                    <li><img src="images/Contact/in.png" alt=""></li>
                    <li><img src="images/Contact/insta.png" alt="" srcset=""></li>
                    <li><img src="images/Contact/tweet.png" alt="" srcset=""></li>
                    <li><img src="/images/Contact/you.png" alt="" srcset=""></li>
                </ul>
            </div>
        </div>
    </section>

 
   </div>
    
@endsection
