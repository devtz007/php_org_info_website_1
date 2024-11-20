<?php

require('./header.php');
?>
<main>
  <section class="slider-sec">
    <div class="slider-wrapper">
      <div class="images-cont">

        <img class="slider-img" src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img7.jpg " alt="slider image">
        <img class="slider-img" src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img3.jpg " alt="slider image">
        <img class="slider-img" src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img1.jpg " alt="slider image">
        <img class="slider-img" src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img4.jpg " alt="slider image">
        <img class="slider-img" src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img3.jpg " alt="slider image">

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
        <img src="./assets/components/slider/images/female_profile_pic.webp" alt="commandant officer's picture" />
        <div class="info">
          <p class="position">Principal</p>
          <p class="name">Mr. John Doe</p>
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sint libero iusto suscipit nulla rerum ducimus fuga! Beatae eius nemo ducimus commodi at assumenda ipsa temporibus numquam expedita obcaecati provident, deleniti, eos nobis? Voluptas totam fugit, recusandae esse non ad neque, officia, ut illo vitae ex doloremque veritatis reprehenderit reiciendis.
          </p>
        </div>
      </section>
      <section class="objectives sec-gap sec-x-p">
        <h3 class="section-heading">What we aim to do</h3>

        <div class="items-cont">
          <div class="item">
            <div class="image">
              <img src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img2.jpg " alt=" ">
            </div>
            <a href="#">
              <h3>Human Training School</h3>
            </a>
          </div>
          <div class="item">
            <div class="image">
              <img src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img7.jpg " alt=" ">
            </div>
            <a href="#">
              <h3>Human Training Centre</h3>
            </a>
          </div>
          <div class="item">
            <div class="image">
              <img src="<?php $rootPath ?>/assets/components/photo_gallery_comp/img4.jpg " alt=" ">
            </div>
            <a href="#">
              <h3>Human Training Centre</h3>
            </a>
          </div>
        </div>
      </section>
      <section class="our-vision article-type-1-cont sec-gap sec-x-p">
        <div class="article-type-1">
          <h3 class="section-heading">Our Vision</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, laudantium!
          </p>
        </div>
      </section>
      <section class="our-mission article-type-1-cont sec-x-p">
        <div class="article-type-1">
          <h3 class="section-heading">Our Mission</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates architecto et deserunt blanditiis, omnis sit corrupti quis ex aliquid ipsum.
            <br />

            Upholding quality investigation stemming unnecessary delay.
            <br />
            Combating cyber and organized crime.
            <br />
            Utilizing forensic evidence.
            <br />
            Ensuring capacity building and.
            <br />
            Promoting inter-agency cooperation.
          </p>
        </div>
      </section>
    </div>
    <div class="col-2">
      <?php require "$rootPath/assets/components/notice_board_comp/notice_comp.php" ?>
      <?php require "$rootPath/assets/components/news_events_comp/news_event_comp.php" ?>

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
  }

  //change image on click
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
</script>
<?php

require "$rootPath/footer.php";

?>