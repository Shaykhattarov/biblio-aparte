<main class="container">
        <div class="review_create">
            <div class="form-edit">
                <form action="" method="post" enctype="multipart/form-data">
                    <h1 class="title-form" style="margin-bottom: 70px;">Создание рецензии</h1>
                    <div class="form-container">
                        <div class="form-container-left">
                            <img src="/images/books/MasterMarg.png" alt="Обложка" class="list_book_img">
                        </div>
                        <div class="form-container-right-review">
                            <textarea id="text_review" name="text" rows="100" cols="15" placeholder="Напишите рецензию..." required class="textarea-review"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-form-text" style="margin-top: 50px; border: none;" onclick="redirectToProfile()">Создать</button>
                </form>
            </div>
        </div>
</main>