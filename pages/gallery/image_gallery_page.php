<?php
 $rootPath =  $_SERVER['DOCUMENT_ROOT'];
 require "$rootPath/header.php";
?>
<main class="main-p-top main-p-bot">

    <section class="photo-gallary sec-gap sec-x-p">
        <div class="photo-gallary-header section-heading">Photo Gallary</div>
        <div>
            <div class="photo-gallary-mosaic-image-conatainer ">
                <div id="img1 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img1.jpeg " alt="">
                    <button class="photo-gallary-child-close">X</button>
                </div>
                <div id="img2 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img2.jpeg " alt=" ">
                                        <div class="photo-gallary-child-close">
                                            X
                                        </div>
                </div>
                <div id="img3 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img3.jpeg " alt=" ">
                </div>
                <div id="img4 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img4.jpeg " alt=" ">
                </div>
                <div id="img5 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img5.jpeg " alt=" ">
                </div>
                <div id="img6 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img6.jpeg " alt=" ">
                </div>
                <div id="img7 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img7.jpeg " alt=" ">
                </div>
                <div id="img8 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img8.jpeg " alt=" ">
                </div>
                <div id="img9 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img9.jpeg " alt=" ">
                </div>
                <div id="img7 " class="photo-gallary-mosaic-child ">
                    <img src="<?php $rootPath?>/assets/components/photo_gallery_comp/img10.jpeg " alt=" ">
                </div>
 

            </div>

        </div>
        <div class="pagination-cont">
            <div class="numbers">
                <button class="pagination-number pagination-arrow" href="">
                    <span class="svg-cont" style="transform: rotate(180deg);">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 20.633 20.633" xml:space="preserve">
                            <g>
                                <path d="M15.621,9.844l-9.65-9.649C5.842,0.064,5.674,0,5.5,0C5.329,0,5.157,0.064,5.027,0.195L5.014,0.207
		                             C4.888,0.334,4.817,0.506,4.817,0.682v4.682c0,0.178,0.071,0.348,0.197,0.471l4.481,4.482l-4.481,4.479
		                             c-0.126,0.126-0.197,0.294-0.197,0.475v4.68c0,0.18,0.071,0.354,0.197,0.475l0.013,0.01c0.124,0.127,0.294,0.197,0.473,0.197
		                             s0.348-0.07,0.474-0.197l9.647-9.646C15.881,10.531,15.881,10.104,15.621,9.844z" />
                                <g>
                                </g>

                        </svg>

                    </span>
                    </a>
                    <button class="pagination-number" href=""><span>1</span></button>
                    <button class="pagination-number" href=""><span>2</span></button>
                    <button class="pagination-number" href=""><span>3</span></button>
                    <button class="pagination-number" href=""><span>...</span></button>
                    <button class="pagination-number" href=""><span>11</span></button>
                    <button class="pagination-number" href=""><span>12</span></button>
                    <button class="pagination-number" href=""><span>13</span></button>

                    <button class="pagination-number pagination-arrow" href="">
                        <span class="svg-cont">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.633 20.633"
                                xml:space="preserve">
                                <g>
                                    <path d="M15.621,9.844l-9.65-9.649C5.842,0.064,5.674,0,5.5,0C5.329,0,5.157,0.064,5.027,0.195L5.014,0.207
		                               C4.888,0.334,4.817,0.506,4.817,0.682v4.682c0,0.178,0.071,0.348,0.197,0.471l4.481,4.482l-4.481,4.479
		                               c-0.126,0.126-0.197,0.294-0.197,0.475v4.68c0,0.18,0.071,0.354,0.197,0.475l0.013,0.01c0.124,0.127,0.294,0.197,0.473,0.197
		                               s0.348-0.07,0.474-0.197l9.647-9.646C15.881,10.531,15.881,10.104,15.621,9.844z" />
                                    <g>
                                    </g>

                            </svg>

                        </span>
                        </a>



            </div>
            <div class="search">
                <div class="input-type-1">
                    <input type="text" placeholder="N">
                    <button class="myBtn-b">
                        <span>Go</span>
                        <span class="svg-cont">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20.633 20.633"
                                xml:space="preserve">
                                <g>
                                    <path d="M15.621,9.844l-9.65-9.649C5.842,0.064,5.674,0,5.5,0C5.329,0,5.157,0.064,5.027,0.195L5.014,0.207
		                  C4.888,0.334,4.817,0.506,4.817,0.682v4.682c0,0.178,0.071,0.348,0.197,0.471l4.481,4.482l-4.481,4.479
		                  c-0.126,0.126-0.197,0.294-0.197,0.475v4.68c0,0.18,0.071,0.354,0.197,0.475l0.013,0.01c0.124,0.127,0.294,0.197,0.473,0.197
		                  s0.348-0.07,0.474-0.197l9.647-9.646C15.881,10.531,15.881,10.104,15.621,9.844z" />
                                    <g>
                                    </g>

                            </svg>

                        </span>
                    </button>
                </div>
            </div>
        </div>
        <!--<div class="myBtn-cont">
            <button class="myBtn-b">Show more</button>
        </div>-->

    </section>

</main>
<script src="<?php $rootPath?>/scripts.js"></script>
<script>
    //gallery image
    const galleryImg = document.querySelectorAll('div.photo-gallary-mosaic-child img');
    const galleryImgDiv = document.querySelectorAll('div.photo-gallary-mosaic-child');
    const galleryChildClose = document.querySelectorAll('div.photo-gallary-mosaic-child .photo-gallary-child-close');
    console.log(galleryChildClose);
    for (let i = 0; i < galleryImg.length; i++) {
        galleryImg[i].addEventListener('click', () => {
            document.body.style.overflow = 'hidden';
            galleryImgDiv[i].classList.add('gallery-full-image-show-active');
            galleryChildClose[i].style.display = 'block';
            galleryChildClose[i].addEventListener('click', () => {
                galleryImgDiv[i].classList.remove('gallery-full-image-show-active');
                   galleryChildClose[i].style.display = 'none';
            })
        });
    }
</script>
<?php
 require "$rootPath/footer.php";
?>