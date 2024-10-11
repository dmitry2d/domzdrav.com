<?php

    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/inside-page-header.php";

?>

    <section class="about-index">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <h2>О клинике</h2>
                    
                    <?php include './components/content-about-index.php';?>
                    
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <?php include "./components/second-level-menu.php" ?>
                </div>
            </div>
        </div>
    </section>

<?php

    include "./components/page-footer.php";

    include "./components/footer.php";

?>