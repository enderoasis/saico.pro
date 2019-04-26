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
 	<META NAME="CREATED" CONTENT="20190114;41400000000000">
 	<META NAME="CHANGEDBY" CONTENT="Пользователь Windows">
 	<META NAME="CHANGED" CONTENT="20190401;65000000000000">
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
 	-->
 	</STYLE>
 </HEAD>
 <BODY LANG="ru-RU" DIR="LTR">
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=6><B>Задание 9
 . Акции и конкурсы в социальных сетях
 и Статистика в Instagram</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Текст
 задания </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Добрый
 день, участники марафона «SMM10». Мы
 поговорим  о конкурсах и акциях в
 социальных сетях. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>И так, зачем
 нужны эти конкурсы и акции?</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>У вас есть
 личная или бизнес страница. Вы все
 делаете правильно: составляете интересный
 контент план, загружаете фото и видео,
 запускаете таргет. Что же вам не хватает?</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Вы же любите
 получать подарки и радовать себя? И ваши
 читатели тоже любят. Поэтому не уставайте
 их радовать. А для этого вам нужно
 устраивать конкурсы и акции. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Если ваша
 цель охват/просмотр, то механизм/правила
 конкурса становятся максимально
 простыми. Поставьте лайк, отметьте 3
 друзей, сделайте репост (поделитесь на
 своей странице). </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Перед
 проведением конкурса  важно обратить
 внимание на следующие вопросы:</B></I></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>§ Механизм
 конкурса (прохождение и правила конкурса)
 тщательно разработать;</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>§ Укажите
 правила проведения конкурса, место
 прохождения (город, область, страна), </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>§ Укажите
 точную дату и время  результатов конкурса.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>§ Независимо
 от того, какой приз будет разыгран, нужно
 прописать условия, как его получить
 (если приз маленький, организаторы
 отправляют его по почте. Если вы оплатите
 за доставку подарка, то это повысит вашу
 репутацию).</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Старайтесь
 избегать  негатива во время конкурса.
 Отвечайте на все вопросы вовремя и
 старайтесь подробно все объяснять.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Для определения
 победителей  конкурса существует три
 основных метода:</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>1 Генераторы
 случайных чисел (Randstuff, Random.org и другие);</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>2. Комментарий
 (результаты голосования, большое
 количество лайков или комментариев);</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>3. Эксперты
 и мнения жюри. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>При использовании
 второго метода есть свои «-». Это связано
 с тем, что участники могут использовать
 различные программы, которые могут быть
 поддельными. И при использовании
 генератора случайных чисел может быть
 много разногласий и недовольств. По
 этой причине максимально покажите всем,
 что конкурс честный. Обязательно
 проведите прямой эфир в это время или
 загрузите видео, где генератором
 определяется победитель. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>В наши дни
 многие звезды и блогеры не стесняются
 проводить различные конкурсы. Основная
 их цель: увеличить количество подписчиков
 и активность страницы.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>GIF конкурс
 является хорошим источником доходов и
 продвижения страницы. В этом случае для
 конкурса будет открыта специальная
 страница. В разделе «подписки» будут
 указаны все спонсоры, которые внесли
 значительные средства за призовой фонд
 и плату за участие в кампании известных
 пиарщиков. Вы также можете присоединиться
 к GIF в качестве организатора, спонсора
 или рекламодателя / PR-мейкера.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Организаторы
 занимаются поисками спонсоров для
 конкурса(блогеры, звезды, известные
 личности). Открывают специальную
 страницу. Определяют призовой фонд и
 членский взнос каждого спонсора. Они
 публикуют посты и следят за соблюдением
 правил. Организаторы несут большую
 ответственность  перед участниками и
 спонсорами. Во-первых, участники конкурса
 доказывают всем, что они настоящие.
 Каждый участник должен выполнять все
 условия конкурса. Организаторы определяют
 победителя и отчитываются перед
 спонсорами.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_9__html_36337f61.jpg" NAME="Рисунок 2" ALIGN=BOTTOM WIDTH=465 HEIGHT=799 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Спонсоры.
 </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Они
 платят взносы за участие и имеют полное
 право запросить у организатора всю
 информацию, касающуюся конкурса</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>.</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Популярные
 люди рекламируют конкурс у себя на
 странице и приглашают своих читателей
 принять участие. За это они могут получить
 определенную оплату, предложить свои
 услуги бартером или же стать спонсором
 данного конкурса. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Эти конкурсы
 обычно имеют много спонсоров (50-70, иногда
 больше). В последнее время людей такие
 конкурсы не интересуют. Причина в том,
 что подписка на более чем пятьдесят
 аккаунтов или  на людей, которых вы не
 знаете, является большой проблемой.
 Кроме того, после завершения конкурса,
 умные люди отписываются от людей в
 разделе «подписки». То есть, ваша
 статистика может подскочить и сразу
 упасть.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>ФОТОКОНКУРС.
 </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 Этот тип конкурса для Instagram. Когда вы
 проводите этот конкурс, вы можете
 придумать общий хэштег для всех
 участников. Например: #спортэтомы,
 #ямузыкант.  Хештег должен быть уникальным
 (неординарным).  Это важно! Потому что
 #хочуподарок или #явконкурсе часто
 используются во многих конкурсах и есть
 вероятность, что вы можете спутать своих
 участников с участниками других
 конкурсов. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Во время
 конкурса участники должны  не только
 указать хэштег, но на время конкурса
 открыть свою страницу. Про это напишите
 в условиях. А если страница закрыта, то
 вы не увидите фото и хэштеги участников.
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Еще один
 самый простой конкурс в Instagram - подписаться
 на вашу страницу и отметить своего
 друга. Это конкурс, который требует
 минимального набора действий. Поэтому
 здесь больше участников</FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 </FONT></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>В результате
 этого конкурса у вас появится возможность
 улучшить статистику и стать известным.
 Самое главное, не бросайте активность
 своей страницы во время конкурса и после
 его окончания. Продолжайте писать
 полезные посты, размещайте фотографии
 и видео. Применив вышеуказанную информацию
 и сделав все по правилам, ваши конкурсы
 будут интересными и яркими, а ваш рейтинг
 повысится.</FONT></FONT></P>
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
 <FONT FACE="Times New Roman, serif"><FONT SIZE=6><B>Статистика
 в Instagram</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Текст
 задания</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Настоятельно
 рекомендуем вам создать учетную запись.
 Как и в Instagram, мы можем посчитать, насколько
 точны наши посты, и рассчитать
 производительность нашей работы.
 Сегодняшняя тема посвящена статистике
 в Instagram.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Зачем
 нам статистика в Instagram? </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Мы
 можем узнать в Instagram: количество читателей,
  лайков,  комментариев,  просмотров видео
 и сторис. </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Зная эту
 информацию, мы можем определить динамику
 аккаунта, средние лайки, количество
 просмотров, захватывающий заголовок и
 план контента в правильном направлении.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Изучив
 динамику своего аккаунта, вы сможете
 узнать о своей работе или будущем
 маркетинге, работе специалистов  SMM или
 о том, насколько продуктивна ваша работа
 с блогерами. После этого вы сможете
 запустить таргет,  выбрав самый популярный
 пост или тему. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Как можно
 увидеть статистику?</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Если вы
 помните,  в первый же день мы поменяли
 нашу страницу из личной в бизнес-аккаунт.
 Только используя  бизнес-страницу вы
 можете увидеть все нужные статистики.
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Под каждым
 постом или фото есть кнопка «Посмотреть
 статистику». </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_9__html_5838526d.png" NAME="Рисунок 9" ALIGN=BOTTOM WIDTH=161 HEIGHT=321 BORDER=0><IMG SRC="_9__html_c1459cf5.gif"></P>
 <P LANG="en-US" STYLE="margin-bottom: 0in; line-height: 100%"><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 1. Кнопка &quot;Посмотреть </FONT></FONT><FONT FACE="Times New Roman, serif"><SPAN STYLE="background: #ffffff">статистику</SPAN></FONT><FONT FACE="Times New Roman, serif"><B><SPAN STYLE="background: #ffffff">»</SPAN></B></FONT></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Вы можете
 просмотреть общую статистику страницы,
 перейдя на главную страницу и нажав
 кнопку в верхней части страницы.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_9__html_be98e880.png" NAME="Рисунок 10" ALIGN=BOTTOM WIDTH=230 HEIGHT=458 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>В Инстаграме
 есть еще другие возможности: </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>В разделе</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>
 &quot;Действия&quot;</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>:</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_9__html_fbbf5828.png" NAME="Рисунок 12" ALIGN=BOTTOM WIDTH=174 HEIGHT=346 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок 3.
 &quot;Действия&quot; </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Просмотры
 профиля</B></I></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>:
 количество  тех, кто посещал вашу
 страницу. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Клики на
 сайт:</B></I></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 количество людей, кто переходил по
 ссылке. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Эл.письмо,
 Как добраться, звонки:</B></I></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 количество людей, которые нажали кнопку
 «Связаться» </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Охват</B></I></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>:
 количество людей, которые интересовались
 вашей страницей. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Показы</B></I></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>:
 количество просмотров всех постов за
 последнюю неделю.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Контент</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>&quot;.
 В разделе отображается отчет о ваших
 сообщениях, который вы отметили после
 переключения вашей страницы на
 бизнес-аккаунт. Здесь вы можете установить
 формат: фильтр и время. Статистика
 доступна 14 дней.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 4. Раздел &quot;Контент&quot; <BR><BR><IMG SRC="_9__html_bcf56d7a.png" NAME="Рисунок 13" ALIGN=BOTTOM WIDTH=198 HEIGHT=395 BORDER=0></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>&quot;Аудитория&quot;.
 Здесь вы </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>можете
 узнать сколько у вас читателей. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_9__html_edd6bb77.png" NAME="Рисунок 14" ALIGN=BOTTOM WIDTH=197 HEIGHT=393 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 5. Раздел &quot;Аудитория&quot;.<BR><BR></FONT></FONT><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Статистика
 Stories и прямого эфира</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Когда вы
 снимаете  сторис,  вам также доступно
 количество  людей, просмотревших ваши
 публикации.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_9__html_8c78395c.png" NAME="Рисунок 15" ALIGN=BOTTOM WIDTH=243 HEIGHT=484 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 6. </FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>В
 прямом эфире вы можете просмотреть
 количество зрителей во время эфира, и
 количество тех, кто посмотрел уже
 сохраненный эфир.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Задание
 </B></FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3> </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>1. Используя
 вышеперечисленную информацию, разместите
 у себя на странице один конкурс. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>2. Напишите
 пост о конкурсе, не менее 150 слов. Укажите
 все условия: призовой фонд или подарок,
 количество участников, дату и время
 результатов конкурса. Если конкурс с
 помощью хэштегов, то не забудьте указать
 все нужные хэштеги.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>3.Подарок вы
 можете выбрать сами. Если у вас магазин
 или салон красоты, в качестве подарка
 можете предложить свой товар или
 предоставить скидки на услуги. А если
 это ваша личная страница, то вы можете
 подарить свою любимую книгу, назначить
 встречу с победителем и провести отличную
 беседу.  </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>4. Не смотря
 на то, что  у вас новая страница и небольшое
 количество  подписчиков, выполняйте
 все условия и задачи. Тем самым вы
 приобретаете опыт. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%"><A NAME="_GoBack"></A>
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>5. Запишите
 минимум 7 сторис о том, что проводите
 конкурс, и сразу опишите все условия.
 Сторис должен состоять из 2 фото и 5
 видео.  </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>6. Посмотрите
 всю статистику с первого дня марафона.
  </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>7. Изучите
 статистику общей страницы,  вашей
 аудитории и сторис.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>8. Напишите
 пост, о том какие изменения  произошли
 после участия в марафоне и насколько
 повысилась активность вашей страницы.
 Не менее 200 слов.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>9.Напишите
 такие хэштеги как </FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>#SMMмарафон10
  #Меняюсьс</FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">saicoeducation</SPAN></FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
  и дополнительно еще 5 хэштегов без
 ошибок. Общее количество- 7 хэштегов. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>10. Снимите
 сторис о том, как ваш  профессиональный
 уровень растет и как продвигается ваш
 бизнес. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>11. Все ваши
 статистики разместите в один файл (Word,
 Excell и еще другие) и оформите это визуально
 красиво и понятно. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>12. Участники
 марафона с 1 лиги должны отправить отчет
 до 22:00, со ссылкой на страницу и на пост.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><I><B>Удачи!</B></I></FONT></FONT></P>
 <P STYLE="margin-bottom: 0.14in">
 </P>
 <P STYLE="margin-bottom: 0.14in"><BR><BR>
 </P>
 </BODY>
 </HTML>
