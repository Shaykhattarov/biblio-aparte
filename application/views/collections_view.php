<main class="container">
    <div class="main_title" style="margin-top: 5%;">Мои коллекции</div>
    <div class="center">
        <a class="btn_auth" href="/collection_create">Создать коллекцию</a>
    </div>
    <!-- Блок коллекций -->
    <div class="collections">
        <? foreach($data['collections'] as $key => $value) { ?>
            <div class="list_collection" style="text-align: center;">
                <a href="/collection?id=<?= $value['id'] ?>">
                    <img src="/images/collections/<?= $value['image'] ?>" alt="Обложка" class="list_book_img">
                    <div class="list_book_name"><?= $value['name'] ?></div>
                
                    <div class="buttons">
                        <a href="/collection_edit?id=<?= $value['id'] ?>" class="btn-edit">Редактировать</a>
                        <a href="/collection_remove?id=<?= $value['id'] ?>" class="remove" style="line-height: 34px;">Удалить</a>
                    </div>
                </a>
            </div>
        <? } ?>
    </div>       
</main>