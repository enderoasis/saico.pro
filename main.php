<?php
require 'db.php';
session_start();
 $_SESSION['mail'] = $check;
 $st = 1;
 	$fon = R::findOne('payments', 'email = ?', array($check));
  if ($fon) {
  $fnd	= R::findOne('payments','status = ?', array($st));
  }
if ($fnd) {
  header( "Location: https://education.saico.pro/study.php");
  $_SESSION['status'] = "OK";
}

 ?>



<!DOCTYPE HTML>

<html>
	<head>
		<title>Обучение by Saico.pro</title>
		<meta charset="utf-8" />
		    <link rel="icon" href="https://partners.saico.pro/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
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
										<h1>К сожалению , вам отказано в доступе к материалам</h1>
									</header>



									<h1>Почему?</h1>
									<p>Вы неосуществили оплату за курс.<br>
                    <h1></h1>
                    <h1></h1>

									<a  href="/yandexpayment.php" class="button">Оплатить</a><br>
                  <h1></h1>
                  <h1></h1>
                  <h1></h1>
                  <h1></h1>
									После оплаты вам откроется доступ ко всем имеющимся материалам курса.Прежде всего,мы нацелены на результаты и успехи наших клиентов.

									<br></p>

								</section>


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
