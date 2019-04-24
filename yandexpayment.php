<?php
session_start();
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Оплата</title>
		<meta charset="utf-8" />
		    <link rel="icon" href="https://partners.saico.pro/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<style>
	.colortext {
		color: red; /* Красный цвет выделения */
	}
 </style>
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

																			<li><a href="index.php" class="button">Вернуться на главную</a></li>
								</header>

							<!-- Content -->
								<section>
									<header class="main" >
										<h1>Оплата обучения</h1>
									</header>



									<p>Мы заинтересованы в твоем результативном обучении и успешной дальнейшей деятельности! Стоимость курса составляет  <strong>(2000 рублей).</strong><br></p>
                  Ты можешь осуществить оплату банковской картой <span class="colortext">(VISA ,Mastercard)</span> или Яндекс Кошельком.<br>
                  После оплаты тебе откроется доступ ко всем имеющимся материалам курса.<br>
                  Прежде всего, мы нацелены на результаты и успехи наших клиентов. <br>



									<br></p>

								<p> Что нужно знать перед оплатой:<br>

									<b><h4>Для начала нужно обязательно зарегистрироваться.</h4></b>
									  <?php if (!isset($_SESSION['reg']) && !isset($_SESSION['logged_user'] )) { ?> <a href="register.php"class="button">Регистрация</a> <?php } ?> <br>
									<h1></h1>
			<span class="colortext">	1) Выберите способ оплаты (Яндекс Кошелек, Банковская карта)<br>
                2) При оплате, тенге конвертируется в рубли по курсу.<br>
								3) Наш счёт официально подтверждён платёжной системой.<br>
								4) Вы будете перенаправлены на платёжную систему Яндекса.<br>
								5) Мы получаем только те данные,которые вы указываете у нас на сайте.<br>
						    6) Указанную ниже сумму в 2000 рублей не менять, иначе оплата не произведётся.<br>
							 7) Важно: Используйте и указывайте одну и ту же почту<br></span></p>
								</section>
<iframe src="https://money.yandex.ru/quickpay/shop-widget?writer=seller&targets=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0%20%D0%B7%D0%B0%20%D0%BA%D1%83%D1%80%D1%81%20%D0%BE%D1%82%20Saico%20Education&targets-hint=&default-sum=2000&button-text=11&payment-type-choice=on&mail=on&hint=&successURL=https%3A%2F%2Feducation.saico.pro%2F&quickpay=shop&account=410018884562159" width="100%" height="223" frameborder="0" allowtransparency="true" scrolling="no"></iframe>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>
