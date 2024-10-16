<?php

    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/inside-page-header.php";

?>

    <section class="news-index">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Новости</h2>

                    <section class="widget-news">

                        <div class="row g-4 widget-news-items row-cols-1 row-cols-sm-2 row-cols-lg-3">
                            <?php include './components/news-list-item.php'?>
                            <?php include './components/news-list-item.php'?>
                            <?php include './components/news-list-item.php'?>
                            <?php include './components/news-list-item.php'?>
                            <?php include './components/news-list-item.php'?>
                            <?php include './components/news-list-item.php'?>
                            <?php include './components/news-list-item.php'?>
                        </div>

                    </section>
                    
                </div>
                <div class="col-lg-4">
                    <?php include "./components/news-list-short.php" ?>
                </div>
            </div>
        </div>
    </section>

<?php

    include "./components/page-footer.php";

    include "./components/footer.php";

?>