<?php
	require 'db.php';

	$data1 = $_POST;

	if ( isset($data1['do_login']) )
	{
		$user = R::findOne('users', 'email = ?', array($data1['email']));
	}
		else
		{
			echo '<div id="errors" style="color:red;">Неправильно указана почта!<br/>.</div><hr>';
		}

		if ( $user )
		{
			//логин существует
			if ( password_verify($data1['password'], $user->password))
			{
		 $st = 1;
		 $check	= R::findOne('users','status = ?', array($st));
	 }}
	 else
	 {
		echo '<div id="errors" style="color:red;">Вы не оплатили курс!<br/>.</div><hr>';
	 }

	if	( $check)
	{		//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $user;
				echo '<div style="color:green;">Вы авторизованы!<br/>.</div><hr>';
				header( 'Refresh: 3; url=index.php' );
			}

		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
			header('Refresh: 3; url=login.php');
		}

?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <title>saico.pro</title>
    <link rel="icon" href="https://partners.saico.pro/favicon.png">

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
        <p>Накрутить подписчиков, лайки, просмотры в Инстаграм, Вконтакте, Телеграм, Ютуб и другие социальные сети. Мгновенный запуск. Самые низкие цены, от 50 коп.</p>
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

		<!--
                            <li class="menu-item-has-children login-50">
                                <a class="login-50-a" id="log" data-toggle="modal" data-target="#loginModal">Войти</a>
			                </li>

                            <li class="menu-item-has-children login-50">
                                <a class="login-50-a" id="reg" data-toggle="modal" data-target="#registerModal">Регистрация</a>
			                </li>

			                <li class="m-none-s-n menu-item-has-children">
			                    <a class="m-none-s">|</a>
			                </li>



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
<style>
    @media screen and (max-width: 410px) {
        #rc-imageselect, .g-recaptcha {transform:scale(0.90);-webkit-transform:scale(0.90);transform-origin:0 0;-webkit-transform-origin:0 0;}
    }
    @media screen and (max-width: 380px) {
        #rc-imageselect, .g-recaptcha {transform:scale(0.75);-webkit-transform:scale(0.75);transform-origin:0 0;-webkit-transform-origin:0 0;}
    }
    @media screen and (max-width: 336px) {
        #rc-imageselect, .g-recaptcha {transform:scale(0.70);-webkit-transform:scale(0.70);transform-origin:0 0;-webkit-transform-origin:0 0;}
    }
</style>

<section class="page-title">
    <div class="container"></div>
</section>

    <section class="container padding-bottom-3x">
            <h1 class="block-title text-center scrollReveal sr-bottom">Войти в кабинет</h1>
		    <hr class="scrollReveal sr-bottom">

            <div class="row padding-top padding-bottom-3x scrollReveal sr-scaleUp sr-delay-2 sr-ease-in-out-back">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <form id="login" class="borddiscr text-center" style="padding: 0 40px 40px 40px;" action="login.php" method="post">

                        <div class="text-center auth-div">
                            <ul class="nav-tabs auth-ul" role="tablist">
                                <li class="auth-li" style="border-right: 1px solid #ececec;"><a class="auth-a" href="login.php">Войти</a></li>
                                <li class="auth-li"><a class="auth-a" href="/register.php">Регистрация</a></li>
                            </ul>
                        </div>
			            <hr class="auth-hr">

                        <input type="hidden" name="action" class="form-control" value="login">
                        <div class="form-group">
                            <label class = "label lblorder text-left">Ваша почта:</label>
                            <input type="email" name="email" class="form-control" value="<?php echo @$data1['email']; ?>" placeholder="Ваша почта" required>
                        </div>
                        <div class="form-group">
                            <label class = "label lblorder text-left">Ваш пароль:</label>
                            <input type="password" name="password" class="form-control" value="<?php echo @$data1['password']; ?>" placeholder="Пароль" required>
                        </div>
                        <div id="captcha" class="form-group" style="display:none">
                            <hr>
                            <label class = "label lblorder text-left">Подтвердите что вы не робот:</label>
                            <div class = "g-recaptcha" id="cl"></div>
                        </div>
                       <button type="submit" name="do_login">Войти</button>
			            <hr>
                        <a href="reset.php" class="text-sm no-border">Забыли пароль?</a>
                    </form>
                </div>
            </div>
    </section>
	<div style="display:none;">
        <p>Накрутить подписчиков, лайки, просмотры в Инстаграм, Вконтакте, Телеграм, Ютуб и другие социальные сети. Мгновенный запуск. Самые низкие цены, от 1руб.</p>
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
