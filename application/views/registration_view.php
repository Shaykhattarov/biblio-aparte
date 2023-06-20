<main class="container">
    <div class="form">
        <form action="" method="post" id="registrForm" enctype="multipart/form-data">
            <h1 class="title-form">Регистрация</h1>
            <div class="form-container">
                <div class="form-container-left">
                    <img id="frame" src="" class="image-preview"/>
                    <label class="input-file">
                        <input type="file" id="avatar" name="avatar" accept="image/jpg, image/jpeg, image/png" onchange="preview()" required>
                        <span class="input-file-btn">Выбрать изображение</span> 
                    </label>
                </div>
                <div class="form-container-right">
                    <input type="text" name="nickname" id="nickname" placeholder="Введите никнейм" class="box" required>
                    <input type="date" name="date" id="date" placeholder="Введите дату рождения" class="box" required>
                    <input type="email" name="email" id="email" placeholder="Введите E-mail" class="box" required>
                    <input type="password" name="password" id="password" placeholder="Введите пароль" class="box" required>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Повторите пароль" class="box" required>
                </div>
            </div>
			<? if ($data['reg_status'] == "Такой пользователь уже существует!"): ?>
				<span>Такой пользователь уже существует!</span>	
			<? endif; ?>
			<? if ($data['reg_status'] == "Пароли должны быть одинаковы!"): ?>
				<span>Пароли должны быть одинаковы!</span>
			<? endif; ?>
			<? if ($data['reg_status'] == "Заполните все поля!"): ?>
				<span>Заполните все поля!</span>	
			<? endif; ?>
            <input type="submit" value="Зарегистрироваться" class="btn-form">
            <p class="btn-form-text">У вас уже есть аккаунт? <a href="/login">Войти</a></p>
        </form>
    </div>
</main>