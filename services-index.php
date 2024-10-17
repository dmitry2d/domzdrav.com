<?php

    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/inside-page-header.php";

?>

    <section class="services-index">
        <div class="container py-5">


            <h1>Услуги</h1>

            <div class="d-flex flex-wrap">
                <a href="" class="btn btn-danger me-2 mb-2">Все услуги</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Услуги врачей-специалистов</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Педиатрия</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Врач на дом</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Диагностика</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Медосмотры для предприятий</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">ПЦР-тест на коронавирус</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Вакцинация</a>
                <a href="" class="btn btn-outline-secondary me-2 mb-2">Медицинские справки</a>
            </div>

            <?php

                include "./components/services-items.php";

            ?>

            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
            </nav>


        </div>
    </section>

<?php

    include "./components/page-footer.php";

    include "./components/footer.php";

?>