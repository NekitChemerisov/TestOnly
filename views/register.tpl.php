<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $pageData['title']; ?></title>
	<meta name="vieport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div id="container_demo" >
    <!-- спрятанный якорь, чтобы избежать прыжков http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
    <a class="hiddenanchor" id="tosubscribe"></a>
    <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
 
        <div id="subscribe" class="animate form">
            <form method="POST" action="/register/proverka">
                <h1> Регистрация </h1>
                <p>
                    <label for="name" class="uname" data-icon="u">Имя</label>
                    <input id="name" name="name" required="required" type="text" placeholder="имя" />
                </p>
                <p>
                    <label for="phone" class="youmail" data-icon="e" > Телефон</label>
                    <input id="phone" name="phone" required="required" type="text" placeholder="87777777777"/>
                </p>
                <p>
                    <label for="email" class="youmail" data-icon="e" > Почта</label>
                    <input id="email" name="email" required="required" type="text" placeholder="mysupermail@mail.com"/>
                </p>
                <p>
                    <label for="password" class="youpasswd" data-icon="p">Пароль </label>
                    <input id="password" name="password" required="required" type="password" placeholder="Мин 8 символов"/>
                </p>
                <p>
                    <label for="password_confirm" class="youpasswd" data-icon="p">Повторите пароль</label>
                    <input id="password_confirm" name="password_confirm" required="required" type="password_confirm" placeholder="Повторите пароль"/>
                </p>
                <p class="signin button">
                    <input type="submit" value="Зарегистрироваться"/>
                </p>

            </form>
        </div>
    </div>
</div>

</body>
</html>

