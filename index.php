<?/*
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><p>
Наша компания существует на Российском рынке с 1992 года. За это время «Мебельная компания» прошла большой путь от маленькой торговой фирмы до одного из крупнейших производителей корпусной мебели в России.
</p><p>
«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
<h3>Наша продукция</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"IBLOCK_BINDING" => "section",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
<h3>Наши услуги</h3>
<?$APPLICATION->IncludeComponent("bitrix:furniture.catalog.index", "", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "3",
	"IBLOCK_BINDING" => "element",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N"
	),
	false
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");*/?>
<html lang="en" class="bx-no-touch bx-no-retina bx-chrome bx-boxshadow bx-borderradius bx-flexwrap bx-boxdirection bx-transition bx-transform desktop landscape">
	<head>
		<title>Sportake.ru - прокат спорт-инвентаря</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>		
		<style>
			@font-face {
				font-family: 'UbuntuBold';
				src: url('fonts/ubuntu-b.eot');
				src: url('fonts/ubuntu-b.eot?#iefix') format('embedded-opentype'),
					 url('fonts/ubuntu-b.woff') format('woff'),
					 url('fonts/ubuntu-b.ttf') format('truetype');
				font-weight: normal;
				font-style: normal;
			}
			
			body, html {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				min-width: 980px;
				font-family: UbuntuBold; 
			}
		</style>
		<div style="width: 100%; height: 100%; display: table;">
			<div style="display: table-cell; width: 100%; text-align: center; vertical-align: middle;">
				<img src="logo.png" alt="sportake" style="width: 500px;" />
				<div style="margin-top: 40px; font-size: 30px; font-family: UbuntuBold; color: #505050;">Скоро запуск...</div>
			</div>
		</div>
	</body>
</html>