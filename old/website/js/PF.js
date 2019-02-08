//////////////////////////////////////ContSS
var pathArray = window.location.pathname.split( '/' );
var secondLevelLocation = pathArray[0];
var slides, activeSlide, currentSlide, autoSlideTimer;
var homePage = pathArray[pathArray.length-1]===""||pathArray[pathArray.length-1]==="index.php";
if(homePage) {
    window.onload = function() {
        setSliderSize();
        slides = document.querySelectorAll(".slide");
        activeSlide = 1;
        currentSlide = 1;
        // setTrackingButton();
        continuousSlideShow(true);
    }
}

window.onresize = setSliderSize;

function setSliderSize() {
    if(homePage){document.getElementById("sliderContainer").style.height = document.getElementById("item1").offsetHeight;}
};

function setTrackingButton() {
    document.getElementById("trackingFloatingIcon").style.top = "10%";
    // document.getElementById("trackingFloatingIcon").style.backgroundColor ="orangered";
    document.getElementById("trackingFloatingIcon").style.zIndex = 10;
}

function continuousSlideShow(auto) {
    var prevSlide, nextSlide;
    if(activeSlide>slides.length) {
        activeSlide=1;
        prevSlide = slides.length;
    } else if (activeSlide<1) {
        activeSlide=slides.length;
        nextSlide=1;
    }
    prevSlide=(activeSlide===1)?slides.length:activeSlide-1;
    nextSlide=(activeSlide===slides.length)?1:activeSlide+1;
    currentSlide-=activeSlide;
    slides[activeSlide-1].style.zIndex = 4;
    slides[prevSlide-1].style.zIndex = (currentSlide<0 && currentSlide>-4)?3:1;
    slides[nextSlide-1].style.zIndex = (currentSlide<0 && currentSlide>-4 || currentSlide===4)?1:3;
    for (i=0;i<slides.length;i++){
        if (i!==prevSlide-1 && i!==activeSlide-1 && i!==nextSlide-1){
            slides[i].style.zIndex--;
        }
    }
    slides[nextSlide-1].classList.remove("slidingSlide","fadingSlide");
    slides[activeSlide-1].classList.remove("slidingSlide","fadingSlide");
    slides[activeSlide-1].classList.add("slidingSlide");
    slides[prevSlide-1].classList.add("fadingSlide");
    currentSlide=activeSlide;
    if(auto) {activeSlide++;autoSlideTimer = setTimeout(continuousSlideShow.bind(null,auto), 5000);}
    else {clearTimeout(autoSlideTimer);}
}

//////////////////////////////////////floatingButtons

function trackingButtonToModal() {
    document.getElementById("modalBackDrop").style.display = "block";
    document.getElementById("trackingFloatingIcon").classList.add("trackingButtonToModal");
    document.getElementById("trackingFloatingIcon").style.top = "30%";
    setTimeout(function(){document.getElementById("trackingModalContent").style.display = "block";},500)
}
function trackingModalToButton(e) {
    var evt = e ? e:window.event;
    document.getElementById('modalBackDrop').style.display = "none";
    document.getElementById("trackingModalContent").style.display = "none";
    document.getElementById("trackingFloatingIcon").classList.remove("trackingButtonToModal");
    if (homePage) {
        document.getElementById("trackingFloatingIcon").style.top = "10%";
    } else {
        document.getElementById("trackingFloatingIcon").style.top = "38%";
    }
    evt.stopPropagation();
}

function coverageButtonToModal() {
    document.getElementById("modalBackDrop").style.display = "block";
    document.getElementById("coverageFloatingIcon").classList.add("coverageButtonToModal");
    document.getElementById("coverageFloatingIcon").style.top = "15%";
    setTimeout(function(){document.getElementById("coverageModalContent").style.display = "block";},500)
}
function coverageModalToButton(e) {
    var evt = e ? e:window.event;
    document.getElementById('modalBackDrop').style.display = "none";
    document.getElementById("coverageModalContent").style.display = "none";
    document.getElementById("coverageFloatingIcon").classList.remove("coverageButtonToModal");
    document.getElementById("coverageFloatingIcon").style.top = "45%";
    evt.stopPropagation();
}

function registerButtonToModal() {
    // document.getElementById("modalBackDrop").style.display = "block";
    document.getElementById("modalBackDrop").style.visibility = "visible";
    document.getElementById("modalBackDrop").style.opacity = 0.8;
    document.getElementById("registerFloatingIcon").classList.add("registerButtonToModal");
    document.getElementById("registerFloatingIcon").style.top = "22%";
    // setTimeout(function(){document.getElementById("registerModalContent").style.display = "block";},500)
    setTimeout(function(){document.getElementById("registerModalContent").style.display = "block";},500)
}
function registerModalToButton(e) {
    var evt = e ? e:window.event;
    // document.getElementById('modalBackDrop').style.display = "none";
    document.getElementById("modalBackDrop").style.opacity = 0;
    document.getElementById("modalBackDrop").style.visibility = "hidden";
    document.getElementById("registerModalContent").style.display = "none";
    document.getElementById("registerFloatingIcon").classList.remove("registerButtonToModal");
    document.getElementById("registerFloatingIcon").style.top = "52%";
    evt.stopPropagation();
}

function modalToButton(e) {
    var evt = e ? e:window.event;
    // document.getElementById('modalBackDrop').style.display = "none";
    document.getElementById("modalBackDrop").style.opacity = 0;
    document.getElementById("modalBackDrop").style.visibility = "hidden";
    var buttonItems = document.getElementsByClassName("modalContent");
    var floatingIcons = document.getElementsByClassName("floatingIcon");
    for (i = 0; i <= buttonItems.length; i++){
        buttonItems[i].style.display = "none";
        floatingIcons[i].classList.remove("registerButtonToModal");
    }
    document.getElementById("registerModalContent").style.display = "none";
    document.getElementById("registerFloatingIcon").classList.remove("registerButtonToModal");
    document.getElementById("registerFloatingIcon").style.top = "52%";
    evt.stopPropagation();
}

//////////////////////////////////////smoothScroll
// var scrlTo=0,scrlTimer=null, scrlSpd=30;
//
// function smoothScroll(el) {
//     // (scrlTo>=document.getElementById(el).offsetTop)?
//     //     (clearTimeout(scrlTimer),scrlTo=0):
//     //     (scrlTo+=(document.getElementById(el).offsetTop-scrlTo<30)?
//     //         document.getElementById(el).offsetTop-scrlTo:
//     //             30,
//     //             scrlTimer = setTimeout(smoothScroll.bind(null,el),1)
//     //     );
//     // scrlTo+=(scrlTo>document.getElementById(el).offsetTop*.9)?(scrlSpd<1)?1:scrlSpd--:scrlSpd;
//     // scrlTo+=15;
//     // var currentScrollVerticalPosition = window.pageYOffset;
//     console.log("Current Position:"+window.pageYOffset);
//     console.log("Destination Position:"+document.getElementById(el).offsetTop);
//     console.log("Speed: "+scrlSpd);
//     console.log("Step: "+scrlTo);
//     if (window.pageYOffset < document.getElementById(el).offsetTop) {
//         // console.log("Going Down");
//         window.scroll(0, scrlTo);
//         if (scrlTo >= document.getElementById(el).offsetTop) {
//             // console.log("Stop Going Down");
//             clearTimeout(scrlTimer);
//             scrlTo = 0;
//         }
//         else {
//             if (document.getElementById(el).offsetTop - scrlTo < scrlSpd) {
//                 scrlTo = document.getElementById(el).offsetTop;
//             }
//             else {
//                 // scrlTo = scrlTo + scrlSpd;
//                 scrlTo = window.pageYOffset + scrlSpd;
//             }
//         }
//     } else if (window.pageYOffset > document.getElementById(el).offsetTop) {
//         console.log("Going UP");
//         window.scroll(0, scrlTo);
//         if (scrlTo <= document.getElementById(el).offsetTop) {
//             clearTimeout(scrlTimer);
//             scrlTo = 0;
//         }
//         else {
//             if (scrlTo - document.getElementById(el).offsetTop < scrlSpd) {
//                 scrlTo = document.getElementById(el).offsetTop;
//             }
//             else {
//                 // scrlTo = scrlSpd - scrlTo;
//                 scrlTo = window.pageYOffset - scrlSpd;
//             }
//         }
//     }
//     console.log(scrlTo);
//     // window.scroll(0, scrlTo);
//     if (scrlTo!==0) {
//         scrlTimer = setTimeout(smoothScroll.bind(null,el), 10);
//     }
// }

var scrlStep=0,scrlTimer=null;

function smoothScroll(el) {
    // (scrlStep>=document.getElementById(el).offsetTop)?(clearTimeout(scrlTimer),scrlStep=0):(scrlStep+=(document.getElementById(el).offsetTop-scrlStep<30)?document.getElementById(el).offsetTop-scrlStep:30,scrlTimer = setTimeout(smoothScroll.bind(null,el),1));
    // scrlStep+=(scrlStep>document.getElementById(el).offsetTop*.9)?(scrlSpd<1)?1:scrlSpd--:scrlSpd;
    // scrlStep+=15;
    // var currentScrollVerticalPosition = window.pageYOffset;
    console.log("Current Position:"+window.pageYOffset);
    console.log("Current Position:"+document.getElementById(el).offsetTop);
    if (window.pageYOffset < document.getElementById(el).offsetTop) {
        console.log("Going Down");
        window.scroll(0, scrlStep);
        if (scrlStep >= document.getElementById(el).offsetTop) {
            console.log("Stop Going Down");
            clearTimeout(scrlTimer);
            // scrlStep = 0;
        }
        else {
            if (document.getElementById(el).offsetTop - scrlStep < scrlStep) {
                scrlStep = document.getElementById(el).offsetTop;
            }
            else {
                scrlStep = scrlStep + 30;
            }
        }
    } else {
        console.log("Going UP");
        window.scroll(0, scrlStep);
        if (scrlStep >= document.getElementById(el).offsetTop) {
            clearTimeout(scrlTimer);
            scrlStep = 0;
        }
        else {
            if (scrlStep - document.getElementById(el).offsetTop < scrlStep) {
                scrlStep = scrlStep - document.getElementById(el).offsetTop;
            }
            else {
                scrlStep = scrlStep - 30;
                scrlTimer = setTimeout(smoothScroll.bind(null, el), 1);
            }
        }
    }
    console.log(scrlStep);
    scrlTimer = setTimeout(smoothScroll(el), 1);
}
/*********************************** Navigation Bar */
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function mobMenu() {
/*    var x = document.getElementById("pfTopnav");
    if (x.className === "navlist") {
        x.className += " responsive";
    } else {
        x.className = "navlist";
    }
*/
document.getElementById("pfTopnav").classList.toggle("responsive");
}

function showModal(modalParam) {
    const TRAK_SHOW = 1;
    const MAP_SHOW = 2;
    const PRICE_SHOW = 3;
    
    document.getElementById("modal").style.display = 'block';

    switch (modalParam) {
        case TRAK_SHOW:
            document.getElementById("modalHeaderText").innerHTML = "Tracking Information";
            document.getElementById("modalBody").innerHTML = "<p>Some text in the Modal Body</p><p>Some other text...</p>";
            break;
        case MAP_SHOW:
            document.getElementById("modalHeaderText").innerHTML = "Coverage that Works";
            document.getElementById("modalBody").innerHTML = "<p>Coverage Map & Text</p>";
            break;
        case PRICE_SHOW:
            document.getElementById("modalHeaderText").innerHTML = "Packages & Pricing";
            document.getElementById("modalBody").innerHTML = "<p>Pricing Charts & Map</p>";
            break;
        
    }
}
// /************************************ Slider Block */

// var slideIndex = 0;
// var autoSlideTimer;
// function showSlides() {
//     var i;
//     var slides = document.getElementsByClassName("slide");
//     var dots = document.getElementsByClassName("dot");
//     slideIndex++;
//     if (slideIndex> slides.length) {slideIndex = 1}    
//     for (i = 0; i < dots.length; i++) {
//         dots[i].classList.remove("active");
//     }
//     document.querySelector("#wrapper").style.transform = "translate(" + (1-slideIndex)*20 + "%)";
//     dots[slideIndex-1].classList.toggle("active");
//     autoSlideTimer = setTimeout(showSlides, 2000); // Change image every X seconds
// }

// function plusSlides(n) {
//   manualSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   manualSlides(slideIndex = n);
// }

// function manualSlides(n) {
//   var i;
//   clearTimeout(autoSlideTimer);
//   var slides = document.getElementsByClassName("slide");
//   var dots = document.getElementsByClassName("dot");
//   if (n > slides.length) {slideIndex = 1}    
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < dots.length; i++) {
//       dots[i].classList.remove("active");
//   }
//   document.querySelector("#wrapper").style.transform = "translate(" + (1-slideIndex)*20 + "%)";
//   dots[slideIndex-1].classList.toggle("active");
// }

/************************************* Dropdown Menu */
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function showTrackingLogin() {
    document.getElementById("trackingDropdown").classList.toggle("showTrackingDrop");
}

function showWingsLogin() {
    document.getElementById("windgsModalBackdrop").style.display="block";
    document.getElementById("wingsDropdown").classList.add("showWingsDrop");
}
function submitWingsLogin() {
    document.getElementById("frmSignin").submit();
    dismissWingsModal();
}
function dismissWingsModal(){
    document.getElementById("wingsDropdown").classList.remove("showWingsDrop");
    document.getElementById("windgsModalBackdrop").style.display="none";
}
// function showTrackingLogin() {
//     document.getElementById("trackingDropdown").classList.toggle("showTrackingDrop");
// }

/******************************** ArrowKey Driven Slider Movement ****************************/
//document.onkeydown = function(evt) {
document.addEventListener("keydown", moveSlider);

function moveSlider(evt) {
        evt = evt || window.event;
//        console.log(evt);
        switch (evt.keyCode) {
                case 37:
                activeSlide--;continuousSlideShow();    //plusSlides(-1);
                break;

/*                case 38:
                topArrowPressed(nextUrl);
                break;
*/
                case 39:
                activeSlide++;continuousSlideShow();    //plusSlides(1);
                break;

/*                case 40:
                downArrowPressed(prevUrl);
                break;
*/
        }
}

/******************************* Swipe Driven Slider Movement for Mobile Devices ***********************/

document.addEventListener("touchstart", handleTouchStart, false);        
document.addEventListener("touchmove", handleTouchMove, false);
var xDown = null;                                                        
var yDown = null;                                                        
function handleTouchStart(evt) {                                         
    xDown = evt.touches[0].clientX;                                      
    yDown = evt.touches[0].clientY;                                      
};                                                
function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;
    if(Math.abs( xDiff )+Math.abs( yDiff )>150){ //to deal with to short swipes

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
        if ( xDiff > 0 ) {/* left swipe */ 
            activeSlide++;continuousSlideShow();    //plusSlides(1);
        } else {/* right swipe */
            activeSlide--;continuousSlideShow();    //plusSlides(-1);
        }                       
    } // else {
//        if ( yDiff > 0 ) {/* up swipe */
//            alert('Up!'); 
//        } else { /* down swipe */
//            alert('Down!');
//        }                                                                 
//    } 
    /* reset values */
    xDown = null;
    yDown = null;
    }
};

window.onclick = function(event) {
// console.log(event.target);
    if (event.target == document.getElementById('modalBackDrop')) {
        // modal.style.display = "none";
        trackingModalToButton(null);
        coverageModalToButton(null);
    }
}


window.onscroll = function () {
    // goTopBtnVisibility()
};

function goTopBtnVisibility() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("goTop").style.visibility = "visible";
    } else {
        document.getElementById("goTop").style.visibility = "hidden";
    }
}

