<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/like.js" defer></script>
    <script src="/js/carousel_home.js" defer></script>
    <script src="/js/script.js" defer></script>
    <title>Библио Апарте</title>
</head>
<body>
	<header class="container">
    	<div class="header-box">
    	    <div class="header_title">БиблиоАпарте</div>
    	    <div class="search">
    	        <form action="profile_search.html">
    	            <input type="text" placeholder="Поиск">
    	        </form>
    	    </div>
			<? if (isset($_SESSION['email'])): ?>
    	    	<a class="btn_auth" href="/profile">Профиль</a>
			<? else: ?>
				<a class="btn_auth" href="/login">Войти</a>
			<? endif; ?>
    	</div>
	</header>

<?php include 'application/views/' . $content_view; ?>
<?php include 'application/views/footer_view.php' ?>

</body>
</html>