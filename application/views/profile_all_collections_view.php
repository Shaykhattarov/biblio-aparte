<main class="container">
    <div class="main_title" style="margin-top: 5%;">Мои коллекции</div>
    <div class="center">
        <a class="btn_auth" href="/profile_collection_create">Создать коллекцию</a>
    </div>
    <!-- Блок коллекций -->
    <div class="collections">
        <? foreach($data['collections'] as $key => $value) { ?>
            <div class="list_collection">
            <a href="/profile_collection?id=<?= $value['id'] ?>">
                <img src="/images/collections/<?= $value['image'] ?>" alt="Обложка" class="list_book_img">
                <div class="list_book_name"><?= $value['name'] ?></div>
                <div class="buttons">
                    <a href="profile_collection_edit.html" class="btn-edit">Редактировать</a>
                    <button class="remove"> Удалить</button>
                </div>
            </a>
        </div>
        <? } ?>
    </div>       
</main>