<?php include 'modHeader.php';?>

        <!---------------------------------- SlideShow -------------------------------->
        <div id="sliderContainer">

        <div id="item1" class="slide">
            <a href="services.php">
                <img class="sliderImg" src="./img/pf_first.jpg">
<!--                <div class="pageCoverHeading" id="sliderTextL1">Services we OFFER</div>-->
            </a>
        </div>
        <div id="item2" class="slide">
            <a href="services.php">
                <img class="sliderImg" src="./img/ServicesPCP.png">
                <div class="pageCoverHeading" id="sliderTextL1">Services we OFFER</div>
            </a>
        </div>
        <div id="item3" class="slide">
            <a href="automation.php">
                <img class="sliderImg" src="./img/AutomationPCP.jpg">
                <div class="pageCoverHeading" id="sliderTextL1">Automation that ENABLES</div>
<!--            <div class="inSlideText" id="sliderTextL2">Lorem ipsum dolor sit amet</div>-->
<!--            <div class="inSlideText" id="sliderTextL3">Integer mauris elit, malesuada vitae convallis et, tempus at nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>-->
            </a>
        </div>
        <div id="item4" class="slide">
            <a href="coverage.php">
                <img class="sliderImg" src="./img/CoveragePCP.png">
                <div class="pageCoverHeading" id="sliderTextL1">Coverage that WORKS</div>
            </a>
        </div>
<!--        <div id="item4" class="slide">-->
<!--            <img class="sliderImg" src="./img/PFs4.png">-->
<!--        </div>-->
<!--        <div id="item5" class="slide">-->
<!--            <img class="sliderImg" src="./img/PFs5.png">-->
<!--        </div>-->
    <div id="sliderDotsPanel">
        <span class="sliderDot" onclick="activeSlide=1;continuousSlideShow();"></span>
        <span class="sliderDot" onclick="activeSlide=2;continuousSlideShow();"></span>
        <span class="sliderDot" onclick="activeSlide=3;continuousSlideShow();"></span>
        <span class="sliderDot" onclick="activeSlide=4;continuousSlideShow();"></span>
<!--        <span class="sliderDot" onclick="activeSlide=5;continuousSlideShow();"></span>-->
    </div>
    <span id="sliderPrevBtn" onclick="activeSlide--;continuousSlideShow();">&#10094;</span>
    <span id="sliderNextBtn" onclick="activeSlide++;continuousSlideShow();">&#10095;</span>
</div>

        <!------------------------------------- PromoCards -->
<!--        <div class="promo-cards">-->
<!--            <a href="./promotion.html"><img class="promo" id="promo1" src="./img/promo1.jpg" onclick="window.alert('Slider> Height:'+document.getElementById('sliderImg1').offsetHeight+' X Width:'+document.getElementById('sliderImg1').offsetWidth+'\nPromo> Height:'+document.getElementById('promo1').offsetHeight+' X Width:'+document.getElementById('promo1').offsetWidth);"></a>-->
<!--            <a href="./promotion.html"><img class="promo" src="./img/promo2.jpg"></a>-->
<!--            <a href="./promotion.html"><img class="promo" src="./img/promo5.jpg"></a>-->
<!--            <a href="./promotion.html"><img class="promo" src="./img/promo3.jpg"></a>-->
<!--        </div>-->

<?php include 'modFooter.php';?>