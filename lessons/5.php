<?php
session_start();

if (!isset( $_SESSION['logged_user'] )) {
  header( 'Refresh: 0; url=login.php' );
}

 if (!isset( 	$_SESSION['haspaid'] )) {
    header( 'Refresh: 0; url=main.php' );
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
										<h1>Контент план и копирайтинг</h1>
									</header>

									<!-- Content -->

										<h2 id="elements"></h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												<img src="/image/30.PNG">
												<img src="/image/31.PNG">
												<img src="/image/32.PNG">

												<img src="/image/33.PNG">

												<img src="/image/34.PNG">
												<img src="/image/35.PNG">
												<img src="/image/36.PNG">
                        <img src="/image/37.PNG">
                        <img src="/image/38.PNG">
                        <img src="/image/39.PNG">
                        <img src="/image/40.PNG">
                        <img src="/image/41.PNG">
                        <img src="/image/42.PNG">
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
