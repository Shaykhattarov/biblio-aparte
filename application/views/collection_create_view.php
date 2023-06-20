<main>
    <div class="collection_create">
        <div class="form-edit">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 class="title-form">Создание коллекции</h1>
                <div class="form-container">
                    <div class="form-container-left">
                        <img id="frame" class="image-preview" alt=""/>
                        <label class="input-file">
                            <input type="file" id="file" name="file" accept="image/jpg, image/jpeg, image/png" onchange="preview()">
                            <span class="input-file-btn">Добавить обложку</span> 
                        </label>
                    </div>
                    <div class="form-container-right">
                        <input type="text" name="name" placeholder="Введите название" class="box" required>
                        <textarea name="description" rows="5" cols="15" placeholder="Введите описание коллекции" required></textarea>
                    </div>
                </div>
                <input type="submit" class="btn-form-text" value="Создать">
            </form>
        </div>
    </div>
</main>