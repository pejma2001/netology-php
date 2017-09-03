<?php
require_once 'core/core.php';
if (isPost()){
    login(getParam('login'), getParam('password'));
}
<!DOCTYPE html>

<head>
    <title>Вход</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<div class="container">

    <section>
        <div id="container_demo" >

            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="mysuperscript.php" method="POST" autocomplete="on">
                        <h1>Войти</h1>
                        <p>
                            <label for="username" class="uname" data-icon="u" > Ваш логин </label>
                            <input id="username" name="login" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Ваш пароль </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Запомнить меня</label>
                        </p>
                        <p class="login button">
                            <input type="submit" value="Войти" />
                        </p>
                        <p class="change_link">

                            <a href="#toregister" class="to_register">Зарегистрироваться</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form  action="mysuperscript.php" autocomplete="on">
                        <h1> Зарегистрироваться </h1>
                        <p>
                            <label for="usernamesignup" class="uname" data-icon="u">Ваше имя пользователя</label>
                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail" data-icon="e" > Ваш email</label>
                            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" data-icon="p">Ваш пароль </label>
                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Пожалуйста, подтвердите ваш пароль </label>
                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            <input type="submit" value="Sign up"/>
                        </p>
                        <p class="change_link">

                            <a href="#tologin" class="to_register"> Войти </a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</body>
</html>