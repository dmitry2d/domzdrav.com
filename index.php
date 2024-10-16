<?php

    include "./components/header.php";

    include "./components/page-header.php";

    // include './components/breadcrumb.php';

    include './components/home-slider.php';

    include './components/widget-services.php';

    include './components/widget-news.php';
?>


        <!-- Врачи -->
        <div class="container my-5">
            <div class="d-flex">
                <h1 class="py-3 flex-grow-1">Специалисты</h1>
                <div class="d-flex align-items-center">
                    <a href="" class="btn btn-outline-primary">Все специалисты →</a>
                </div>
            </div>
            <?php include './components/widget-staff.php'; ?>
        </div>
        <!-- / Врачи -->


<?php
    include './components/widget-about.php';

    include './components/widget-contacts.php';

    include './components/widget-gallery.php';

    include './components/widget-popular-services.php';

    include './components/widget-map.php';

    include './components/widget-yashare2.php';

    include "./components/page-footer.php";

    include "./components/footer.php";

?>