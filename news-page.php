<?php

    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/inside-page-header.php";

?>

    <section class="news-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container py-5 pe-lg-4">
                        <?php include "./components/news-content.php" ?>
                    </div>
                </div>
                <div class="col-lg-4 py-4">
                    <?php include "./components/news-list-short.php" ?>
                </div>
            </div>
        </div>
    </section>

<?php

    include "./components/page-footer.php";

    include "./components/footer.php";

?>