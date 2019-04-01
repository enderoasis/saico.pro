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
 	<META NAME="CREATED" CONTENT="20190112;142200000000000">
 	<META NAME="CHANGEDBY" CONTENT="Пользователь Windows">
 	<META NAME="CHANGED" CONTENT="20190401;54400000000000">
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
 	-->
 	</STYLE>
 </HEAD>
 <BODY LANG="ru-RU" DIR="LTR">
 <H4 CLASS="western">Задание 4. Пользоваться
 возможностями Stories</H4>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Текст
 задания</B></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Доброе
 утро! Ваши страницы начинают меняться
 и приобретать определенный облик. Мы
 очень надеемся, что до конца марафона
 вы станете МАСТЕРОМ своего дела! </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Сегодня
 мы с вами будем говорить о stories. Сейчас
 stories в конверсии. Он  стал важнее публикаций
 на главных страницах. Поэтому вы должны
 уметь пользоваться  всеми возможностями
 stories. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Что такое
 stories? </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>В верхнем
 углу основной страницы публикации тех,
 на кого вы подписаны. </B></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_4__html_3d310496.gif"></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 1. </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Stories</SPAN></FONT></FONT></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Загружаемое
 в </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">Stories</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 доступно  24 часа, после чего оно будет
 удалено.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_4__html_3de80937.gif"></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок 2</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Если за
 последние сутки вы  ничего не выкладывали
 в stories, то возле главной фотографии будет
 кнопка +.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_4__html_f2e3f600.gif"></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок 3</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>После того
 как вы закинете в stories публикации, вокруг
 главной фотографии появится красный
 кружок.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 4</FONT></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>После просмотра
 stories, красный кружок превращается в
 серый цвет. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_4__html_8674ae8c.png" NAME="Рисунок 7" ALIGN=BOTTOM WIDTH=366 HEIGHT=274 BORDER=0></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <IMG SRC="_4__html_92949d6b.gif"></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 5</FONT></FONT></FONT></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><A NAME="_GoBack"></A>
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Чтобы
 воспользоваться функцией </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">stories</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>,вы
 нажимаете на + возле главного фото или
 же двигаете экран вправо с главной
 страницы. Нажимая на кнопку посередине,
 вы сделаете фото.Если удерживать данную
 кнопку,то можно записать видео
 длительностью 15 секунд. </FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><IMG SRC="_4__html_2bdf5654.png" NAME="Рисунок 9" ALIGN=BOTTOM WIDTH=380 HEIGHT=285 BORDER=0><IMG SRC="_4__html_b2de15b4.gif"></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
 6</FONT></FONT></FONT></P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Перед
 тем как выложить фото или видео, вы
 можете оформить его разными способами.
 </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>Остановимся
  на рисунке 6.
 <IMG SRC="_4__html_d5a358dc.png" NAME="Рисунок 11" ALIGN=BOTTOM WIDTH=315 HEIGHT=560 BORDER=0></FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>1. Закрыть
 stories, выйти с экрана. В этом случае stories
 не загрузится. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>2. Можете
 включить разные возможности. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>3. Возможность
 оформить. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>4. Добавить
 текст.</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>5. Сохранить
 на память телефона фото или видео</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>6. Делиться
 со stories</FONT></FONT></P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>7. Отправить
 определенным людям. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3>И еще много
 интересных возможностей. </FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <BR><BR>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Задание
 </B></FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0in; line-height: 100%"><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Время
 окончания: 2019-01-09 22:00:00 </FONT></FONT></FONT>
 </P>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Задание:</B></FONT></FONT></P>
 <OL>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Изучите все
 	возможности stories. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Снимете 13
 	stori</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">es</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.
 	Каждый stories должен содержать определенную
 	информацию, текст, оформление, gif, опрос,
 	фото и видео на 15 секунд, хэштеги и т.д.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Минимум 5
 	stories о вас, которые вы снимали в день
 	отправления задания.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Истории
 	должны быть касательно вашей сферы
 	деятельности и влиять на создание
 	Бренда. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Обязательно
 	напишите пост на тему </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">stories</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 	на вашей странице. Минимум 100 слов. </FONT></FONT>
 	</P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Научитесь
 	делать качественное фото. До конца
 	марафона вы должны уметь красиво
 	фотографировать.</FONT></FONT></P>
 	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Напишите
 	такие хэштеги как </FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>#SMMмарафон10
 	#Меняюсьс</FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">saicoeducation</SPAN></FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
 	</FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>и
 	дополнительно еще 5 хэштегов без ошибок.
 	Отправьте выполненное задание на
 	платформу до  22:00 с ссылкой на аккаунт.</FONT></FONT></P>
 </OL>
 <P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
 <FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Удачи! </B></FONT></FONT>
 </P>
 <P STYLE="margin-bottom: 0.14in"><BR><BR>
 </P>
 </BODY>
 </HTML>
