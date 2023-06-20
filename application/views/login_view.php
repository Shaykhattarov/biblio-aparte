<main class="container">
    <div class="form-auth">
        <form action="" id="authorizationForm" method="post" enctype="multipart/form-data">
            <h1 class="title-form">Авторизация</h1>
            <div class="form-container-middle">
                <input type="email" name="email" id="email" placeholder="Введите E-mail" class="box" required>
                <input type="password" name="password" id="password" placeholder="Введите пароль" class="box" required>
            </div>
			<? if ($data["login_status"] == "Введены неверные данные!") { ?>
				<span>Введены неверные данные!</span>
			<? } ?>
			<? if ($data["login_status"] == "Заполните все поля!") { ?>
				<span>Заполните все поля!</span>
			<? } ?>
            <input type="submit" value="Войти" class="btn-form">
        	<p class="btn-form-text">Нет аккаунта? <a href="/registration">Зарегистрироваться</a></p>
        </form>
    </div>
</main>



