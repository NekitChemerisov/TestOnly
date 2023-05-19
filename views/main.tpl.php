<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageData['title']; ?></title>
	<meta name="vieport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	
	<header></header>
	<div id="content">
	<div class="container table-block">
    <div class="row table-cell-block">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Вход в кабинет</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" id="form-signin" method="post">
                    <input type="text" class="form-control" name="email_or_phone" id="email_or_phone" placeholder="Email или Телефон" required>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Пароль" required>
                    <div class="g-recaptcha" data-sitekey="КЛЮЧ САЙТА"></div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
                </form>
                <a href="/register">Нет аккаунта? -Создавай!</a>
            </div>
        </div>
    </div>
</div>
	</div>
	<footer>
		
	</footer>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/angular.min.js"></script>
	<script src="/js/script.js"></script>
</body>
</html>
