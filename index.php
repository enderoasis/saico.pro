<?php
 session_start();
 $_SESSION['refid'] = $_GET['ref'];


?>
<html>
	<head>
		<title>Saico Education - Главная</title>
    <link rel="icon" href="https://partners.saico.pro/favicon.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.php" class="logo"><strong>Обучение</strong> by Saico.pro</a>
									<ul class="icons">
        <?php if (!isset($_SESSION['reg']) && !isset($_SESSION['logged_user'] )) { ?> <li><a href="register.php"class="button">Регистрация</a></li> <?php } ?>
         <?php if (!isset($_SESSION['logged_user']) ) { ?> <li><a href="login.php"class="button">Вход</a></li> <?php } ?>

									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Добро пожаловать на марафон "SMM10"!<br />
											</h1>

										</header>

                    Возникли вопросы: как сделать бизнес аккаунт в социальных сетях более популярным? Как найти свою целевую аудиторию? Как сделать рекламу своего продукта или услуг более адресной и прибыльным бизнес? <br>
                    10 шагов к успешному маркетингу в социальных сетях.<br>
                    Мы научим тебя пользоваться социальными сетями в качестве каналов для продвижения компании, бренда, услуг и решать прочие бизнес-задачи.<br>
                    10 дней теоритических знаний и практических решений.<br>
                    Плюс приятный бонус за участие в партнерской программе.<br>
                    Будь с нами! Пройди марафон "SMM 10" стань "акулой" социальных сетей! </p>
										<ul class="actions">

										</ul>
									</div>
									<span class="image object">
				<img src="image/23.png" alt="" />
									</span>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>О курсе </h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">

												<h3>Партнёрство</h3>
												<p>Возможность заработка.Получите свои деньги и бонусы $ за приглашённых вами людей!</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Необходимые практические упражнения</h3>
												<p>Благодаря балансу теории и практики курса вы освоите все возможности социальных сетей: от создания вирусного контента до настроек таргетированной рекламы, научитесь определять бюджет на продвижение и прогнозировать его результат.</p>
											</div>
										</article>
									<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Высокие результаты обучения </h3>
												<p>Как показывают исследования американских ученых, результаты дистанционного обучения не уступают или даже превосходят результаты традиционных форм обучения. Большую часть учебного материала студент-дистанционник изучает самостоятельно. Это улучшает запоминание и понимание пройденных тем. А возможность сразу применить знания на практике, на работе помогает закрепить их. Кроме того, использование в процессе обучения новейших технологий делает его интереснее и живее.</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
													<h3>Максимально широкий охват тематик SMM</h3>
												<p>Программа SMM от Saico.pro охватывает все популярные социальные сети, способствующие продвижению вашего бизнеса, построению имиджа бренда и продажам. Кроме того, по окончанию курса вы сможете создать стратегию, охватывающую все сети.</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
							<section>
								<header class="major">
									<h2>В открытом доступе: </h2>
								</header>
								<div class="posts">
									<article>
				<a href="/lessons/11.php" class="image"><img src="image/p3.png" alt="" /></a>
										<h3> 7 Ошибок при продвижении</h3>
										<p>Вы узнаете о 7 самых распространенных ошибках в продвижении компании или бренда в Инстаграм.</p>
										<ul class="actions">
											<li><a href="/lessons/11.php" class="button">Начать</a></li>
										</ul>
									</article>


									<article>
				<a href="/lessons/14.php" class="image"><img src="image/p4.png" alt="" /></a>
										<h3> Идеальные размеры фото и видео</h3>
										<p>В этом курсе мы ответим на три часто задаваемых вопроса по поводу технических характеристик инста-сторис</p>
										<ul class="actions">
											<li><a href="/lessons/14.php" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
				<a href="/lessons/15.php" class="image"><img src="image/p7.png" alt="" /></a>
										<h3> Как использовать социальные сети</h3>
										<p>С помощью групп в социальных сетях легко наладить связь с конечным потребителем, повысить его лояльность, стимулировать спрос.</p>
										<ul class="actions">
											<li><a href="/lessons/15.php" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
				<a href="/lessons/16.php" class="image"><img src="image/p5.png" alt="" /></a>
										<h3> Всё об опросах в Instagram</h3>
										<p>В этом курсе мы расскажем вам о новых функциях Историй, а также приведём наглядные примеры, как вы можете использовать их на практике и даже для бизнеса.</p>
										<ul class="actions">
											<li><a href="/lessons/16.php" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
				<a href="/lessons/17.php" class="image"><img src="image/p2.png" alt="" /></a>
										<h3> Как сократить расходы на рекламу</h3>
										<p>Хотите сократить расходы на рекламу в Instagram, не пожертвовав при этом её эффективностью? Для этого достаточно правильно настроить таргетинг объявлений. Для этого социальная сеть предоставляет удобные инструменты. Вам просто нужно изучить их и научиться правильно использовать в ваших рекламных компаниях.</p>
										<ul class="actions">
											<li><a href="/lessons/17.php" class="button">Начать</a></li>
										</ul>
									</article>


									<article>
				<a href="/lessons/20.php" class="image"><img src="image/p8.png" alt="" /></a>
										<h3> Лучшие сервисы для продвижения</h3>
										<p>Курс содержит таблицу с описаниями сервисов. Это будет полезно для тех, кто не особо любит читать и хочет сам во всём разбираться. После таблицы вы найдёте более детальные описания  сервисов и ссылки на инструкции</p>
										<ul class="actions">
											<li><a href="/lessons/20.php" class="button">Начать</a></li>
										</ul>
									</article>
								</div>
							</section>


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->


							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Меню</h2>
									</header>
									<ul>
										<li><a href="login.php">Учебный портал</a></li>
										<li><a href="/info">Видеоинструкция</a></li>
										<li><a href="/partnership">Партнёрство</a></li>
										<li><a href="yandexpayment.php">Оплата обучения</a></li>
										<li><a href="offerta.html">Публичная оферта</a></li>

										<!--<li><a href="#">Etiam Dolore</a></li>
										<li><a href="#">Adipiscing</a></li>
										<li>-->


										<!--<li><a href="#">Maximus Erat</a></li>
										<li><a href="#">Sapien Mauris</a></li>
										<li><a href="#">Amet Lacinia</a></li> -->
									</ul>


							<!-- Section -->


							<!-- Section -->
								<section>
									<header class="major">
                    <h1></h1>
										<h2>Связь с нами</h2>
									</header>
									<p>Команда saico.pro готова вам помочь в любое время. Ниже приведены контакты в целях оказания тех.поддержки,более эффективного сотрудничества и.т.д</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="mailto:info@saico.pro">info@saico.pro</a></li>
							<li class="fa-phone">+7 707 173 6161</li>
										<li class="fa-home">ул. Достык, 5<br />
										г.Астана, Республика Казахстан.</li>
									</ul>
								</section>
</nav>
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Все права защищены.</p>
								</footer>

						</div>
					</div>
<div id="1" class="modalDialog">
	<div>
		<a href="#close" title="Закрыть" class="close">X</a>
		<h2>Первый урок является пробным и бесплатным </h2>
		<p>Чтобы получить доступ ко всем материалам курса ,пожалуйста оплатите данный курс. <br>
			 После оплаты, вам будут доступны все материалы, а так же возможность участия в нашей партнёрской программе , в которой можно будет подзаработать,тем самым покрыв затраты на обучение и не только.<br>
			 <a href="yandexpayment.php" class="button" >Перейти к оплате</a>
			 <a href="first.html" class="button" >Перейти к уроку</a>

			 <h1>

			 </h1>
			 <h1>

			 </h1>
			 <strong>С уважением, Администрация Сайта.</strong>
			</p>
	</div>
</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
