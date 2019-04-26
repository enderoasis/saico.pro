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
	<META NAME="CREATED" CONTENT="20190103;105700000000000">
	<META NAME="CHANGEDBY" CONTENT="Пользователь Windows">
	<META NAME="CHANGED" CONTENT="20190401;54100000000000">
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
		H3 { margin-top: 0.19in; margin-bottom: 0.19in; direction: ltr; line-height: 100%; widows: 2; orphans: 2; page-break-after: auto }
		H3.western { font-size: 13pt }
		H3.cjk { font-family: "Times New Roman"; font-size: 13pt; so-language: ru-RU }
		H3.ctl { font-family: "Times New Roman"; font-size: 13pt }
		H4 { margin-top: 0.14in; margin-bottom: 0in; direction: ltr; color: #4f81bd; page-break-inside: avoid; widows: 2; orphans: 2 }
		H4.western { font-family: "Cambria", serif; font-size: 11pt; font-style: italic }
		H4.cjk { font-family: "Arial"; font-size: 11pt; font-style: italic }
		H4.ctl { font-family: ; font-size: 11pt; font-style: italic }
	-->
	</STYLE>
</HEAD>
<BODY LANG="ru-RU" DIR="LTR">
<H4 CLASS="western">Задание 3. Правильно
фотографировать</H4>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>Текст
задания</B></FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Доброе
утро! Вот и 3 задание. Если вы будете
выполнять каждое задание в указанные
нами сроки, то в конце марафона получите
хорошую страницу. У вас появится шанс
стать популярным в социальных сетях.
Мы желаем вам удачи!</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt">Большинство
пользователей социальных сетей делятся
своими мыслями. Несмотря на то, что
информация интересная и познавательная,
 она набирает мало просмотров и лайков.
Причина тому - неправильно выбранное
фото. Мы научим вас делать пропорциональное,
интересное и красивое фото. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>А вы знаете
все возможности вашего телефона? </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Современные
гаджеты и смартфоны ничем не уступают
профессиональным фотоаппаратам. Поэтому,
на вашей станице должны быть только
качественные фотографии. Но при этом
не обязательно делать дорогие фотосессии.
Нужно лишь правильно использовать свой
телефон. </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Не важно
iPhone у вас или </B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US"><B>Samsung</B></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>.
Самое главное вы должны быть хорошо
знакомы со своим телефоном. Например
HDR дает возможности сделать качественное
фото. </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Даже если
вы с одного ракурса в разных экспозициях
сделаете один и тот же кадр, то он покажет
вам максимально качественный материал.
То есть все четко и ясно.</B></FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_459de2bb.png" NAME="Рисунок 11" ALIGN=BOTTOM WIDTH=645 HEIGHT=368 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
1. Разные фильтры</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Еще один
момент: не злоупотреблять фильтрами. К
сожалению фотографий без фильтра очень
мало. Чтобы не казаться искусственным,
лучше использовать живое и настоящее
фото. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Ищите разные
ракурсы. </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Все прекрасно
знают как нажать на кнопку и сделать
фото. </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_1974f053.png" NAME="Рисунок 10" ALIGN=BOTTOM WIDTH=640 HEIGHT=397 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
2. Смотрите с другого ракурса. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Не
всегда бывает возможность сделать
хорошее фото. Однако хочется запечатлеть
все интересные моменты жизни. Поэтому,
всегда будьте готовы. Для этого есть
«горячие клавиши». Например, на iPhone
свайпните экран  налево и выберете
функцию : «камера». </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">

</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_9a7bf1c7.png" NAME="Рисунок 9" ALIGN=BOTTOM WIDTH=605 HEIGHT=462 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
3. Фото с использованием разных линз.</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>На
фото выше, девочка была сфотографирована
с различными линзами, соответственно
получился разный эффект. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Хотя
в Instagram есть возможность добавлять
слайды, все еще есть аккаунты, которые
расширяют свадебные фотографии до 10-15
постов. Не стоит повторять одно и то же
фото, нужно сосредоточиться на качестве
поста, а не на количестве фотографий.</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Или
же наоборот. В красивом месте нужно
сделать несколько кадров с разного
ракурса, затем пересмотреть и выбрать
среди них самую качественную. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Свет</B></FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Когда
говорим о фотографиях, нельзя забывать
про свет. Именно свет влияет на качество
фото. </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>В фотостудиях
используют  искусственный свет. А вам
не обязательно использовать такое
оборудование. Когда делаете фото в
комнате, нужно максимально выбрать
хороший свет.  Например: фотографироваться
у окна. </FONT></FONT>
</P>
<H3 CLASS="western" STYLE="background: #ffffff"><FONT SIZE=3>Правила
</FONT><FONT SIZE=2 STYLE="font-size: 11pt"><SPAN STYLE="background: #ffffff">«Тройка»</SPAN></FONT></H3>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Есть правил</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="kk-KZ">о</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
</FONT></FONT><FONT FACE="Times New Roman, serif"><SPAN STYLE="background: #ffffff">«Тройка»</SPAN></FONT><FONT FACE="Times New Roman, serif"><SPAN LANG="kk-KZ"><SPAN STYLE="background: #ffffff">
для того</SPAN></SPAN></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>,
чтобы получить совместимое фото.
Подключите на свой смартфон линии или
же приложение сетка. То есть, должны
выйти 3 линии по горизонтали и 3 по
вертикали. Если не знаете как включить
сетку, вы можете воспользоваться
поисковиком </FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">google</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>.</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Самое главное,
объекты должны располагаться на
пересечении линий.</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_bd26a540.jpg" NAME="Рисунок 8" ALIGN=BOTTOM WIDTH=670 HEIGHT=295 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
4. Правила тройка</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_60213800.jpg" NAME="Рисунок 7" ALIGN=BOTTOM WIDTH=592 HEIGHT=318 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
5. Примеры правильно-неправильно. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Примеры
правильно-неправильно. На первом снимке
мальчик занимает большую часть фото. А
на втором девушка ушла в сторонку, то
есть пустых мест много. А на третьем
снимке девушка на перекрестке линий.
Фото совместимо.  </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">

</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Симметрия,
перспектива</B></FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>В некоторых
случаях симметрия и законченность
образа играет большую роль.  Поэтому</B></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="kk-KZ"><B>,</B></SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>
чтобы получить полноценную фотографию,
необходимо снимать на расстоянии. </B></FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<BR><BR>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_42ed1bdb.jpg" NAME="Рисунок 6" ALIGN=BOTTOM WIDTH=1157 HEIGHT=498 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
6 </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_202ce011.jpg" NAME="Рисунок 5" ALIGN=BOTTOM WIDTH=1153 HEIGHT=524 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
7</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_45447f24.jpg" NAME="Рисунок 4" ALIGN=BOTTOM WIDTH=1127 HEIGHT=481 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
8</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Центр,
главный объект.</B></FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Вы также
можете поместить его в центр изображения,
чтобы показать продукт. Тогда все
внимание сконцентрируется на продукте
. Этот метод захвата фотографий часто
используется в интернет-магазинах.
Чтобы максимизировать преимущества
продукта, лучше выбрать фон одного цвета
или фотографировать без каких-либо
излишеств.</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<BR><BR>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_53f4851e.jpg" NAME="Рисунок 3" ALIGN=BOTTOM WIDTH=1144 HEIGHT=520 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
9. Центр и главный объект. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_e9294b2a.jpg" NAME="Рисунок 2" ALIGN=BOTTOM WIDTH=742 HEIGHT=396 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
10. Неправильно сделанное фото</FONT></FONT></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><BR>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><A NAME="_GoBack"></A>
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>На рисунке
10 представлены  неудачные фотографии.
То есть, на снимках очень много предметов.
Соответственно</FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="kk-KZ">,</SPAN></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>
глаза не сфокусированы на одном главном
объекте.</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<IMG SRC="_3__html_cea23773.jpg" NAME="Рисунок 1" ALIGN=BOTTOM WIDTH=686 HEIGHT=392 BORDER=0></P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>Рисунок
11. Правильные примеры. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Например,
здесь правильный снимок: фон однотонный,
предметов не так много и отлично выбран
свет. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=4 STYLE="font-size: 13pt"><B>
</B></FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in; line-height: 100%"><FONT FACE="Times New Roman, serif"><FONT SIZE=3> </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3><B>Задание:</B></FONT></FONT></P>
<OL>
	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Изучите
	полностью и досконально функцию «Камера»
	на вашем смартфоне.  Посмотрите все
	детали. </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Сделайте
	несколько снимков на ваш смартфон в
	формате HDR. </FONT></FONT>
	</P>
	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Сделайте 10
	снимков, используя вышеперечисленные
	материалы. Перед тем, как делать фото,
	убедитесь, что объектив камеры чистый.</FONT></FONT></P>
	<LI><P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
	<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Обязательно
	пишем пост, в котором не менее 200 слов.
	Если у вас магазин одежды или интернет
	магазин, то обязательно используйте
	ранее сказанные нами методы. Сделайте
	10 снимков вашего товара и напишите об
	этом пост. </FONT></FONT>
	</P>
</OL>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>Если у вас
личная страница, также сделайте 10 снимков
и напишите об этом. Можете выбрать одну
общую тему. При проверке мы будем обращать
внимание именно на качество фото. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>5.Если
фотоснимки мутные, некачественные и не
применялись все техники, работа
приниматься не будет. Почувствуйте себя
фотографом. Обращайте внимание на
ракурс, на свет и на композицию. </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>6. Когда
выкладываете пост, фотоснимки должны
быть как слайд 10 шт. Снимок должен быть
сделан в настоящем времени. Коллаж не
использовать.  </FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>7. Используйте
такие хэштеги как: </FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3>#SMMмарафон10
#Меняюсьс</FONT></FONT></FONT><FONT COLOR="#ff0000"><FONT FACE="Times New Roman, serif"><FONT SIZE=3><SPAN LANG="en-US">saicoeducation</SPAN></FONT></FONT></FONT><FONT FACE="Times New Roman, serif"><FONT SIZE=3>и
еще дополнительно 3 хэштега без ошибок.
</FONT></FONT>
</P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>8. На прошлых
уроках мы переходили на бизнес аккаунт.
Под вторым постом нажмите на кнопку
«Посмотреть статистику» и сделайте
скрин результатов.</FONT></FONT></P>
<P STYLE="margin-top: 0.19in; margin-bottom: 0.19in; line-height: 100%">
<FONT FACE="Times New Roman, serif"><FONT SIZE=3>9. Задание
скиньте на платформу до 22:00. </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0.14in"><BR><BR>
</P>
</BODY>
</HTML>
