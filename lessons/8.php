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
 	<META NAME="CREATED" CONTENT="20190113;180200000000000">
 	<META NAME="CHANGEDBY" CONTENT="Пользователь Windows">
 	<META NAME="CHANGED" CONTENT="20190401;64100000000000">
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
 		A:link { color: #0000ff; so-language: zxx }
 	-->
 	</STYLE>
 </HEAD>
 <BODY LANG="ru-RU" LINK="#0000ff" DIR="LTR">
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=6><B>Задание 8.
 Дополнительные функции </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Текст
 задания</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Добрый
 день, уважаемые участники марафона
 &quot;SMM10&quot;! Сегодня 8-й день марафона. Мы
 читаем все ваши комментарии, наблюдаем
 за тем, как развивается ваша страница
 и бизнес! Мы радуемся вашим успехам!
 Несмотря на то, в какой вы лиге, мы
 настоятельно рекомендуем вам выполнять
 все задания.  </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">В
 сфере СММ появились новые дополнительные
 функции. Сегодня мы познакомим вас с
 этими функциями.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Instagram
 является визуальной социальной страницей,
 и поэтому мы загружаем фото-видео
 материалы. Чтобы изменить качество
 фото, мы используем обрабатывающие
 программы. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Программы
 для обработки фотографий</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>1 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Adobe
 Photoshop Express </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 является самым популярным мобильным
 приложением в мире по обработке
 фотографий. Есть отличие от компьютерной
 версии,  но при этом мобильная версия
 тоже ничем не уступает.  </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_86f38abe.jpg" NAME="Рисунок 14" ALIGN=BOTTOM WIDTH=532 HEIGHT=435 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>2 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Adobe
 Lightroom CC </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 является еще одним продуктом компании
 Adobe. Можете сделать фотографии не только
 в режиме автомат, но и использовать
 нужный режим. Выполняет функции первичной
 и основной обработки. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_be193a50.jpg" NAME="Рисунок 13" ALIGN=BOTTOM WIDTH=532 HEIGHT=442 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Adobe</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Lightroom</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">CC</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>3</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>
 </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US"><B>Snapseed</B></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>
 </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 является продуктом компании </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Google</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 Содержит в себе около 20 инструментов
 по обработке фотографий. Если вы в поиске
 приложения, которое выполнит несколько
 функций одновременно, то это может быть
  Snapseed. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_b585fc6b.jpg" NAME="Рисунок 12" ALIGN=BOTTOM WIDTH=554 HEIGHT=458 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Snapseed</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>4 Afterlight </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 содержит в себе очень много фильтров.
 Есть платная и пробная версия. В пробной
 версии фильтров  значительно меньше,
 чем  в платной.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_f03b6b51.jpg" NAME="Рисунок 11" ALIGN=BOTTOM WIDTH=550 HEIGHT=458 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Afterlight</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>5 Phonto </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 программа, которая поможет вставить
 текст на фото. Отличается тем, что имеет
 много возможностей по вставке текстов.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_f3b0a062.jpg" NAME="Рисунок 10" ALIGN=BOTTOM WIDTH=551 HEIGHT=422 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Phonto</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>6 TouchRetouch </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 приложение, которое уберет все, что
 портит фото. Будь это мусор, проводки,
 лестница или даже птица.  </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_7430efba.jpg" NAME="Рисунок 9" ALIGN=BOTTOM WIDTH=567 HEIGHT=476 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>TouchRetouch</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>7 Enlight</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 — поможет сделать качественное фото,
 а также  соединить несколько фотографий.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">

 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_be205b40.jpg" NAME="Рисунок 8" ALIGN=BOTTOM WIDTH=518 HEIGHT=431 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Enlight
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>8 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Canva</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 — популярное приложение. Поможет
 обработать фото, сделать коллаж, эскизы
 и многое другое.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_80f699ba.jpg" NAME="Рисунок 7" ALIGN=BOTTOM WIDTH=553 HEIGHT=421 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Canva</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>9</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>
 InShot</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 — как говорили до этого, поможет сделать
 актуальный </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">stories</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_12a07db1.jpg" NAME="Рисунок 6" ALIGN=BOTTOM WIDTH=567 HEIGHT=476 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>InShot</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Обработка
 видео. Приложения. </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>1 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Adobe
 Premiere Clip </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>–
 поможет сделать видеомонтаж, изменить
 голос или звук. Так же может добавить
 эффекты. Альтернатива программы iMovie,
 которое можно скачать для Android. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_d182d318.jpg" NAME="Рисунок 5" ALIGN=BOTTOM WIDTH=554 HEIGHT=422 BORDER=0></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Adobe</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Premiere</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Clip</SPAN></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>2 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Clips</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 – является приложением компании </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Apple</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 Обрабатывает  видео для </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Instagram</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 Очень много функций. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_966778ad.jpg" NAME="Рисунок 4" ALIGN=BOTTOM WIDTH=527 HEIGHT=436 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>3 С</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">utStory</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 / </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Story</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Cutter</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 - </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Instagram</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Stories</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 Данная программа поможет сократить
 видео или разделить его. Можно скачать
 как для  iOS,  так и для Android. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_cece4bdf.jpg" NAME="Рисунок 3" ALIGN=BOTTOM WIDTH=576 HEIGHT=441 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Отложенный
 постинг</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Smmplanner-
 </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">является
 одним из незаменимых приложений в сфере
 СММ. Поможет сэкономить ваше время.
 Программа сама будет загружать за вас
 посты.  От вас только требуется определить
 время и дату постов. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_6c18f54c.jpg" NAME="Рисунок 2" ALIGN=BOTTOM WIDTH=288 HEIGHT=90 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_8__html_7499d052.jpg" NAME="Рисунок 1" ALIGN=BOTTOM WIDTH=579 HEIGHT=194 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Чтобы
 </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="kk-KZ">зарегистрироваться
 в</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 данной программ</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="kk-KZ">е</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>,
 пройдите по ссылке</FONT></FONT><SPAN LANG="kk-KZ">:
 </SPAN><A HREF="https://smmplanner.com/"><FONT COLOR="#00000a">https://smmplanner.com/</FONT></A><SPAN LANG="kk-KZ">
  </SPAN>
 </P>
 <P LANG="kk-KZ" STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P LANG="kk-KZ" STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3></FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">9</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>-0</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">1</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3> </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Задание:</B></FONT></FONT></P>
 <OL>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Изучите все
 	вышеуказанные  приложения. Загрузите
 	хотя бы 3 из них, и поработайте с ними.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>С сегодняшнего
 	дня дублируйте свой контент-план в
 	программе Word и дополнительно пишите
 	другие посты. На следующем уроке мы это
 	обязательно проверим. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Создайте
 	себе аккаунт на сайте smmplanner. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Напишите
 	минимум 3 поста с качественной фотографией,
 	и загрузите в &quot;отложенный постинг&quot;,
 	то есть на  smmplanner.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Пост должен
 	содержать не менее 200 слов. Не упоминайте,
 	что вы участвуете в марафоне. Выбирайте
 	качественные фотографии.  </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Напишите
 	такие хэштеги как: </FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>#SMMмарафон10
 	   #Меняюсьс</FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">saicoeducation</SPAN></FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 	 </FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>и
 	 еще дополнительно 5 хэштегов без ошибок.
 	Общее количество-  7 хэштегов.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Участники
 	 должны скинуть отчет
 	(скрины всех постов с программы
 	smmplanner, ссылку на аккаунт)  до 22:00 на
 	платформу, </FONT></FONT>
 	</P>
 </OL>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%"><A NAME="_GoBack"></A>
 <BR><BR>
 </P>
 <P STYLE="margin-bottom: 0.14in"><BR><BR>
 </P>
 </BODY>
 </HTML>
