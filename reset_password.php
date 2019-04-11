<?php










 ?>
 <html>
 	<head>
 		<title>Восстановление пароля</title>
 		<meta charset="utf-8" />
 		    <link rel="icon" href="https://partners.saico.pro/favicon.png">
 		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
 		<link rel="stylesheet" href="/assets/css/main.css" />
    <style>
    #recover {
      width: 300px;
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
 										<h2>Восстановление пароля </h2>
 									</header>

                  <form name="form1" method="post" action="vosst_pass.php">
                  <p><i>Укажите свою почту </i><input type="text" name="username" id="recover" size="40" /></p>
                  <p>
                      <input type="submit" value="Восстановление" size="40">
                  </p>
                </form>


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
