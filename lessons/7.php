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
										<h1>Прямой эфир и Таргетинговая реклама</h1>
									</header>

									<!-- Content -->

										<h2 id="elements"></h2>
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">



                        <img src="/image/60.PNG">
                        <img src="/image/61.PNG">
                        <img src="/image/62.PNG">
                        <img src="/image/63.PNG">
                        <img src="/image/64.PNG">
                        <img src="/image/65.PNG">
                        <img src="/image/66.PNG">
                        <img src="/image/67.PNG">
                        <img src="/image/68.PNG">
                        <img src="/image/69.PNG">
                        <img src="/image/71.PNG">
                        <img src="/image/72.PNG">
                        <img src="/image/73.PNG">
                        <img src="/image/74.PNG">
                        <img src="/image/75.PNG">
                        <img src="/image/76.PNG">
                        <img src="/image/77.PNG">
                        <img src="/image/78.PNG">
                        <img src="/image/79.PNG">
                        <img src="/image/80.PNG">
                        <img src="/image/81.PNG">
                        <img src="/image/82.PNG">
                        <img src="/image/83.PNG">
                        <img src="/image/84.PNG">

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
