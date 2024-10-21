<?php

    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/inside-page-header.php";

?>

    <section class="contacts">
        <div class="container py-5">

            <row class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="text-uppercase text-secondary">
                        Адрес
                    </div>
                    <div class="fs-5">
                        Великий Новгород, Донецкий район, Зелёная улица, 8
                    </div>
                    <div class="btn btn-outline-secondary domzdrav-button_route" data-click="action" data-action="open_route">Проложить маршрут</div>
                    
                    <div class="text-uppercase text-secondary mt-3">
                        График работы
                    </div>
                    <div class="fs-5">
                        <span class="text-secondary">Пн-Пт: </span><b>08:00 - 20:00</b>, Сб: <b>09:00 - 15:00</b>
                    </div>

                    <div class="text-uppercase text-secondary mt-3">
                        Телефон
                    </div>
                    <div class="fs-5">
                        <a href="tel:+78162620000" class="btn btn-outline-danger">+7 (8162) 62-00-00</a>
                    </div>
                    
                    <div class="text-uppercase text-secondary mt-3">
                        Электронная почта
                    </div>
                    <div class="fs-5 mb-3">
                        <a href="mailto" class="btn btn-outline-primary">info@domzdrav.com</a>
                    </div>
                    
                </div>
                <div class="col">
                    <h2>Обратная связь</h2>
                    <div class="my-2"></div>
                    <form action="">
                        <input type="text" class="form-control my-2" placeholder="Ваше имя">
                        <input type="email" class="form-control my-2" placeholder="Ваш Email">
                        <textarea class="form-control my-2" placeholder="Ваше сщщищение" rows="6"></textarea>
                        <button class="btn btn-danger" type="submit">Отправить</button>
                    </form>
                </div>
            </row>




        </div>
    </section>

<?php

    include './components/widget-map.php';

    include "./components/page-footer.php";

    include "./components/footer.php";

?>