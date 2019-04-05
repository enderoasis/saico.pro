<?php
session_start();

if (!isset( $_SESSION['logged_user'] )) {
  header( 'Refresh: 0; url=login.php' );
}

elseif (!isset( $_SESSION['haspaid'])) {
    header( 'Refresh: 0; url=check.php' );
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
    <link rel="stylesheet" href="second.css" />
  </head>
  <body class="is-preload">
    <div id="wrapper">
      <div id="main">
        <div class="inner">
      <header id="header">


        <ul class="icons">

                            <li><a href="https://partners.saico.pro" class="button2">Партнёрство</a></li>
                            <li><a href="/index.php"class="button">Главная</a></li>
                            <li><a href="/logout.php" class="button">Выход</a></li>
                            <li><a href="/send.php" class="button">Домашнее задание</a></li>
                          </ul>
      </header>
      <section>
        <header class="major">
          <h2>Обучение</h2>
        </header>
        <div class="posts">
          <article>
            <h3>Шаг №1. Зарегистрируйтесь, откройте аккаунт, переключитесь на бизнес страницу.</h3>
            <p>Чтобы громко заявить о себе, твое «имя должно быть звучным» и аккаунты брендов должны быть «открытыми» каждому потенциальному клиенту. Задумайся, аккаунт компании и закрытый, что и от кого они скрывают?
Ты всегда «открыт» к диалогу и для каждого бизнес-партнера!
</p>
            <ul class="actions">
              <li><a href="/lessons/1.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №2. Приводим в порядок ссылки </h3>
            <p>Это базовая ошибка, но, к сожалению, время от времени мы все еще наталкиваемся на такие вот закрытые аккаунты брендов. Если закрытые аккаунты для личных профилей — это нормально, то для компаний это, как минимум, странно.
</p>
            <ul class="actions">
              <li><a href="/lessons/2.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №3. Правильно фотографировать</h3>
            <p>Любая информация должна быть «усилена» визуальным контентом. Именно картинка остается в памяти твоих фоловеров (словарь терминов) и только после нее текстовое содержимое рекламы.
Мы расскажем тебе какой контент достоин внимания твоих клиентов, как правильно выбирать фото (картинку) и как создавать этот «цепляющий» визуальный контент.
</p>
            <ul class="actions">
              <li><a href="/lessons/3.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №4. Пользоваться возможностями Stories</h3>
            <p>Знаешь почему публикации в stories набирают много просмотров и так популярны? Все просто, они находятся всегда «на верхушке» ленты, отмечены красным цветом экономят время твоего клиента на просмотр.
Научиться емко, грамотно, системно выкладывать информацию в stories легко, и мы тебе с этим поможем.
  </p>
            <ul class="actions">
              <li><a href="/lessons/4.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №5. Контент-план и копирайтинг </h3>
            <p>Любой бизнес, особенно в социальных сетях должен быть конструктивным, последовательным , системным.
               Как это сделать?
               Составляем контент-план (словарь терминов), соответствующий времени (актуальность), модным течениям, новостям, интересам вашей целевой аудитории (словарь терминов).
               С планом всегда интересней и продуктивней работать и экономит много ценного времени.
 </p>
            <ul class="actions">
              <li><a href="/lessons/5.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №6. "Видео контент" и его виды.   Возможности актуального stories.  </h3>
            <p>Видеоконтент (словарь терминов)  самый легкий и «экологичный» способ  (словарь терминов) донести важную информацию до клиента. Фоловер не напрягает зрение для чтения текста, мы можем использовать целых три канала воздействия на него: «зрение, слух, память». А также  экономим время клиента, увеличивая частоту просмотра нашего контента. </p>
            <ul class="actions">
              <li><a href="/lessons/6.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №7. Прямой эфир  и Таргетинг</h3>
            <p>Использовать «прямой эфир» для общения с потенциальными клиентами-очень нужный инструмент, но подготовка к нему очень трудоемкая, риски велики, также как велик и успех от использования этого инструмента. Но все по порядку…  </p>
            <ul class="actions">
              <li><a href="/lessons/7.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №8. Дополнительные функции </h3>
            <p>Instagram  богат функциями обработки и преображения твоего фото и видео контента. Грех ими не воспользоваться и улучшить визуализацию твоего аккаунта.
Мы тебя с ними «познакомим».
 </p>
            <ul class="actions">
              <li><a href="/lessons/8.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №9 . Акции и конкурсы в социальных сетях  и Статистика в Instagram</h3>
            <p>Все мы знаем волшебное слово «халява». В среде социальных сетей есть термин «халявки»- это акции, конкурсы, розыгрыши, и конечно призы и подарки. Порадуй своих фоловеров, проведи акцию и раздачу призов.
              А как все это организовать, смотри инструкцию.
</p>
            <ul class="actions">
              <li><a href="/lessons/9.php" class="button">Начать</a></li>
            </ul>
          </article>
          <article>
            <h3>Шаг №10. IGTV - новая эра телевидения</h3>
            <p>У тебя есть уникальное видео для Instagram , но социальная сеть его постоянно «режет», тогда приложение IGTV –лучшее решение!  Возможность загружать вертикальное видео от 10 до 60 минут легко, смотрим инструкцию.</p>
            <ul class="actions">
              <li><a href="/lessons/10.php" class="button">Начать</a></li>
            </ul>
          </article>

        </div>

      </section>
      </div>



  </body>
</html>
