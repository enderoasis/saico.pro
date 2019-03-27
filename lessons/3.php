<?php
require 'db.php';
session_start();

if (!isset($_SESSION['logged_user'])) {

header( 'Refresh: 0; url=login.php' );
}

	$check	=  $_SESSION['mail'];
  $cets = R::findOne('users', 'email = ?', array($check));
  if ($cets) {
    if ($cets->status == 1) {
      $st = 1;
      $_SESSION['status'] = $st;
    }
    else {
      $users = R::findOne('payments', 'email = ?', array($check));
    }
  }
if ($users) {
  if ($users->status == 1) {
    $st = 1;
  $_SESSION['status'] = $st;

  }
  else {
    header( 'Refresh: 0; url=main.php' );
  }
}
?>
<html>
	<head>
		<title>Учебный портал</title>
		<meta charset="utf-8" />
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
									<a href="index.html" class="logo"><strong>Обучение</strong> by Saico.pro</a>
									<ul class="icons">
										<li><a href="/index.php" class="button">Главная</a></li>
										<li><a href="/login.php" class="button">Вход</a></li>
										<li><a href="/register.php"class="button">Регистрация</a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Учимся правильно фотографировать</h1>
									</header>

									<!-- Content -->

										<h2 id="elements"></h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												<img src="/image/9.PNG">
												<img src="/image/10.PNG">
												<img src="/image/11.PNG">
												<img src="/image/12.PNG">
												<img src="/image/13.PNG">
												<img src="/image/14.PNG">
												<img src="/image/15.PNG">
												<img src="/image/16.PNG">
                        <img src="/image/17.PNG">
                        <img src="/image/18.PNG">
                        <img src="/image/19.PNG">
                        <img src="/image/20.PNG">
													<div class="row">



														</div>

												<!--
													<h3>Form</h3>

													<form method="post" action="#">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
															</div>
															<div class="col-6 col-12-xsmall">
																<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
															</div>-->
															<!-- Break -->
															</div>
														</div>
													</section>
												</div>
											</div>
										</div>


				<!-- Sidebar -->


			</div>

		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>
