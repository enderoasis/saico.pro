<?php
require '/libs/rb-mysql.php';
R::setup( 'mysql:host=srv-pleskdb33.ps.kz:3306;dbname=saicopro_2','saico_admin', 'qtH^462y' );

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}
$address_site = "education.saico.pro";
$email_admin = "admin@saico.pro";

?>
