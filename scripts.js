//body



    //Show or Hide menu on hamburger toggler check
    const navToggler = document.getElementsByClassName("nav-toggler");
    const hamburgerMenuWrap = document.getElementsByClassName(
    "hamburger-menu-wrap"
    );
    function navToggle() {
            if (navToggler[0].checked === true) {
        hamburgerMenuWrap[0].classList.add("hamburger-menu-wrap-active");
            } else {
        hamburgerMenuWrap[0].classList.remove("hamburger-menu-wrap-active");
            }
        };


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
