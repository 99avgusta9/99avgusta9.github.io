<?
// Переменные с данными для визитки
$company_logo = 'img/logo_black.png';
$company_description = 'Создание любых видов сайтов';
$company_site = 'DKrylov.ru';
$company_email = 'mail@dkrylov.ru';
?>
<HTML>
	<HEAD>
		<TITLE>DKrylov.ru - Создание любых видов сайтов</TITLE>
		<!--В данном примере, нам понадобятся только CSS стили-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</HEAD>
	<BODY>
		<!--Общий контейнер, в который мы обертываем все остальные-->
		<div class="wrap">
			<img src="<?echo $company_logo;?>">
				<span class="company_description">
					<?echo $company_description;?>
				</span>
			<!--Тэг <hr /> создает линию-->
			<hr />
			<!--
				Блок, который распологается под блоком с логотипом и описанием
				В нем мы будем писать информацию о компании :D
			-->
			<div class="main_info">
				<span class="site">
					<?echo $company_site;?>
				</span>
				<span class="info">
					<span class="sized">
						E-mail:
					</span>
					<strong><i>mail@dkrylov.ru</i></strong>
					<br />
				</span>
			</div>
		</div>
	</BODY>
</HTML>