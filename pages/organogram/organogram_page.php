<?php
$rootPath =  $_SERVER['DOCUMENT_ROOT'];
require "$rootPath/header.php";
?>
<main class="organogram-page pad-y-30px">
    <section class="organigram sec-x-p">
        <div class="section-heading">Present Organogram</div>
        <div class="organigram-image-cont">
            <img src="<?php $rootPath ?>/assets/components/organogram_comp/images/orga.png" alt="">
        </div>

    </section>

</main>
<?php

require "$rootPath/footer.php";

?>