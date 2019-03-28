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
										<li><a href="/login.php" class="button">Вход</a></li>
										<li><a href="/register.php"class="button">Регистрация</a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Возможности Stories</h1>
									</header>

									<!-- Content -->

										<h2 id="elements"></h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												<img src="/image/21.PNG">
												<img src="/image/22.PNG">
												<img src="/image/24.PNG">
                        <p>Рисунок 2<br>
Если за последние сутки вы  ничего не выкладывали в stories, то возле главной фотографии будет кнопка +.

</p>
												<img src="/image/25.PNG">
                        <p>Рисунок 3<br>
После того как вы закинете в stories публикации, вокруг главной фотографии появится красный кружок.

                      </p>
												<img src="/image/26.PNG">
												<img src="/image/27.PNG">
												<img src="/image/28.PNG">
                        <img src="/image/29.PNG">
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
