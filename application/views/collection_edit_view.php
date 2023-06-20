<main>
    <div class="collection_create">
        <div class="form-edit">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 class="title-form">Редактирование коллекции</h1>
                <div class="form-container">
                    <div class="form-container-left">
                        <img id="frame" class="image-preview" src="/images/collections/<?= $data['collection'][0]['image'] ?>"/>
                        <label class="input-file">
                            <input type="file" id="file" name="file" accept="image/jpg, image/jpeg, image/png" onchange="preview()">
                            <span class="input-file-btn">Изменить обложку</span> 
                        </label>
                    </div>
                    <div class="form-container-right">
                        <input type="text" name="name" placeholder="<?= $data['collection'][0]['name'] ?>" class="box">
                        <textarea name="description" rows="5" cols="15" placeholder="<?= $data['collection'][0]['description'] ?>"></textarea>
                        <? if (!empty($data['name'])): ?>
                            <span><?= $data['name'] ?></span>
                        <? endif; ?>

                        <? if (!empty($data['image'])): ?>
                            <span><?= $data['image'] ?></span>
                        <? endif; ?>

                        <? if (!empty($data['description'])): ?>
                            <span><?= $data['description'] ?></span>
                        <? endif; ?>
                    </div>
                    
                </div>
                
                <input type="submit" class="btn-form-text" value="Сохранить">
            </form>
        </div>
    </div>
</main>