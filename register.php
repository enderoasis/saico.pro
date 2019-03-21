<?php
session_start();
require 'db.php';

	$data = $_POST;



	//если кликнули на button
	if ( isset($data['do_signup']) )
	{
    // проверка формы на пустоту полей
		$errors = array();
		if ( trim($data['login']) == '' )
		{
			$errors[] = 'Введите логин';
		}

		if ( trim($data['email']) == '' )
		{
			$errors[] = 'Введите Email';
		}

		if ( $data['password'] == '' )
		{
			$errors[] = 'Введите пароль';
		}

		if ( $data['password_2'] != $data['password'] )
		{
			$errors[] = 'Повторный пароль введен не верно!';
		}

		//проверка на существование одинакового логина


    //проверка на существование одинакового email
		if ( R::count('users', "email = ?", array($data['email'])) > 0)
		{
			$errors[] = 'Пользователь с таким Email уже существует!';
		}



		if ( empty($errors) )
		{

			//ошибок нет, теперь регистрируем
			$rf = basename(parse_url('https://education.saico.pro/register.php/1',  PHP_URL_PATH));
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->referer = $rf;
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT); //пароль нельзя хранить в открытом виде, мы его шифруем при помощи функции password_hash для php > 5.6
			R::store($user);

header("Content-Type: text/html; charset=UTF-8");
header('Refresh: 3; url=login.php');
                //Составляем зашифрованный и уникальный token



<<<<<<< HEAD
<<<<<<< HEAD
								header("Content-Type: text/html; charset=UTF-8");
								header('Refresh: 3; url=/login.php');
=======
							$url = "https://partners.saico.pro/nrfpp?name=&email=".$email."&password=".$pass."&referer=".$ref;
								$curl = curl_init();
								curl_setopt($curl, CURLOPT_URL, $url);
								curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
								curl_setopt($curl, CURLOPT_HEADER, false);
								$data = curl_exec($curl);
								curl_close($curl);

>>>>>>> parent of 6ab5a1b... Update register.php


>>>>>>> parent of 6ab5a1b... Update register.php
                //Добавляем данные в таблицу confirm_users
                //$confirmuser = R::dispense('confirmusers');
			//$confirmuser->email = $data['email'];
			//$confirmuser->token = $token;
			//R::store($confirmuser);



                    //Составляем заголовок письма
                    $subject = "Подтверждение почты на сайте ".$_SERVER['HTTP_HOST'];

                    //Устанавливаем кодировку заголовка письма и кодируем его
                    $subject = "=?utf-8?B?".base64_encode($subject)."?=";

                    //Составляем тело сообщения
                    $message = 'Здравствуйте! <br/> <br/> Сегодня '.date("d.m.Y", time()).', неким пользователем была произведена регистрация на сайте <a href="'.$address_site.'">'.$_SERVER['HTTP_HOST'].'</a> используя Ваш email. Если это были Вы, то, пожалуйста, подтвердите адрес вашей электронной почты, перейдя по этой ссылке: <a href="'.$address_site.'activation.php?token='.$token.'&email='.$email.'">'.$address_site.'activation/'.$token.'</a> <br/> <br/> В противном случае, если это были не Вы, то, просто игнорируйте это письмо. <br/> <br/> <strong>Внимание!</strong> Ссылка действительна 24 часа. После чего Ваш аккаунт будет удален из базы.';

                    //Составляем дополнительные заголовки для почтового сервиса mail.ru
                    //Переменная $email_admin, объявлена в файле dbconnect.php
                    $headers = "FROM: $email_admin\r\nReply-to: $email_admin\r\nContent-type: text/html; charset=utf-8\r\n";

                    //Отправляем сообщение с ссылкой для подтверждения регистрации на указанную почту и проверяем отправлена ли она успешно или нет.
                    if(mail($email, $subject, $message, $headers)){
                        $_SESSION["success_messages"] = "<h4 class='success_message'><strong>Регистрация прошла успешно!!!</strong></h4><p class='success_message'> Теперь необходимо подтвердить введенный адрес электронной почты. Для этого, перейдите по ссылке указанную в сообщение, которую получили на почту ".$email." </p>";

                        //Отправляем пользователя на страницу регистрации и убираем форму регистрации
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ".$address_site."/login.php");
                        exit();

                    }

				}


?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>Регистрация</title>

    <meta name="author" content="A.R.G." />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="/css/styles.min.css" rel="stylesheet" media="screen">
    <link href="/css/sweet-alert.css" rel="stylesheet" media="screen">
    <link href="/css/emoji.css" rel="stylesheet">

        <script type="text/javascript">
      var widgetId1;
      var widgetId2;
      var widgetId3;
      var onloadCallback = function() {
        widgetId1 = grecaptcha.render(document.getElementById('chl'), {
          'sitekey' : '6LdSi2QUAAAAAIIL9OBjERVUi81AYNyQHBzXbvR7'
        });
        widgetId2 = grecaptcha.render(document.getElementById('chr'), {
          'sitekey' : '6LdSi2QUAAAAAIIL9OBjERVUi81AYNyQHBzXbvR7'
        });
        widgetId3 = grecaptcha.render(document.getElementById('cl'), {
          'sitekey' : '6LdSi2QUAAAAAIIL9OBjERVUi81AYNyQHBzXbvR7'
        });
      };
    </script>

    <script src="/js/vendor/sweet-alert.js"></script>
    <script src="/js/vendor/call.js"></script>
    <!--noindex--><!--googleoff: index--><noscript><span>Включите поддержку JavaScript :)</span></noscript><!--googleon: index--><!--/noindex-->
</head>

<body class="is-preloader preloading parallax">

    <div id="preloader" data-spinner="spinner7" data-screenbg="#fff"></div>

    <div class="page-wrapper">

	<div style="display:none;">

    </div>
    <header class="navbar navbar-fullwidth">
        <div class="topbar">
            <div class="container">


                <div class="nav-toggle">
                    <span></span>
                </div>

                <div class="toolbar">

                    <nav class="main-navigation">
                        <ul class="menu">


                            <li class="menu-item-has-children login-50">
                                <a class="login-50-a" id="log" data-toggle="modal" data-target="#loginModal">Войти</a>
			                </li>

                            <li class="menu-item-has-children login-50">
                                <a class="login-50-a" id="reg" data-toggle="modal" data-target="#registerModal">Регистрация</a>
			                </li>

			                <li class="m-none-s-n menu-item-has-children">
			                    <a class="m-none-s">|</a>
			                </li>


<!--
                            <li class="menu-item-has-children">
                                <a href="price.php">Прайс</a>
                            </li>

			                <li class="menu-item-has-children" id="newsReload">
                                <a id="news" href="news.php">Новости</a>
                            </li>

                            <li class="menu-item-has-children" id="contactsReload">
                                <a id="contacts" href="contacts.php">Контакты</a>
                            </li>
-->
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>		<div class ="headfix"></div>

<section class="page-title">
    <div class="container"></div>
</section>

    <section class="container padding-bottom-3x">
            <h1 class="block-title text-center scrollReveal sr-bottom">Регистрация</h1>
		    <hr class="scrollReveal sr-bottom">

            <div class="row padding-top padding-bottom-3x scrollReveal sr-scaleUp sr-delay-2 sr-ease-in-out-back">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <form id="register" class="borddiscr text-center" style="padding: 0 40px 40px 40px;" action="register.php"  method="post">

                        <div class="text-center auth-div">
                            <ul class="nav-tabs auth-ul" role="tablist">
                                <li class="auth-li" style="border-right: 1px solid #ececec;"><a class="auth-a" href="login.php">Войти</a></li>
                                <li class="auth-li"><a class="auth-a" href="register.php">Регистрация</a></li>
                            </ul>
                        </div>
			            <hr class="auth-hr">

                        <input type="hidden" name="action" class="form-control" value="register">
                        <div class="form-group">
                            <label class = "label lblorder text-left">Придумайте логин:</label>
                            <input type="text" name="login" class="form-control" value="<?php echo @$data['login']; ?>" placeholder="Логин" required>
                        </div>
			            <div class="form-group">
                            <label class = "label lblorder text-left">Укажите вашу почту:</label>
                            <input type="email" name="email" class="form-control" value="<?php echo @$data['email']; ?>" placeholder="Почта" required>
                        </div>
                        <div class="form-group">
                            <label class = "label lblorder text-left">Придумайте пароль:</label>
                            <input type="password" name="password" class="form-control" value="<?php echo @$data['password']; ?>" placeholder="Пароль" required>
                        </div>
                        <div class="form-group">
                            <label class = "label lblorder text-left">Повторите пароль:</label>
                            <input type="password" name="password_2" class="form-control" value="<?php echo @$data['password_2']; ?>" placeholder="Повторите пароль" required>
                        </div>
                        <div id="captcha" class="form-group" style="display:none">
                            <hr>
                            <label class = "label lblorder text-left">Подтвердите что вы не робот:</label>
                            <div class = "g-recaptcha" id="cl"></div>
                        </div>
                        <button type="submit" name="do_signup">Регистрация</button>
			            <hr>
                        <a href="login.php" class="text-sm no-border">Уже зарегистрированы?</a>
                    </form>
                </div>
            </div>
    </section>

	<div style="display:none;">

    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <!--noindex--><!--googleoff: index--><h4>Войти</h4><!--googleon: index--><!--/noindex-->
                <hr>


                <form id="loginModalForm" action="javascript:void(null);" onsubmit="signInModal();" method="post">
                    <input type="hidden" name="action" class="form-control" value="login">
                    <input type="text" name="login" class="form-control" placeholder="Логин" required>
                    <input type="password" name="password" class="form-control" placeholder="Пароль" required>
                    <div id="captchaModalL" class="form-group" style="display:none">
                        <label class = "label lblorder text-left">Подтвердите что вы не робот:</label>
                        <div class = "g-recaptcha" id="chl"></div>
                    </div>
			        <hr>
                    <div class="form-group">
                        <button type="submit" name="submit">Войти</button>
                    </div>
			        <hr>
                    <div class="text-center">
                        <!--noindex--><!--googleoff: index--><span class="text-sm text-semibold"><a class="no-border" href="reset.php">Забыли пароль?</a></span><!--googleon: index--><!--/noindex-->
                    </div>
                </form>


            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <!--noindex--><!--googleoff: index--><h4>Регистрация</h4><!--googleon: index--><!--/noindex-->
                <hr>


                <form id="registerModalForm" action="javascript:void(null);" onsubmit="signUpModal();" method="post">
                    <input type="hidden" name="action" class="form-control" value="register">
                    <input type="text" name="login" class="form-control" placeholder="Логин" required>
                    <input type="email" name="mail" class="form-control" placeholder="Почта" required>
			        <input type="password" name="password" class="form-control" placeholder="Пароль" required>
			        <input type="password" name="re-password" class="form-control" placeholder="Повторите пароль" required>
                    <div id="captchaModalR" class="form-group" style="display:none">
                        <label class = "label lblorder text-left">Подтвердите что вы не робот:</label>
                        <div class = "g-recaptcha" id="chr"></div>
                    </div>
			        <hr>
                    <div class="form-group">
                        <button type="submit" name="submit2">Регистрация</button>
                    </div>
			        <hr>
                    <div class="text-center">
                        <!--noindex--><!--googleoff: index--><span class="text-sm text-semibold"><a class="no-border" href="login.php">Уже зарегистрированы?</a></span><!--googleon: index--><!--/noindex-->
                    </div>
                </form>


            </div>
        </div>
    </div>

        </div>


        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter49526263 = new Ya.Metrika2({
                            id:49526263,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                        });
                    } catch(e) { }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/49526263" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

        <script src="/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="/js/vendor/jquery.easing.min.js"></script>
        <script src="/js/vendor/preloader.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/vendor/placeholder.js"></script>
        <script src="/js/vendor/smoothscroll.js"></script>
        <script src="/js/vendor/velocity.min.js"></script>
        <script src="/js/vendor/isotope.pkgd.min.js"></script>
        <script src="/js/vendor/jquery.stellar.min.js"></script>
        <script src="/js/vendor/scrollreveal.min.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
