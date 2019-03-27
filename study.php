<?php

session_start();
if ($_SESSION['status'] != "OK") {
  	echo '<div style="color:green;">Статус неактивен<br/>.</div><hr>';
header( 'Refresh: 0; url=main.php' );
}

if (!isset($_SESSION['logged_user'])) {
  	echo '<div style="color:red;">Пожалуйста, выполните вход!<br/>.</div><hr>';
header( 'Refresh: 0; url=login.php' );
}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Учебный портал</title>
    <meta charset="utf-8" />
        <link rel="icon" href="https://partners.saico.pro/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">
    <div id="wrapper">
      <div id="main">
        <div class="inner">
      <header id="header">
        <h2>Обучение</h2>

        <ul class="icons">

                            <li><a href="https://partners.saico.pro" class="button2">Партнёрство</a></li>
                            <li><a href="/index.php"class="button">Главная</a></li>
                          </ul>
      </header>
      <section>
      <div class="posts">
        <article>
          <a href="/lessons/1.php" class="image"><img src="image/pc1.jpeg" alt="" /></a>
          <h3>1.Как сократить расходы на рекламу</h3>
          <p>Хотите сократить расходы на рекламу в Instagram, не пожертвовав при этом её эффективностью? Для этого достаточно правильно настроить таргетинг объявлений. Для этого социальная сеть предоставляет удобные инструменты. Вам просто нужно изучить их и научиться правильно использовать в ваших рекламных компаниях.</p>
          <ul class="actions">
            <li><a href="/lessons/1.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/2.php" class="image"><img src="image/23.png" alt="" /></a>
          <h3>2. 7 самых распространенных ошибках в продвижении компании или бренда в Инстаграм</h3>
          <p>Чем больше препятствий вы будете создавать на пути потенциального клиента, тем меньше шансов, что он станет клиентом реальным. Скорее всего, человек просто подпишется на уже открытый аккаунт вашего конкурента.
    Это базовая ошибка, но, к сожалению, время от времени, мы все еще наталкиваемся на такие вот закрытые аккаунты брендов. Если закрытые аккаунты для личных профилей — это нормально, то для компаний это, как минимум, странно.
    </p>
          <ul class="actions">
            <li><a href="/lessons/2.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/3.php" class="image"><img src="images/pic03.jpg" alt="" /></a>
          <h3>3.Учимся правильно фотографировать</h3>
          <p>Несмотря на то, что информация интересная и познавательная,  она набирает мало просмотров и лайков. Причина тому - неправильно выбранное фото. Мы научим вас делать пропорциональное, интересное и красивое фото.</p>
          <ul class="actions">
            <li><a href="/lessons/3.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/4.php" class="image"><img src="images/pic04.jpg" alt="" /></a>
          <h3>4.Автоматическая раскрутка</h3>
          <p>Пользователи стали более «учёными» и фейковыми цифрами их больше не проведёшь. Ни для кого не секрет, что на данный момент рулит качество контента и уровень активности в соц. сети.  </p>
          <ul class="actions">
            <li><a href="/lessons/4.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/5.php" class="image"><img src="images/pic05.jpg" alt="" /></a>
          <h3>5.8 Советов по продвижению </h3>
          <p>Мы задались вопросом, почему реклама, несмотря на огромный прогресс в сфере таргетинга объявлений, остаётся на уровне десятилетней давности. Ведь должен быть способ успешно продвигать бренды. И вот что выяснилось. </p>
          <ul class="actions">
            <li><a href="/lessons/5.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/6.php" class="image"><img src="images/pic06.jpg" alt="" /></a>
          <h3>6.Лучшие сервисы для автоматического продвижения в Инстаграм 2019</h3>
          <p>В эпохе наших прогрессивных технологий «видеоконтент»  в обществе стал наиболее эффективным средством доставки информации и привлечения потребителей. </p>
          <ul class="actions">
            <li><a href="/lessons/6.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/7.php" class="image"><img src="images/pic06.jpg" alt="" /></a>
          <h3>7.Таргетинговая реклама в Instagram</h3>
          <p>Рекламировать в Инстаграм пока что не так дорого. В связи с тем, что конкурентов-рекламодателей в Инстаграм у нас не так много, реклама обходится дешевле </p>
          <ul class="actions">
            <li><a href="/lessons/7.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/8.php" class="image"><img src="images/pic06.jpg" alt="" /></a>
          <h3>8.Лучшие сервисы для продвижения </h3>
          <p>Instagram является визуальной социальной страницей, и поэтому мы загружаем фото-видео материалы. Чтобы изменить качество фото, мы используем обрабатывающие программы, подробнее о них. </p>
          <ul class="actions">
            <li><a href="/lessons/8.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/9.php" class="image"><img src="images/pic06.jpg" alt="" /></a>
          <h3>9.Акции и конкурсы в социальных сетях  и Статистика в Instagram</h3>
          <p>Вы же любите получать подарки и радовать себя? И ваши читатели тоже любят. Поэтому не уставайте их радовать. А для этого вам нужно устраивать конкурсы и акции.</p>
          <ul class="actions">
            <li><a href="/lessons/9.php" class="button">Перейти</a></li>
          </ul>
        </article>
        <article>
          <a href="/lessons/10.php" class="image"><img src="images/pic06.jpg" alt="" /></a>
          <h3>10.Почему ваша реклама не работает</h3>
          <p>Эта проблема часто возникает, когда реклама размещается у популярного блогера. Нелегко с первого взгляда определить — какая тема хорошо зайдет у его подписчиков, а какая нет.</p>
          <ul class="actions">
            <li><a href="/lessons/10.php" class="button">Перейти</a></li>
          </ul>
        </article>
</section>
      </div>


    </section>
  </body>
</html>
