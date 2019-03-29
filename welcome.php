<?php
require 'db.php';

session_start();
$pc2 = $_SESSION['pc2'];
$identification = R::findOne('users', ' email = ? ', array($pc2));
$limit = 200;
if ($identification->id <= $limit) {
	$_SESSION['haspaid'] = $limit;
}



 ?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Saico Education - Welcome</title>
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
									<a href="index.php" class="logo"><strong>Education</strong>Saico.pro</a>
									<ul class="icons">


									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Добро пожаловать на марафон "SMM10"!<br />
											</h1>

										</header>
										<p><b>Вы успешно зарегистрировались!</b>
«Saico education»  гарантирует конфиденциальность вашей информации. Мы создали специальный портал. Здесь предоставлены всевозможные материалы для обучения,а так же выдача задании для закрепления пройденных уроков на каждый день. Также на этот портал вы будете отправлять свои отчеты. Марафон будет проводиться только здесь. </p>
										<ul class="actions">
											<li><a href="#1" class="button big">Перейти</a></li>
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
												<p>Благодаря балансу теории и практики курса, вы освоите все возможности социальных сетей: от создания вирусного контента до настроек таргетированной рекламы, научитесь определять бюджет на продвижение и прогнозировать его результат.</p>
											</div>
										</article>
										<!--<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Сертификация </h3>
												<p>Успешное окончание курса дает возможность получить уникальный сертификат об окончании.</p>
											</div>
										</article>-->
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
									<h2>Обучение</h2>
								</header>
								<div class="posts">
									<article>
										<a href="#1" class="image"><img src="image/p2.png" alt="" /></a>
										<h3>1.Как сократить расходы на рекламу(Пробный урок)</h3>
										<p>Хотите сократить расходы на рекламу в Instagram, не пожертвовав при этом её эффективностью? Для этого достаточно правильно настроить таргетинг объявлений. Для этого социальная сеть предоставляет удобные инструменты. Вам просто нужно изучить их и научиться правильно использовать в ваших рекламных компаниях.</p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p3.png" alt="" /></a>
										<h3>2. 7 самых распространенных ошибках в продвижении компании или бренда в Инстаграм</h3>
										<p>Чем больше препятствий вы будете создавать на пути потенциального клиента, тем меньше шансов, что он станет клиентом реальным. Скорее всего, человек просто подпишется на уже открытый аккаунт вашего конкурента.
Это базовая ошибка, но, к сожалению, время от времени, мы все еще наталкиваемся на такие вот закрытые аккаунты брендов. Если закрытые аккаунты для личных профилей — это нормально, то для компаний это, как минимум, странно.
</p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p4.png" alt="" /></a>
										<h3>Учимся правильно фотографировать</h3>
										<p>Несмотря на то, что информация интересная и познавательная,  она набирает мало просмотров и лайков. Причина тому - неправильно выбранное фото. Мы научим вас делать пропорциональное, интересное и красивое фото.</p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p5.png" alt="" /></a>
										<h3>Возможности Stories</h3>
										<p>Сегодня мы с вами будем говорить о stories. Сейчас stories в конверсии. Он  стал важнее публикаций на главных страницах. Поэтому вы должны уметь пользоваться  всеми возможностями stories. </p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/content.png" alt="" /></a>
										<h3>Контент план и копирайтинг </h3>
										<p>Хороший и интересный пост требует много времени. Чтобы выложить познавательную информацию, вам нужен план. Этот план поможет вам выбрать и подготовить «вкусную» тему для вашей аудитории. </p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/ser.png" alt="" /></a>
										<h3>Лучшие сервисы для автоматического продвижения в Инстаграм 2019</h3>
										<p>В эпохе наших прогрессивных технологий «видеоконтент»  в обществе стал наиболее эффективным средством доставки информации и привлечения потребителей. </p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p6.png" alt="" /></a>
										<h3>Прямой эфир  и Таргетинг</h3>
										<p>Используя Instagram, вы можете транслировать в прямом эфире, отвечать на вопросы читателя, или вы можете использовать его, чтобы показать сцену, то что происходит в данное время. </p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p8.png" alt="" /></a>
										<h3>Дополнительные функции </h3>
										<p>Instagram является визуальной социальной страницей, и поэтому мы загружаем фото-видео материалы. Чтобы изменить качество фото, мы используем обрабатывающие программы, подробнее о них. </p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p9.png" alt="" /></a>
										<h3>Акции и конкурсы в социальных сетях  и Статистика в Instagram</h3>
										<p>Вы же любите получать подарки и радовать себя? И ваши читатели тоже любят. Поэтому не уставайте их радовать. А для этого вам нужно устраивать конкурсы и акции.</p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
										</ul>
									</article>
									<article>
										<a href="#1" class="image"><img src="image/p10.png" alt="" /></a>
										<h3>IGTV - новая эра телевидения</h3>
										<p>Социальный интеллект - это совокупность способностей, определяющая успешность социального взаимодействия.</p>
										<ul class="actions">
											<li><a href="#1" class="button">Начать</a></li>
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
										<li><a href="index.php">Главная</a></li>
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
								</nav>

							<!-- Section -->


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Связь с нами</h2>
									</header>
									<p>Команда saico.pro готова вам помочь в любое время. Ниже приведены контакты,в целях оказания тех.поддержки,сотрудничества и.т.д</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="mailto:info@saico.pro">info@saico.pro</a></li>
							<li class="fa-phone">+7 707 173 6161</li>
										<li class="fa-home">ул.Достык, 5<br />
										г.Астана, Республика Казахстан.</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Все права защищены. Design: by D.T</p>
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
