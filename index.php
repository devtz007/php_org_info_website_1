<?php require './header.php'?>
<main>
  <section class="slider-sec">
    <div class="slider-wrapper">
      <div class="images-cont">
        <img
          class="slider-img"
          src="./assets/components/slider/images/a1.jpeg"
        />
        <img
          class="slider-img"
          src="./assets/components/slider/images/a2.jpeg"
        />
        <img
          class="slider-img"
          src="./assets/components/slider/images/a3.jpeg"
        />
        <img
          class="slider-img"
          src="./assets/components/slider/images/a4.jpeg"
        />
        <img
          class="slider-img"
          src="./assets/components/slider/images/a5.jpeg"
        />
      </div>
      <!-- <button class="left-arrow">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                        style="enable-background:new 0 0 490 490;" xml:space="preserve">
                        <path d="M413.476,398.302L258.215,245L413.476,91.69L324.619,0L76.524,245l248.094,245L413.476,398.302z M120.086,245L324.14,43.502
                                	l46.252,47.71L214.653,245l155.739,153.781l-46.252,47.717L120.086,245z" />
                        <g>
                        </g>

                    </svg>

                </button>
                <button class="right-arrow">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490 490"
                        style="enable-background:new 0 0 490 490;" xml:space="preserve">
                        <path d="M413.476,398.302L258.215,245L413.476,91.69L324.619,0L76.524,245l248.094,245L413.476,398.302z M120.086,245L324.14,43.502
                                        	l46.252,47.71L214.653,245l155.739,153.781l-46.252,47.717L120.086,245z" />
                        <g>
                        </g>

                    </svg>
                </button>
-->
      <div class="indicator-cont">
        <button class="indicator"></button>
        <button class="indicator"></button>
        <button class="indicator"></button>
        <button class="indicator"></button>
        <button class="indicator"></button>
      </div>
    </div>
    <div class="commandant-wrapper">
      <div class="image-cont">
        <img
          src="./assets/components/slider/images/dummy.webp"
          alt="commandant officer's picture"
        />
        <div class="info">
          <p class="position">COMMANDANT</p>
          <p class="name">Dr. A.B.C. Police</p>
        </div>
      </div>
    </div>
  </section>
  <div class="make-col-2">
    <div class="col-1">
      <section class="who-we-are article-type-1-cont sec-gap sec-x-p">
        <div class="article-type-1">
          <h3 class="section-heading">Who we are</h3>
          <p>
            Detective Training School (DTS) is maintained by Criminal
            Investigation Department (CID) of Bangladesh Police. It arranges
            various courses in the area of investigation and supervision.It was
            established on 25 July 1962. Since the inception this institute has
            produced a good number of highly professional investigating and
            detective officers. It is headed by a police officer in the rank of
            Additional DIG designated as the Commandant of this school.
          </p>
        </div>
      </section>
      <section class="objectives sec-gap sec-x-p">
        <h3 class="section-heading">What we aim to do</h3>

        <div class="items-cont">
          <div class="item">
            <div class="image"></div>
            <a href="#">
              <h3>Detective Training School</h3>
            </a>
          </div>
          <div class="item">
            <div class="image"></div>
            <a href="#">
              <h3>Forensic Training Centre</h3>
            </a>
          </div>
          <div class="item">
            <div class="image"></div>
            <a href="#">
              <h3>Cyber Training Centre</h3>
            </a>
          </div>
        </div>
      </section>
      <section class="our-vision article-type-1-cont sec-gap sec-x-p">
        <div class="article-type-1">
          <h3 class="section-heading">Our Vision</h3>
          <p>
            Embrace modern and scientific methods to attain excellence in
            criminal investigation
          </p>
        </div>
      </section>
      <section class="our-mission article-type-1-cont sec-gap sec-x-p">
        <div class="article-type-1">
          <h3 class="section-heading">Our Mission</h3>
          <p>
            Criminal Investigation Department (CID) is committed to contribute
            in criminal justice system by:
            <br />

            Upholding quality investigation stemming unnecessary delay
            <br />
            Combating cyber and organized crime
            <br />
            Utilizing forensic evidence
            <br />
            Ensuring capacity building and
            <br />
            Promoting inter-agency cooperation
          </p>
        </div>
      </section>
    </div>
    <div class="col-2">
      <?php include './notice_comp.php'?>
      <?php include './news_event_comp.php'?>
    </div>
  </div>
</main>

<script>
  /*+++++++++++++++++++++++++++++++*/
  //image slider sec1
  const sliderImgCont = document.getElementsByClassName("images-cont")[0];
  const sliderImage = document.getElementsByClassName("slider-img");
  const leftArrow = document.getElementsByClassName("left-arrow");
  const rightArrow = document.getElementsByClassName("right-arrow");
  const indicator = document.getElementsByClassName("indicator");
  const indicatorActive = document.getElementsByClassName("indicatorActive");
  console.log(indicator);

  //arranging the image from left to right
  let n = 0;
  for (let i = 0; i < sliderImage.length; i++) {
    //sliderImage[i].style.zIndex = n;
    sliderImage[i].style.left = n * 100 + "%";
    n++;
  }
  let x = 0;
  //time function
  indicator[0].classList.add("indicatorActive");
  const schoolSlider = setInterval(schoolSliderF, 4000);
  function schoolSliderF() {
    if (x >= -1) {
      x++;
      for (let j = 0; j < indicator.length; j++) {
        indicator[j].classList.remove("indicatorActive");
      }
      indicator[x].classList.add("indicatorActive");
      sliderImgCont.style.right = x * 100 + "%";
      console.log(x);
      if (x == 4) {
        x = -1;
      }
    }
    /*   if (x < 6) {
                      x--;
                      sliderImgCont.style.right = x * 100 + '%';
                      if (x == 0) {
                          x = 5;
                      }
                  }*/
    /*if (x > 0) {
                    rightArrow.style.display = "block";
                }
                if (x > 1) {
                    leftArrow.style.display = "none";
                }
                if (x < 2) {
                    leftArrow.style.display = "block";
                }
                if (x == 0) {
                    rightArrow.style.display = "none";
                }*/
  }
  /*end of time function*/

  for (let i = 0; i < indicator.length; i++) {
    indicator[i].addEventListener("click", () => {
      clearInterval(schoolSlider);
      sliderImgCont.style.right = i * 100 + "%";
      for (let j = 0; j < indicator.length; j++) {
        indicator[j].classList.remove("indicatorActive");
      }
      indicator[i].classList.add("indicatorActive");
    });
  }

  /*rightArrow[0].addEventListener("click", function () {
                clearInterval(schoolSlider);
                if (x >= -1) {
                    x--;
                    carouselInner.style.right = x * 100 + '%';
                }
                if (x < 2) {
                    leftBtn.style.display = "block";
                }
                if (x < 1) {
                    rightBtn.style.display = "none";
                }
            });*/
</script>
<?php require './footer.php'?>
