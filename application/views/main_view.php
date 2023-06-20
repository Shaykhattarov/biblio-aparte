<main class="container">

    <!-- Блок - Что мы можем предложить?  -->
    <div class="main_title">Что мы можем предложить?</div>
    <div class="services_circles">
        <div class="services_circle">
            <img class="services_circle_img" src="/images/collection.png" alt="Коллекция книг">
            <div class="services_circle_text">Создавай коллекции</div>
        </div>
        <div class="services_circle">
            <img class="services_circle_img" src="/images/recens.png" alt="Рецензия пером">
            <div class="services_circle_text">Пиши рецензии</div>
        </div>
        <div class="services_circle">
            <img class="services_circle_img" src="/images/status.png" alt="Девушка с книгой">
            <div class="services_circle_text">Определяй статус книги</div>
        </div>
    </div>

    <!-- Блок - ТОП 10  -->
    <div class="main_title">Топ-10</div>
    <div class="wrapper">
        <img class="arrow left" id="left" src="/images/arrow_left.png" alt="">
        <div class="list_books">
            <? foreach ($data['books'] as $key => $value) {?>
                <div class="list_book">
                    <a href="/book?id=<?= $value['id'] ?>">
                        <img src="/images/books/<?= $value['image'] ?>" alt="Обложка" class="list_book_img">
                        <div class="list_book_name"><?= $value['name'] ?></div>
                        <div class="list_book_author"><?= $value['author'] ?></div>
                    </a>
                    <div class="list_book_estimation">
                        <div class="list_book_estimation_rating">
                            <? for ($i = 0; $i < (int)$value['rate']; $i++) {?>
                                <span class="active"></span>
                            <? } ?>    
                        </div>
                        <div class="list_book_estimation_like">
                            <div class="heart"></div>
                        </div>
                    </div>   
                </div>
            <? } ?>
        </div>
        <img class="arrow rigth" id="right" src="/images/arrow-rigth.png" alt="">
    </div>
    
    <!-- Блок - Популярное  -->
    <div class="main_title">Популярное</div>
    <div class="wrapper">
        <img class="arrow left" id="left_1" src="/images/arrow_left.png" alt="">
        <div class="list_books two">
            <? foreach ($data['books'] as $key => $value) {?>
                <div class="list_book">
                    <a href="/book?id=<?= $value['id'] ?>">
                        <img src="/images/books/<?= $value['image'] ?>" alt="Обложка" class="list_book_img">
                        <div class="list_book_name"><?= $value['name'] ?></div>
                        <div class="list_book_author"><?= $value['author'] ?></div>
                    </a>
                    <div class="list_book_estimation">
                        <div class="list_book_estimation_rating">
                            <? for ($i = 0; $i < (int)$value['rate']; $i++) {?>
                                <span class="active"></span>
                            <? } ?>    
                        </div>
                        <div class="list_book_estimation_like">
                            <div class="heart"></div>
                        </div>
                    </div>   
                </div>
            <? } ?>
        </div>
        <img class="arrow rigth" id="right_1" src="/images/arrow-rigth.png" alt="">
    </div>
</main>