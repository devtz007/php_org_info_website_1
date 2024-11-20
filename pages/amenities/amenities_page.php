<?php
$rootPath =  $_SERVER['DOCUMENT_ROOT'];
require "$rootPath/header.php";
?>
<main class="aminities-page pad-y-30px">
    <section class="aminities sec-x-p">
        <div class="section-heading">Amenities</div>
        <div class="aminities-item-cont article-type-1-cont">
            <div class="aminities-item article-type-1">
                <div class="image-cont">
                    <img src="<?php $rootPath ?>/assets/components/amenities_comp/images/community_hall.jpg" alt="">
                </div>
                <h3 class="article-type-1-heading">Community Hall</h3>
                <div>
                    <p>This facility includes a spacious hall used for gatherings, events, and training sessions. It features modern audio-visual equipment and a seating capacity of 200, providing a comfortable space for collaborative activities.</p>
                </div>
            </div>
            <div class="aminities-item article-type-1">
                <div class="image-cont">
                    <img src="<?php $rootPath ?>/assets/components/amenities_comp/images/gymnasium.jpg" alt="">
                </div>
                <h3 class="article-type-1-heading">Gymnasium</h3>
                <div>
                    <p>A fully equipped gymnasium is available for fitness enthusiasts. The facility includes treadmills, weightlifting stations, and yoga mats, encouraging trainees and staff to maintain an active and healthy lifestyle.</p>
                </div>
            </div>
            <div class="aminities-item article-type-1">
                <div class="image-cont">
                    <img src="<?php $rootPath ?>/assets/components/amenities_comp/images/cafeteria.jpg" alt="">
                </div>
                <h3 class="article-type-1-heading">Cafeteria</h3>
                <div>
                    <p>The cafeteria offers a variety of healthy and affordable meal options. Open throughout the day, it serves both local and international dishes, catering to diverse tastes and dietary preferences.</p>
                </div>
            </div>
            <div class="aminities-item article-type-1">
                <div class="image-cont">
                    <img src="<?php $rootPath ?>/assets/components/amenities_comp/images/garden.jpg" alt="">
                </div>
                <h3 class="article-type-1-heading">Garden</h3>
                <div>
                    <p>Surrounding the campus is a beautifully maintained garden, featuring walking paths, benches, and vibrant floral displays. It serves as a serene spot for relaxation and outdoor activities.</p>
                </div>
            </div>

        </div>
    </section>


</main>
<?php

require "$rootPath/footer.php";

?>