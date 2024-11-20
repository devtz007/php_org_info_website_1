
//Show or Hide menu on hamburger toggler check
const navToggler = document.getElementsByClassName("nav-toggler");
const hamburgerMenuWrap = document.getElementsByClassName(
    "hamburger-menu-wrap"
);

function navTogglerF() {
    if (navToggler[0].checked === true) {
        hamburgerMenuWrap[0].classList.add("hamburger-menu-wrap-active");
    } else {
        hamburgerMenuWrap[0].classList.remove("hamburger-menu-wrap-active");
    }

}


//positioning the main under the header
const headerSec = document.querySelector('header.myHeader').getBoundingClientRect();
console.log(headerSec);

const myBody = document.querySelector('body').getBoundingClientRect();
console.log(myBody);

const mainSec = document.querySelector('main');
mainSec.style.setProperty('--headers-height', headerSec.height + 'px');
document.documentElement.style.setProperty('--headers-height', headerSec.height + 'px');




//navbar
//redirect navigation menu item link
const parentMenuContLink = document.querySelectorAll('li.nav-item div.parent-menu-cont');
const parentMenuItem = document.querySelectorAll('li.nav-item div.parent-menu-item');
const portfolio = document.querySelector('.nav-item-cont');

console.log(parentMenuContLink);
let maxNavItemWidth = 0;
for (let i = 0; i < parentMenuItem.length; i++) {
    parentMenuContLink[i].addEventListener('click', abcd);
    function abcd() {
        console.log(parentMenuContLink[i].getAttribute("href"));
     
    window.location.href = parentMenuContLink[i].getAttribute('href');
        
    
    }

    if (parentMenuItem[i].offsetWidth > maxNavItemWidth) {
        maxNavItemWidth = parentMenuItem[i].offsetWidth;
    }
}

portfolio.style.setProperty("--max-nav-item-width", (maxNavItemWidth + 10) + 'px');














        //slider
/*const sliderImage = document.getElementsByClassName('slider-img');
sliderImage[0].style.display = 'block';
var next = 0;

function slider() {
    for (let i = 0; i < sliderImage.length; i++) {
        sliderImage[i].style.display = 'none';
    }
    sliderImage[next].style.display = 'block';
    console.log(next);

    next++;
    if (next > 4) {
        next = -1;
    }
}

function sliderArrow(n) {

    if ( n > 0) {
        next--;
        for (let i = 0; i < sliderImage.length; i++) {
            sliderImage[i].style.display = 'none';
        }
        sliderImage[next].style.display = 'block';
        console.log(next);
        if (next == -1) {
            next = 4;
        } 

    } else if (n == 1) {
        next++;
        for (let i = 0; i < sliderImage.length; i++) {
            sliderImage[i].style.display = 'none';
        }
        sliderImage[next].style.display = 'block';
        console.log(next);

        if (next == 4) {
            next = -1;
        } 
    }




}

console.log(sliderImage);*/
