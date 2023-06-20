<main class="container">
    <div class="main_title" style="margin-top: 5%;"><?= $data['header'][0]['name'] ?></div>
    <div class="collection_description"><?= $data['header'][0]['description'] ?></div>
    
    
    <div class="collections">
        <? if (!empty($data['books'])): ?>
            <? foreach ($data['books'] as $key => $value) { ?>
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
                <div class="center">
                    <button class="remove">Удалить</button>
                </div>
            </div>
            <? } ?>
    </div> 
            <div class="center">
                <button class="add_book_col show-more" style="margin-top: 30px;">Показать ещё</button>
            </div>
        <? else: ?>
    </div>
        <? endif; ?>
</main>

<script src="js/like.js" defer></script>
<script src="js/remove_book.js" defer></script>
<script src="js/books_more_in_favourites.js" defer></script>