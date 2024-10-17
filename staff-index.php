<?php

    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/inside-page-header.php";

?>

    <!-- Врачи -->

    <div class="container my-5">

        <!-- Поиск -->
        <form action="" class="my-5">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Поиск по фамилии или должности</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </form>
        <!-- / Поиск -->

        <h1 class="py-3 flex-grow-1">Специалисты</h1>

        <?php include './components/widget-staff.php'; ?>

        <nav aria-label="Page navigation example" class="my-5">
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

    <!-- / Врачи -->

<?php

    include "./components/page-footer.php";

    include "./components/footer.php";

?>