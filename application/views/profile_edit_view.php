<main>
    <div class="form-edit">
        <form action="" method="post" enctype="multipart/form-data">
            <h1 class="title-form">Редактирование профиля</h1>
            <div class="form-container">
                <div class="form-container-left">
                    <?=  "<img class='image-preview' src='" . $data['avatar'] . "' alt=''>"; ?>
                    
                    <label class="input-file">
                        <input type="file" id="file" name="file" accept="image/jpg, image/jpeg, image/png" onchange="preview()">
                        <span class="input-file-btn">Изменить изображение</span> 
                    </label>
                </div>

                <div class="form-container-right">
                    <input type="text" name="name" placeholder="Ildan" class="box">
                    <input type="password" name="password" placeholder="Введите старый пароль" class="box">
                    <input type="password" name="npassword" placeholder="Введите новый пароль" class="box">
                    <input type="password" name="rnpassword" placeholder="Повторите новый пароль" class="box">
                    <?
                        if ($data['avatar_change'] != false) {
                            echo "<span>". $data['avatar_change'] . "</span>";
                        }
                        if ($data['nickname_change'] != false) {
                            echo "<span>". $data['nickname_change'] . "</span>";
                        }
                        if ($data['password_change'] != false) {
                            echo "<span>". $data['password_change'] . "</span>";
                        }
                    ?>
                </div>
            </div>
            <input type="submit" class="btn-form-text" value="Сохранить">
        </form>
    </div>
</main>