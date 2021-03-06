<?php include 'modHeader.php';?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<div class="fluid-container">
    <div class="row" style="margin-top: -3%;">

    <div class="col-12 col-sm-12 col-md-8 col-xs-12"  id="sliderContainer">
            <div id="item1" class="slide">
                <a href="news.php"> <img class="sliderImg responsive_img" src="./img/3yrspf.png">
                    <div class="" id=""> <span class="thinText"></span></div>
                </a>
            </div>
            <div id="item2" class="slide">
                <a href="services.php"> <img class="sliderImg" src="./img/ServicesPCP.png">
                    <div class="pageCoverHeading" id="sliderTextL1">Services <span class="thinText">we</span> OFFER</div>
                </a>
            </div>
            <div id="item3" class="slide">
                <a href="automation.php"> <img class="sliderImg" src="./img/AutomationPCP.jpg">
                    <div class="pageCoverHeading" id="sliderTextL1">Automation <span class="thinText">that</span> ENABLES</div>
                </a>
            </div>
            <div id="item4" class="slide">
                <a href="coverage.php"> <img class="sliderImg" src="./img/CoveragePCP.png">
                    <div class="pageCoverHeading" id="sliderTextL1">Coverage <span class="thinText">that</span> WORKS</div>
                </a>
            </div>
        <div id="sliderDotsPanel">
             <span class="sliderDot" onclick="activeSlide=1;continuousSlideShow();"></span>
              <span class="sliderDot" onclick="activeSlide=2;continuousSlideShow();"></span> 
              <span class="sliderDot" onclick="activeSlide=3;continuousSlideShow();"></span> 
              <span class="sliderDot" onclick="activeSlide=4;continuousSlideShow();"></span>
            </div> 
            <span id="sliderPrevBtn" onclick="activeSlide--;continuousSlideShow();">&#10094;</span> 
            <span id="sliderNextBtn" onclick="activeSlide++;continuousSlideShow();">&#10095;</span>
        </div>


        <div class="col-12 col-md-4 col-sm-12 col-xs-12" id="navDiv" style="padding-right: 0px;">
            <div class="gotoLogin " id="navDiv1"><button type="button" class="btn loginBtn dropBtn" onclick="showWingsLogin()">Login To Wings</button></div>
            <div id="navDiv2"><button type="button" class="btn  trackBtn">Track Order</button></div>
        </div>
    </div>
</div>

<div id="windgsModalBackdrop" onclick="dismissWingsModal()"></div>
    <div class="dropdownContainer" id="wingsDropdown">
        <div class="rightPanel"> 
        <div class="container h-100">
	    	<div class="d-flex justify-content-center h-100">
			 <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="./img/pflogoTrans.png" class="brand_logo" alt="Logo">
                </div>
            </div>

            <div class="d-flex justify-content-center form_container">
                <form action="http://paperflybd.com/userlogin" id="frmSignin" name="frmSignin" method="post">
                
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" placeholder="Login ID" id="wingsID"  class="form-control input_user" name="username" required autofocus>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" placeholder="Password" class="form-control input_pass" id="wingsPass" name="password" required>
                            </div>
                            <div class="form-group">
                            <div class="d-flex justify-content-center mt-3 login_container">
                            <input class="btn login_btn" type="submit" id="wingsLoginButton" name="submit" onclick="submitWingsLogin()" value="Login">
                            </div>
                            </div>
                    <button type="button" id="wingsCancelButton" onclick="dismissWingsModal()">Cancel</button>
                </form>
        </div>
        </div>
		</div>
	</div>

     </div>
</div> 


 <div class="fluid-container">
    <div class="row">
    <div class="promo-cards">
            <img class="promo" src="./img/8.jpeg">
             <img class="promo" src="./img/7.jpg">
              <img class="promo" src="./img/6.jpg">
               <img class="promo" src="./img/3.jpg"> 
               <img class="promo" src="./img/4.jpg">
            </div> 
    </div>
</div> 

<!-- <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="pic-5">
            <img class="img-fluid " src="img/pf3.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="pic-5">
            <h4 class="display-4">Be With The Best!</h4>
            <p style="text-align:center;">What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            , when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

 <!--  <div class="conatiner parallax bg-parallax">  
      <div class="row">
            <div class="container" style="background-color: rgba(255,255,255,.5)!important;height: 400px;    max-width: 100% !important;">
           

                
                <div class="col-12 col-md-4 col-sm-12 col-xs-12 item-right" data-aos="fade-right"> <p>64 districts door to door delivery service with our own employees and own fleet.
                </p>  </div>

                <div class="col-12 col-md-4 col-sm-12 col-xs-12 item-left" data-aos="fade-left"> <p>64 districts cash on delivery.
                </p> </div>

                <div class="col-12 col-md-4 col-sm-12 col-xs-12 item-right" data-aos="fade-right"> <p>100% on time payment. Twice per week invoice and payment transfer.
                </p></div>

                <div class="col-12 col-md-4 col-sm-12 col-xs-12 item-left" data-aos="fade-left"> <p>One stop solution for order management, tracking, invoicing and payment.
                </p>  </div>

                <div class="col-12 col-md-4 col-sm-12 col-xs-12 item-right" data-aos="fade-right"><p>Dedicated point of contact for all updates.</p></div>

                <script src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>

                

                <script  src="js/onscrollanimation.js"></script>
                
            </div>
      </div>
</div>
     


<div class="conatiner bg-parallax-mob">  
     
    <div class="row">
        
         </div class="container" style="background-color: rgba(255,255,255,.5)!important;height: 410px;max-width: 100% !important;">

            <blockquote>
            <li><img src="./img/PFfavicon32.png">64 districts door to door delivery service with our own employees and own fleet.</li>
            <li><img src="./img/PFfavicon32.png">64 districts cash on delivery.</li>
            <li><img src="./img/PFfavicon32.png">100% on time payment. Twice per week invoice and payment transfer.</li>
            <li><img src="./img/PFfavicon32.png">One stop solution for order management, tracking, invoicing and payment.</li>
            <li><img src="./img/PFfavicon32.png">Dedicated point of contact for all updates.</li>
            </blockquote>
               
            </div>
      </div>
</div>
      -->

    <div class="hScrollerHolder">
        <p class="hScrollerHeading">Delivering Happiness For</p>
        <ul id="scroller">
            <li><a target="_blank" href="https://www.daraz.com.bd/"><img src="img/Logo%20Daraz.png"></a></li>
            <li><a target="_blank" href="https://ajkerdeal.com/"><img src="img/Logo%20AjkerDeal.jpg" style="height: 150px"></a></li>
            <li><a target="_blank" href="https://shoparu.com/"><img src="img/Logo%20Shoparu.com.jpg"></a></li>
            <li><a target="_blank" href="https://www.bagdoom.com/"><img src="img/Logo%20Bagdoom.com.png"></a></li>
            <li><a target="_blank" href="https://www.facebook.com/kikshadotcom/"><img src="img/Logo%20Kiksha.jpg"></a></li>
            <li><a target="_blank" href="https://www.rokomari.com/book"><img src="img/Logo%20Rokomari.png"></a></li>
            <li><a target="_blank" href="http://www.aarong.com/"><img src="img/Logo%20Aarong.gif"></a></li>
            <li><a target="_blank" href="https://www.banglashoppers.com/"><img src="img/Logo%20BanglaShoppers.com.jpg"></a></li>
            <li><a target="_blank" href="https://bikroy.com/en"><img src="img/Logo%20Bikroy.com.jpg"></a></li>
            <li><a target="_blank" href="https://catseye.com.bd/"><img src="img/Logo%20CatsEye.jpg" style="height: 150px; width: auto;"></a></li>
            <li><a target="_blank" href="https://www.dancake.dk/Page/655.html"><img src="img/Logo%20DanCake.jpg"></a></li>
            <li><a target="_blank" href="https://ecstasybd.com/"><img src="img/Logo%20Ecstacy.png"></a></li>
            <li><a target="_blank" href="http://estore.fdl.com.bd/"><img src="img/Logo%20Fdl%20Samsung.png"></a></li>
            <li><a target="_blank" href="https://www.grameenphone.com/"><img src="img/Logo%20grameenphone.jpg" style="height: 70px"></a></li>
            <li><a target="_blank" href="http://www.monno.com/public/"><img src="img/Logo%20Monno.png"></a></li>
            <li><a target="_blank" href="http://www.rohto.com.bd/"><img src="img/Logo%20Rotho.gif"></a></li>
        </ul>
    </div> 



    
    <?php
include 'modFooter.php';
 ?>