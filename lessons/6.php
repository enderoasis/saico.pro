<?php
session_start();

if (!isset( $_SESSION['logged_user'] )) {
  header( 'Refresh: 0; url=/login.php' );
}

 if (!isset( 	$_SESSION['haspaid'] )) {
    header( 'Refresh: 0; url=/main.php' );
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
									<li><a href="/send.php" class="button">Домашнее задание</a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Лучшие сервисы для продвижения в социальных сетях</h1>
									</header>

									<!-- Content -->

										<h2 id="elements"></h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">


												<img src="/image/43.PNG">

												<img src="/image/44.PNG">
												<img src="/image/45.PNG">
												<img src="/image/46.PNG">
                        <img src="/image/47.PNG">
                        <img src="/image/48.PNG">
                        <img src="/image/49.PNG">
                        <img src="/image/50.PNG">
                        <img src="/image/51.PNG">
                        <img src="/image/52.PNG">
                        <img src="/image/53.PNG">
                        <img src="/image/54.PNG">
                        <img src="/image/55.PNG">
                        <img src="/image/56.PNG">
                        <img src="/image/57.PNG">
                        <img src="/image/58.PNG">
                        <img src="/image/59.PNG">
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
