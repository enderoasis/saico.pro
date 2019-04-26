<?php
session_start();

if (!isset( $_SESSION['logged_user'] )) {
  header( 'Refresh: 0; url=/login.php' );
}

 if (!isset( 	$_SESSION['haspaid'] )) {
    header( 'Refresh: 0; url=/main.php' );
 }


 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <HTML>
 <HEAD>
 	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
 	<TITLE></TITLE>
 	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
 	<META NAME="AUTHOR" CONTENT="Пользователь Windows">
 	<META NAME="CREATED" CONTENT="20190113;165100000000000">
 	<META NAME="CHANGEDBY" CONTENT="Пользователь Windows">
 	<META NAME="CHANGED" CONTENT="20190401;63700000000000">
 	<META NAME="AppVersion" CONTENT="14.0000">
 	<META NAME="DocSecurity" CONTENT="0">
 	<META NAME="HyperlinksChanged" CONTENT="false">
 	<META NAME="LinksUpToDate" CONTENT="false">
 	<META NAME="ScaleCrop" CONTENT="false">
 	<META NAME="ShareDoc" CONTENT="false">
 	<STYLE TYPE="text/css">
 	<!--
 		@page { margin-left: 1.18in; margin-right: 0.59in; margin-top: 0.79in; margin-bottom: 0.79in }
 		P { margin-bottom: 0.08in; direction: ltr; widows: 2; orphans: 2 }
 		H4 { margin-top: 0.14in; margin-bottom: 0in; direction: ltr; color: #4f81bd; page-break-inside: avoid; widows: 2; orphans: 2 }
 		H4.western { font-family: "Cambria", serif; font-size: 11pt; font-style: italic }
 		H4.cjk { font-family: "Arial"; font-size: 11pt; font-style: italic }
 		H4.ctl { font-family: ; font-size: 11pt; font-style: italic }
 		A:link { color: #0000ff; so-language: zxx }
 	-->
 	</STYLE>
 </HEAD>
 <BODY LANG="ru-RU" LINK="#0000ff" DIR="LTR">
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4><B>Задание 7.
 Прямой эфир  и Таргетинг</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Текст
 задания </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Доброе
 утро! Сегодня вас ждет самое простое,
 но в то же время сложное задание. Мы
 будем выходить в прямой эфир. Вам не
 нужно будет настраивать специальное
 приложение или знать структуру  Instagram.
 Но вам понадобятся сила, терпение и
 энтузиазм.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Зачем нам
 прямой эфир? </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Конечно, вам
 не нужно ждать интервью с журналами,
 телевизионными программами при создании
 собственного бренда или бизнес-профиля.
 Используя Instagram, вы можете транслировать
 в прямом эфире, отвечать на вопросы
 читателя, или вы можете использовать
 его, чтобы показать сцену, то, что
 происходит в данное время. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Функция
 «прямой эфир» в Instagram была запущена  в
 США в ноябре 2016 года. А в Казахстане она
 появилась в конце 2017 года. Вначале было
 невозможно сохранить живое событие в
 памяти телефона или поделиться им с
 читателями в течение 24 часов. Эти функции
 были добавлены в августе 2017 года.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Как выходить
 в прямой эфир?</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Заходим в
 раздел </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">stories</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.Справа
 от него будет кнопка «прямой эфир</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>»</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>,
 переходим туда. Далее: «Начать прямой
 эфир». Вы в прямом эфире.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_d3563f11.gif"></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_b6c5199d.gif"></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Максимальная
  продолжительность прямого эфира ровно
 1 час.  Но для начала можно выходить на
 15-30 минут.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">

 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Зрители
 прямого эфира могут писать комментарии
 и задавать вопросы. Тему прямого эфира
 вы можете написать в комментарии и
 закрепить, чтобы тем, кто только зашел,
 было понятно о чем вы говорите. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Таргетинг
 (реклама) </B></FONT></FONT>
 </P>
 <P ALIGN=JUSTIFY STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Давайте
 узнаем,  что такое </FONT></FONT><FONT COLOR="#0d0d0d"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>таргетинговая
 реклама?</FONT></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT COLOR="#0d0d0d"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Таргетинговая
 реклама – </FONT></FONT></FONT><FONT COLOR="#0d0d0d"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>это
 любые объявления, которые демонстрируются
 только целевым пользователям ресурса.
 </FONT></FONT></FONT><FONT COLOR="#0d0d0d"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Например,
 вы продаете детские рубашки. Что мы
 делаем в первую очередь для этого?
 </FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Правильно!
 Определяем аудиторию товара для того,
 чтобы таргетинг был удачно запущен и
 нашел своего потребителя. Давайте
 составим примерный образ потребителей
 вашего товара. Например, ваши товары
 для новорожденных и для детей до 1 года.
 Предположим, что товар стоит 3500тг.
 Значит:</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 — <FONT FACE="Times New Roman, serif"><FONT SIZE=3>покупатели-
 женщины</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 — <FONT FACE="Times New Roman, serif"><FONT SIZE=3>семейное
 положение- замужем</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 — <FONT FACE="Times New Roman, serif"><FONT SIZE=3>возраст
 от 20 до 40 лет (примерно)</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 — <FONT FACE="Times New Roman, serif"><FONT SIZE=3>проживают
 в городе Алматы (указываем тот город,
 где находится магазин)</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 — <FONT FACE="Times New Roman, serif"><FONT SIZE=3>материальное
 положение: низкое или среднее</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 — <FONT FACE="Times New Roman, serif"><FONT SIZE=3>интересы:
 детская, женская, семейная одежда,
 бытовые товары </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Таким образом,
 с 16 различными целевыми объектами вы
 можете четко идентифицировать своих
 покупателей и показывать им только свою
 рекламу. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Где
 можно делать таргетинговую рекламу?</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Таргетинговая
 реклама в настоящее время доступна в
 социальных сетях, включая Google и Яндекс.
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_d7b8dea2.png" NAME="Рисунок 11" ALIGN=BOTTOM WIDTH=438 HEIGHT=227 BORDER=0><IMG SRC="_7__html_f7603698.png" NAME="Рисунок 10" ALIGN=BOTTOM WIDTH=330 HEIGHT=227 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_4494a755.png" NAME="Рисунок 9" ALIGN=BOTTOM WIDTH=446 HEIGHT=229 BORDER=0><IMG SRC="_7__html_77785304.png" NAME="Рисунок 8" ALIGN=BOTTOM WIDTH=357 HEIGHT=184 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок 1-4.
 Реклама в разных соцсетях </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Выгодные
 стороны таргетинга</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Если вы имеете
 дело с интернет-магазином , то это будет
 отличная сделка для вас.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Второе
 преимущество заключается в том, что у
 вас меньше затрат и возможность получить
 больше продаж. Например, для создания
 целевой рекламы в социальной сети
 Instagram вы потратите примерно 3000 тенге.
 Если вы  сделаете наиболее эффективную
 рекламу, вы можете заработать  1&nbsp;000
 000 тенге.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Невыгодные
 стороны таргетинга </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Таргетирование
 рекламы требует определенного уровня
 знаний. Если вам нужен простой способ,
 вы можете нанять специалиста в этой
 отрасли. Стоит отметить, что в настоящее
 время профессионалы таргетированной
 рекламы пользуются спросом и их доход
 выше, чем у некоторых бизнесменов. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Таргетирование
 рекламы не является неэффективным. Это
 зависит от качества работы человека
 который, занимался таргетированием.
 Предположим, вы едете на машине, чтобы
 добраться до определенного места.  Вы
 стукнули автомобиль и не можете продолжать
 движение. Причина этому - вы сами. Целевая
 реклама работает точно так же.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Как только
 Facebook и Instagram объединились, они  стали
 размещать рекламу с помощью ADS на Facebook
 и отправлять ее на таргет. Невозможно
 изучить все возможности за один урок.
 В наши дни существует профессия
 «Таргетолог», которая занимается только
 созданием рекламы. Это одна большая
 часть СММ.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN STYLE="background: #ffff00">НИКОГДА!НИ
 ПРИ КАКИХ УСЛОВИЯХ НЕ ДЕЛАЙТЕ ТАРГЕТ
 ЧЕРЕЗ МОБИЛЬНОЕ ПРИЛОЖЕНИЕ!</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN STYLE="background: #ff0000">ПРИМЕР
 НИЖЕ</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_6b09d1a6.jpg" NAME="Рисунок 13" ALIGN=BOTTOM WIDTH=411 HEIGHT=853 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Сегодня
 разберем одну рекламную кампанию на
 примере </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">ADS</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Manager</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 С помощью этого урока можете самостоятельно
 запустить таргетированную рекламу</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>ВАЖНО* Мы
 разбираем лишь запуск! Полный цикл
 таргетированной рекламы состоят из</FONT></FONT></P>
 <OL>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Статистика
 	аудитории</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Отчеты по
 	рекламе</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Тесты и
 	результаты</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Analytics</SPAN></FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Пиксели</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Настройки
 	биллинга</FONT></FONT></P>
 </OL>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Именно из
 этих пунктов состоит правильная рекламная
 кампания, которую мы разберем в следующих
 специализированных уроках.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Начнем!</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Пройдите по
 ссылке:
 <A HREF="https://web.facebook.com/business/tools/ads-manager?_rdc=1&amp;_rdr">https://web.facebook.com/business/tools/ads-manager?_rdc=1&amp;_rdr</A>
 для того чтобы начать таргетированную
 рекламу</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №1
 – главная страница </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">ADS
 Manager</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_160150e3.png" NAME="Рисунок 14" ALIGN=BOTTOM WIDTH=624 HEIGHT=351 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Перед началом
 запуска рекламы необходимо настроить
 наш рекламный кабинет, подключить карту
 оплаты.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №2</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">
 – </SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Настройка
 кабинета</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_b8ce6062.png" NAME="Рисунок 15" ALIGN=BOTTOM WIDTH=624 HEIGHT=350 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №3
 – Биллинг (способы платы)</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_fb27f4d5.png" NAME="Рисунок 16" ALIGN=BOTTOM WIDTH=624 HEIGHT=349 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №4
 – Настройка платежей</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_efada3e6.png" NAME="Рисунок 17" ALIGN=BOTTOM WIDTH=624 HEIGHT=350 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №5
 – Добавить способ оплаты</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_f956c521.png" NAME="Рисунок 18" ALIGN=BOTTOM WIDTH=624 HEIGHT=346 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>После настройки
 рекламного кабинета приступаем к запуску</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №6
 – Создаем рекламу</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_d22dd593.png" NAME="Рисунок 19" ALIGN=BOTTOM WIDTH=624 HEIGHT=350 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №7
 – Мы не будем подробно разбирать каждую
 «цель», но вы можете </FONT></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">самостоятельно
 ознакомиться, нажав на кнопку «</SPAN></FONT><FONT FACE="Arial, serif"><SPAN LANG="en-US"><SPAN STYLE="background: #ffffff">info</SPAN></SPAN></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">».</SPAN></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffffff">В
 данном </SPAN></B></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">случае</SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffffff">
 мы выбираем </SPAN></B></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">цель</SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffffff">
 нашей рекламной компании – «Охват».</SPAN></B></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_f06878d8.png" NAME="Рисунок 21" ALIGN=BOTTOM WIDTH=624 HEIGHT=350 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №8
 – Выбор страницы. Важно </FONT></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffffff">выбирать
 ту страницу, </SPAN></B></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">к
 которой</SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffffff">
 </SPAN></B></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">привязан</SPAN></FONT><FONT FACE="Arial, serif"><B><SPAN STYLE="background: #ffffff">
 ваш аккаунт</SPAN></B></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 инстаграме</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_e649a488.png" NAME="Рисунок 22" ALIGN=BOTTOM WIDTH=624 HEIGHT=349 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №9
 – Выбор аудитории</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Красный –
 выбираем </FONT></FONT><FONT FACE="Arial, serif"><SPAN STYLE="background: #ffffff">геолокацию</SPAN></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 (где мы хотим показывать нашу рекламу)</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Оранжевая –
 Возраст</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Зеленая –
 Пол</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN STYLE="background: #ff0000">ВАЖНО*
 пока не трогайте пункт «Детальный
 таргетинг» Вы можете деньги потратить
 на ветер!</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_29c3b1fc.png" NAME="Рисунок 23" ALIGN=BOTTOM WIDTH=484 HEIGHT=273 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №10
 – Плейсмент</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN STYLE="background: #ff0000">НЕ
 ТРОГАТЬ!</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_5cffd5c3.png" NAME="Рисунок 24" ALIGN=BOTTOM WIDTH=624 HEIGHT=349 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок №11
 – Бюджет и график</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Красный –
 всегда выбирайте «бюджет на весь срок»</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Оранжевый –
 минимум на 7 дней</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_f633e5d5.png" NAME="Рисунок 25" ALIGN=BOTTOM WIDTH=624 HEIGHT=349 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="kk-KZ">Рисунок</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 №12 – по необходимости можно выбирать
 фотографии либо видео (видео дает больше
 эффекта)</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_7__html_57f9a023.png" NAME="Рисунок 26" ALIGN=BOTTOM WIDTH=624 HEIGHT=349 BORDER=0></P>
 <H4 CLASS="western"><FONT COLOR="#00000a"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Рекомендации
 для изображений</SPAN></SPAN></FONT></FONT></FONT></H4>
 <UL>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Размер: 1&nbsp;080
 	x 1&nbsp;080 пикселей</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Обрезка: 1:1</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Тип файла:
 	.JPG или .PNG</FONT></FONT></P>
 </UL>
 <P STYLE="margin-bottom: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Для
 обеспечения максимальной результативности
 рекламы используйте изображение, которое
 содержит мало наложенного текста или
 совсем его не содержит.</FONT></FONT></P>
 <P STYLE="margin-bottom: 0in"><BR>
 </P>
 <P STYLE="margin-bottom: 0in"><A NAME="_GoBack"></A><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 №13 – После удачного добавления фото/видео
 можно написать продающий текст и вставить
 ссылку для перехода (можно любую ссылку).
 Ссылка необходима для того чтобы Ваш
 потенциальный покупатель одним взмахом
 мог переходить на Ваш сайт или на </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">whatsapp</SPAN></FONT></FONT></P>
 <P STYLE="margin-bottom: 0in"><IMG SRC="_7__html_4d01bbbb.png" NAME="Рисунок 27" ALIGN=BOTTOM WIDTH=624 HEIGHT=348 BORDER=0></P>
 <P LANG="en-US" STYLE="margin-bottom: 0in"><BR>
 </P>
 <P STYLE="margin-bottom: 0in"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 №14 – Если Вы все сделали по инструкции,
 поздравляю! Вы запустили свой первый
 «правильный» таргет</FONT></FONT></P>
 <P STYLE="margin-bottom: 0in"><IMG SRC="_7__html_20db0739.png" NAME="Рисунок 28" ALIGN=BOTTOM WIDTH=624 HEIGHT=349 BORDER=0></P>
 <P STYLE="margin-bottom: 0in"><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"></FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Задание:</B></FONT></FONT></P>
 <OL>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Ознакомьтесь
 	со всеми материалами касательно
 	таргетинга. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Вы будете
 	запускать таргет по данной теме. Но для
 	этого вы должны написать рекламный
 	пост. Если у вас магазин, то пост о
 	товаре. Если же у вас личная страница,
 	то представьте себя мастером своего
 	дела и предложите людям подписаться
 	на вас. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Пост не менее
 	200 слов. Выбранное фото или видео должно
 	быть качественное. Вы не должны говорить
 	о том, что участвуете в марафоне. Напишите
 	такие хэштеги как:  </FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>#SMMмарафон10
 	   #Меняюсьс</FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">saicoeducation</SPAN></FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 	 </FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>и
 	еще дополнительно 5 хэштегов без ошибок.
 	Общее количество- 7 хэштегов.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Определите
 	вашу аудиторию. Соответственно отправьте
 	рекламу. Вы можете выбрать целевую
 	аудиторию самостоятельно. То есть вам
 	нужно перейти на сайт или перейти на
 	страницу по вашему выбору.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Даже если
 	вы начнете рекламировать с 1 доллара,
 	самое главное- вам нужно научиться
 	отправлять рекламу. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Отправьте
 	таргетинг для вашей аудитории и сделайте
 	скрин. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Выходим в
 	прямой эфир. Выбираем тему касательно
 	вашего бренда.  Проведите прямой эфир
 	 не в виде интервью, а в виде презентации
 	вашего товара или услуги. Выберите тему
 	и полностью ее растолкуйте. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Соберите
 	материалы по указанной ниже структуре.
 	В прямом эфире вы должны сохранить
 	определенную структуру.
 	<IMG SRC="_7__html_89a6edef.png" NAME="Рисунок 1" ALIGN=BOTTOM WIDTH=752 HEIGHT=157 BORDER=0></FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>По времени
 	прямой эфир должен быть не меньше чем
 	15  и не больше чем 20 мин. Если эти условия
 	будут не соблюдены, работа приниматься
 	не будет.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>В начале
 	прямого эфира обязательно напишите
 	название эфира и закрепите его в
 	комментариях.  </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Несмотря на
 	то, что ваш аккаунт новый и у вас не так
 	много подписчиков, продолжайте находиться
 	в прямом эфире. Со временем аудитория
 	увеличится. Ответы такого рода как: «не
 	смог собрать аудиторию» приниматься
 	не будут. В таком случае, работа будет
 	считаться невыполненной.   </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Обязательно
 	сохраните прямой эфир на 24 часа.  В
 	случае отсутствия сохраненного эфира,
 	работа приниматься не будет.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Не говорите
 	своим зрителям, что выполняете задание
 	для марафона. Почувствуйте себя настоящим
 	блогером. </FONT></FONT>
 	</P>
 </OL>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Об отчете.</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Участники
 марафона с 1 лиги должны сдать работу
 до 22:00 со ссылкой на аккаунт.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Предупреждаем!
 Платформа будет принимать работу в
 порядке очереди! Вам следует уложиться
 в указанные нами сроки.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Удачи!</B></FONT></FONT></P>
 <P STYLE="margin-bottom: 0.14in"><BR><BR>
 </P>
 </BODY>
 </HTML>
