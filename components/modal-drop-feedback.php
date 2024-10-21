
<div
    id="drop-feedback-modal"
    class="modal fade"
    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

        <form action="">

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Оставить отзыв</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img    
                            src="./assets/img/photo/v6b0v4u5xf164t0j05bzwx39o6a04wow.jpg" alt=""
                            class="w-100 rounded-circle ratio ratio-1x1 object-fit-cover">
                    </div>
                    <div class="col-8">
                        <h4>Давыдова Татьяна Андреевна</h4>
                        <h6>Поставьте оценку:</h6>

                        <div class="drop-feedback-modal-rates">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">★</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">★</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">★</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">★</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">★</label>
                        </div>


                    </div>
                </div>
                <input class="form-control my-3" type="text" name="name" placeholder="Как к Вам обращаться">
                <input class="form-control my-3" type="tel" name="phone" placeholder="Ваш телефон">
                <textarea class="form-control my-3" name="" id="" class="w-100 p-4" rows="5" placeholder="Напишите отзыв" aria-describedby=""></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button
                type="button" class="btn btn-danger"
                data-bs-dismiss="modal"
                data-bs-target="#drop-feedback-thanks"
                data-bs-toggle="modal"
                >Отправить</button>
            </div>

        </form>

    </div>
  </div>


</div>




<div
    id="drop-feedback-thanks"
    class="modal fade"
    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <h3>Спасибо за отзыв</h3>
            <p>
                Возьмите с полки пирожок, сотрите пыль и положите обратно.
            </p>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>

    </div>
  </div>


</div>