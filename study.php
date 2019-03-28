<?php
session_start();

if (!isset( $_SESSION['logged_user'] )) {
  header( 'Refresh: 0; url=login.php' );
}

 if (!isset( 	$_SESSION['haspaid'] )) {
    header( 'Refresh: 0; url=main.php' );
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
                            <li><a href="/logout.php" class="button">Выход</a></li>
                          </ul>
      </header>
      <section>

        <div class="posts">
          <article>
            <a href="/lessons/1.php" class="image"><img src="image/p2.png" alt="" /></a>
            <h3>1.Как сократить расходы на рекламу (Пробный урок)</h3>
            <p>Хотите сократить расходы на рекламу в Instagram, не пожертвовав при этом её эффективностью? Для этого достаточно правильно настроить таргетинг объявлений. Для этого социальная сеть предоставляет удобные инструменты. Вам просто нужно изучить их и научиться правильно использовать в ваших рекламных компаниях.</p>
            <ul class="actions">
              <li><a href="/lessons/1.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/2.php" class="image"><img src="image/p3.png" alt="" /></a>
            <h3>2. 7 самых распространенных ошибках в продвижении компании или бренда в Инстаграм</h3>
            <p>Чем больше препятствий вы будете создавать на пути потенциального клиента, тем меньше шансов, что он станет клиентом реальным. Скорее всего, человек просто подпишется на уже открытый аккаунт вашего конкурента.
Это базовая ошибка, но, к сожалению, время от времени, мы все еще наталкиваемся на такие вот закрытые аккаунты брендов. Если закрытые аккаунты для личных профилей — это нормально, то для компаний это, как минимум, странно.
</p>
            <ul class="actions">
              <li><a href="/lessons/2.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/3.php" class="image"><img src="image/p4.png" alt="" /></a>
            <h3>Учимся правильно фотографировать</h3>
            <p>Несмотря на то, что информация интересная и познавательная,  она набирает мало просмотров и лайков. Причина тому - неправильно выбранное фото. Мы научим вас делать пропорциональное, интересное и красивое фото.</p>
            <ul class="actions">
              <li><a href="/lessons/3.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/4.php" class="image"><img src="image/p5.png" alt="" /></a>
            <h3>Возможности Stories</h3>
            <p>Сейчас stories в конверсии. Он стал важнее публикаций на главных страницах. Поэтому вы должны уметь пользоваться всеми возможностями stories.  </p>
            <ul class="actions">
              <li><a href="/lessons/4.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/5.php" class="image"><img src="image/pic08.jpg" alt="" /></a>
            <h3>Контент план и копирайтинг </h3>
            <p>Хороший и интересный пост требует много времени. Чтобы выложить познавательную информацию, вам нужен план. Этот план поможет вам выбрать и подготовить «вкусную» тему для вашей аудитории. </p>
            <ul class="actions">
              <li><a href="/lessons/5.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/6.php" class="image"><img src="image/p8.png" alt="" /></a>
            <h3>Лучшие сервисы для автоматического продвижения в Инстаграм 2019</h3>
            <p>В эпоху наших прогрессивных технологий «видеоконтент»  в обществе стал наиболее эффективным средством доставки информации и привлечения потребителей. </p>
            <ul class="actions">
              <li><a href="/lessons/6.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/7.php" class="image"><img src="image/p6.png" alt="" /></a>
            <h3>Прямой эфир  и Таргетинг</h3>
            <p>Используя Прямой эфир , вы можете отвечать на вопросы ваших подпищиков в режиме реального времени.Таргетинговая реклама – это любые объявления, которые демонстрируются только целевым пользователям ресурса.  </p>
            <ul class="actions">
              <li><a href="/lessons/7.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/8.php" class="image"><img src="image/pic08.jpg" alt="" /></a>
            <h3>Дополнительные функции </h3>
            <p>Instagram является визуальной социальной страницей, и поэтому мы загружаем фото-видео материалы. Чтобы изменить качество фото, мы используем обрабатывающие программы, подробнее о них. </p>
            <ul class="actions">
              <li><a href="/lessons/8.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/9.php" class="image"><img src="image/p9.png" alt="" /></a>
            <h3>Акции и конкурсы в социальных сетях  и Статистика в Instagram</h3>
            <p>Вы же любите получать подарки и радовать себя? И ваши читатели тоже любят. Поэтому не уставайте их радовать. А для этого вам нужно устраивать конкурсы и акции.</p>
            <ul class="actions">
              <li><a href="/lessons/9.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <a href="/lessons/10.php" class="image"><img src="image/p10.png" alt="" /></a>
            <h3>IGTV - новая эра телевидения</h3>
            <p>Социальный интеллект - это совокупность способностей, определяющая успешность социального взаимодействия.</p>
            <ul class="actions">
              <li><a href="/lessons/10.php" class="button">Начать</a></li>
            </ul>
          </article>
        </div>
      </section>
      </div>


    </section>
  </body>
</html>
