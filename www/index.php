<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <meta name="keyword" conent="концерт, Челябинск"/>
        <meta name="description" content="Концерты BelaSono в Челябинске"/>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <title>BelaSono</title>
    </head>

    <body class="body_pointer">

        <header>
            <figure class="logo"><a href="/index.php"><img src="img/BlackLogo.png"></a></figure>

            <div id="sidebar">
                <ul class="mobile">
                    <span><img src="img/close.png"></span>
                    <li><a href="/about.php"><b>о нас</b></a></li>
                    <li><a href="#"><b>галерея</b></a></li>
                    <li><a href="#"><b>вход</b></a></li>
                    <li><a href="#"><b>регистрация</b></a></li>
                </ul>
                <span class="hamb"><img src="img/menu2.png"></span>
                <span class="overlay"></span>
            </div>

            <div id="nav">
                <ul id="buttom-block">
                    <li id="about">
                        <a href="/about.php" title="Перейтит к описанию"><b>о нас</b></a><!--href="/about/artists"-->
                    </li>
                    <li id="gallery">
                        <a href="" title="Перейтит к галерее"><b>галерея</b></a>
                    </li>
                    <li id="in">
                        <a href="" title="Войти"><b>вход</b></a>
                    </li>
                    <li id="reg">
                        <a href="" title="Зарегестрироваться"><b>регистрация</b></a>
                    </li>
                </ul>
            </div>
        </header>
            <form style="position:absolute; right:80px; top: 100px" class="form-3" method="post" action="check_user.php">
                <p class="row">
                    <label for="login">Логин</label>
                    <input style="margin-left:100px " type="text" name="log" id="log" placeholder="Логин">
                </p>
                <p class="clearfix">
                    <label for="password">Пароль</label>
                    <input style="margin-left:100px " type="password" name="pass" id="pass" placeholder="Пароль">
                </p>
                <p class="clearfix">
                    <input style="margin-left:20px" type="submit" name="submit" id="enter" value="Войти">
                    <button style="margin-left:140px; margin-top:5px" type="button" class="registr" onclick="regist()" id="registr" >Регистрация</button>
                </p>
            </form>

            <script type="text/javascript">
                function regist(){
                    var req= new XMLHttpRequest();
                    req.responseType="text";
                    var ans;
                    req.onreadystatechange=function () {
                        ans = req.responseText;
                        if(ans=="Отправлено"){
                            alert("Письмо отправлено на почту");
                        } else {
                            alert(ans);
                        }
                    }
                    var login = document.getElementById("log").value;
                    var password = document.getElementById("pass").value;
                    req.open('GET','new_user.php?log='+login+'&pass='+password);
                    req.send(null);
                }
            </script>

        <menu>
            <div id="first-page">
                <div id="inviting">
                    <span id="december">мы ждем тебя в декабре</span></p>
                    <span id="press-here">жми
                        <a href="" title="Перейти">здесь</a>
                        , чтобы узнать больше
                    </span></p>
                </div>
                <div id="sofar">Inspired by Sofar</div>
            </div>

            <div id="second-page">
                <article>
                    <h1>Как к нам попасть?</h1>
                    <section id="first-step">
                        <div id="first-pict"><img src="img/first-step.png"></div>
                        <div id="text1">
                            <h2>1. Отправь заявку</h2>
                            <p>Наше шоу - это небольшая лотерея.  Успей подать заявку за неделю до начала мероприятия. Билеты на концерт получают те, кто был выбран беспристрастным рандомом или же поведал нам вескую причину. Подробную информацию можно найти <a href="" title="Перейти">здесь</a>.</p>
                        </div>
                    </section>
                    <section id="second-step">
                        <div id="second-pict"><img src="img/second-step.png"></div>
                        <div id="text2">
                            <h2>2. Пригласи друзей</h2>
                            <p>При регистрации ты можете указать +1 для своего друга, но шансов будет больше, если он зарегестрируется вместе с тобой. Ты также можешь прийти один - никогда не знаешь, с кем встретишься!
                            </p>
                        </div>
                    </section>
                    <section id="third-step">
                        <figure id="third-pict"><img src="img/third-step.png"></figure>
                        <div id="text3">
                            <h2>3. Наслаждайся вечером</h2>
                            <p>Мы отправим тебе электронное письмо за день до начала шоу с адресом. Приходи с напитками и выбирай место поудобнее. Ты не узнаеешь, кто играет, пока не увидишь сам. Возможно, ты откроешь для себя новых любимых исполнителей!
                            </p>
                        </div>
                    </section>
                </article>
            </div>
        </menu>

        <footer>
            <div id="footerleft">
                <a href="/index.php"><img src="img/WhiteLogo.png"></a>
                <ul id="reg-enter">
                    <li id="enter">
                        <a href="" title="Нажмите, чтобы войти"><b>Вход</b></a>
                    </li>
                    <li id="reg">
                        <a href="" title="Нажмите, чтобы зарегестрироваться"><b>Регистрация</b></a>
                    </li>
                </ul>
            </div>
            <div id="footerright">
                <div class="adres"><b>Адрес:</b></div>
                <div class="address">
                    челябинск, проспект ленина, 80 </div>
                <div class="mail">
                     <font color="ffa642">e-mail:</font> random.address@gmail.com
                </div>
                <div class="networks">
                    <a href="" title="Наша группа Вконтакте"><img src="img/VK.png" alt="Вконтакте" title="Вконтакте"/></a>
                    <a href="" title="Наш Instagram"><img src="img/Youtube.png" alt="Youtube" title="Youtube"/></a>
                    <a href="" title="Наш Youtube канал"><img src="img/Insta.png" alt="Instagram" title="Instagram"/></a>
                </div>
            </div>
            <div id="footercenter">
                <ul id="menu-footer">
                    <li id="about">
                        <a href="/about.php" title="Нажмите, чтобы перейти"><b>О нас</b></a>
                    </li>
                    <li id="gallery">
                        <a href="" title="Нажмите, чтобы перейти"><b>Правила</b></a>
                    </li>
                    <li id="in">
                        <a href="" title="Нажмите, чтобы перейти"><b>Контакты</b></a>
                    </li>
                    <li id="reg">
                        <a href="" title="Нажмите, чтобы перейти"><b>FAQ</b></a>
                    </li>
                </ul>
            </div>
        </footer>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>



<!--<div id="sidebar">

    <div id="sidebar-popup">
        <a class="menu-close" href="#"></a>
        <ul  id="buttom-block">
            <li id="about">
                <a href="/about.php" title="Перейтит к описанию"><b>о нас</b></a>
            </li>
            <li id="gallery">
                <a href="" title="Перейтит к галлерее"><b>галлерея</b></a>
            </li>
            <li id="in">
                <a href="" title="Войти"><b>вход</b></a>
            </li>
            <li id="reg">
                <a href="" title="Зарегестрироваться"><b>регистрация</b></a>
            </li>
        </ul>
    </div>
</div> -->
