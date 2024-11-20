<?php

$rootPath = $_SERVER['DOCUMENT_ROOT'];


//$projectRootPath = $_SERVER['DOCUMENT_ROOT'] . "./" . "cid_school_x";

//echo $projectRootPath;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--<meta http-equiv="refresh" content="10">-->
  <link rel="stylesheet" href="<?php $rootPath ?>/assets/library/devtz007/css/reset.css" />
  <link rel="stylesheet" href="<?php $rootPath ?>/assets/library/devtz007/css/htmlpage_css_library.css" />
  <link rel="stylesheet" href="<?php $rootPath ?>/assets/library/devtz007/sass/reusable_sass.css" />
  <link rel="stylesheet" href="<?php $rootPath ?>/assets/components/login_form_comp/login.css" />
  <link rel="stylesheet" href="<?php $rootPath ?>/style.css" />
  <title>HTS</title>
</head>

<body>
  <header class="myHeader">
    <div class="upper-header">
      <div class="website-logo">
        <img src="<?php $rootPath ?>/assets/components/header/images/logo.png" alt="" />
      </div>
      <div class="website-name">
        <div class="item item-1">Human Training School (HTS)</div>
        <!--<div class="item item-2">International</div>-->
      </div>
      <!-- <div class="contact">
        <span class="contact-heading">Helpline</span>
        <div class="contact-info">
          <span>Mob: 123456789</span>
          <span>T&T: 123456789</span>
          <span>Fax: 123456789</span>
        </div>
      </div>-->
    </div>
    <div class="hamburger-menu-cont">
      <div class="hamburger-button">
        <!--Checkbox for hamburger menu-->
        <input id="nav-toggler" type="checkbox" class="toggler nav-toggler" onchange="navTogglerF()" />
        <!--Makes Hamburger menu with a div and before , after pseudo element-->
        <div class="hamburger">
          <div class="dash"></div>
        </div>
      </div>
      <div class="hamburger-menu-wrap">
        <div class="menu">
          <div>
            <ul class="nav-item-cont">
              <li class="home">
                <a href="<?php $rootPath ?>/index.php" class="home-item">
                  <div>
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="39.434px"
                      height="39.434px" viewBox="0 0 39.434 39.434"
                      style="enable-background: new 0 0 39.434 39.434" xml:space="preserve">
                      <g>
                        <path
                          d="M39.434,20.718c0,1.104-0.895,2-2,2c-0.004,0-0.012,0-0.02,0h-3.805v10.637c0,1.104-0.896,2-2,2h-6.568
                                                            c-1.104,0-2-0.896-2-2v-5.638c0-1.838-1.496-3.333-3.333-3.333c-1.838,0-3.334,1.495-3.334,3.333v5.638c0,1.104-0.896,2-2,2H7.805
                                                            c-1.104,0-2-0.896-2-2V22.718H2c-0.844,0-1.598-0.528-1.882-1.322c-0.285-0.795-0.043-1.682,0.606-2.22L18.432,4.538
                                                            c0.74-0.611,1.81-0.611,2.549,0L38.526,19.04C39.072,19.398,39.434,20.016,39.434,20.718z" />
                      </g>
                      <g></g>
                    </svg>
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <div href="#" class="parent-menu-cont">
                  <div class="parent-menu-item">
                    Program
                  </div>
                </div>
                <div class="child-menu-cont">
                  <a href="<?php $rootPath ?>/pages/program/regular_training_program.php" class="child-menu-item">
                    Regular Training Program
                  </a>
                  <a href="<?php $rootPath ?>/pages/program/proposed_training_program.php" class="child-menu-item">
                    Proposed Training Program
                  </a>
                  <a href="<?php $rootPath ?>/pages/program/scholarly_program.php" class="child-menu-item">
                    Scholarly Program
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <div href="#" class="parent-menu-cont">
                  <div class="parent-menu-item">
                    Gallery
                  </div>
                </div>
                <div class="child-menu-cont">
                  <a href="<?php $rootPath ?>/pages/gallery/image_gallery_page.php" class="child-menu-item">
                    <span>Image</span>
                  </a>
                  <a href="<?php $rootPath ?>/pages/gallery/video_gallery_page.php" class="child-menu-item">
                    <span>Video</span>
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <div href="<?php $rootPath ?>/pages/organogram/organogram_page.php" class="parent-menu-cont">
                  <div class="parent-menu-item">
                    Organogram
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div href="<?php $rootPath ?>/pages/amenities/amenities_page.php" class="parent-menu-cont">
                  <div class="parent-menu-item">
                    Amenities
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div href="<?php $rootPath ?>/pages/aboutUs_page/aboutus_page.php" class="parent-menu-cont">
                  <div class="parent-menu-item">
                    About Us
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div href="<?php $rootPath ?>/pages/contactUs_page/contactus_page.php" class="parent-menu-cont">
                  <div class="parent-menu-item">
                    Contact Us
                  </div>
                </div>
              </li>
            </ul>
            <!--<ul>
                  <li>

                  </li>
                  <li>
                    <div class="parent-menu-cont">
                      <a
                        class="parent-menu-item"
                        style="border-left: 1px solid #251f75"
                      >
                        <span>Program</span>
                      </a>
                    </div>
                    <div class="child-menu-cont">
                      <a
                        href="./regular_training_program.php"
                        class="child-menu-item"
                      >
                        <span>Regular Training Program</span>
                      </a>
                      <a
                        href="./proposed_training_program.php"
                        class="child-menu-item"
                      >
                        <span>Proposed Training Program</span>
                      </a>
                      <a href="./scholarly_program.php" class="child-menu-item">
                        <span>Scholarly Program</span>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="parent-menu-cont">
                      <a class="parent-menu-item">
                        <span>Gallery</span>
                      </a>
                    </div>
                    <div class="child-menu-cont">
                      <a
                        href="./image_gallery_page.php"
                        class="child-menu-item"
                      >
                        <span>Image</span>
                      </a>
                      <a
                        href="./video_gallery_page.php"
                        class="child-menu-item"
                      >
                        <span>Video</span>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="parent-menu-cont">
                      <a href="./ornarigram_page.php" class="parent-menu-item">
                        <span>Organogram</span>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="parent-menu-cont">
                      <a href="./aminities_page.php" class="parent-menu-item">
                        <span>Amenities</span>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="parent-menu-cont">
                      <a href="./aboutus_page.php" class="parent-menu-item">
                        <span>About Us</span>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="parent-menu-cont">
                      <a href="./contactus_page.php" class="parent-menu-item">
                        <span>Contact Us</span>
                      </a>
                    </div>
                  </li>
                </ul>-->
            </section>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>

</html>