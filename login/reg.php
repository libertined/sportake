<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?>
<main class="page-content page-content--padd-t page-login">
    <div class="page-content-inner">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__list breadcrumbs--list-main"><a href="/" class="breadcrumbs__item">Главная</a></li>
            <li class="breadcrumbs__list breadcrumbs--list-current"><span class="breadcrumbs__item">Регистрация</span></li>
        </ul>

        <div class="padd-t-20">
            <div class="header-page">
                <h1 class="header-page__title header-page--login"><?$APPLICATION->ShowTitle()?></h1>
            </div>
        </div>
    </div>

    <div class="bg-lite marg-t-20 page-content page-content--padd-t page-content--padd-b">
        <div class="page-content-inner">
            <div class="row">
                <div class="col-12-3 visible-adaptive">&nbsp;</div>
                <div class="col-12-6 col-adaptive">
                <?$APPLICATION->IncludeComponent("bitrix:main.register", "regist",
                    Array(
                    "USER_PROPERTY_NAME" => "",
                        "SEF_MODE" => "Y",
                        "SHOW_FIELDS" => array(	// Поля, которые показывать в форме
                            0 => "EMAIL",
                            1 => "NAME",
                        ),
                        "REQUIRED_FIELDS" => array(	// Поля, обязательные для заполнения
                            0 => "EMAIL",
                            1 => "NAME",
                        ),
                        "AUTH" => "Y",	// Автоматически авторизовать пользователей
                        "USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
                        "SUCCESS_PAGE" => "",	// Страница окончания регистрации
                        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                        "USER_PROPERTY" => "",	// Показывать доп. свойства
                        "SEF_FOLDER" => "/",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false
                );?>
                </div>
                <div class="col-12-3 visible-adaptive">&nbsp;</div>
            </div>
        </div>
    </div>
</main>
    <!-- Подключаем стили только для этой страницы -->
    <script type="text/javascript" src="js/page-login.js"></script>
    <script type="text/javascript" src="js/pseudo-check.js"></script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>