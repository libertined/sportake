<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
global $USER;
?>
<!DOCTYPE html>
<html class="<?= LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle()?> Sportake.ru | Прокат спорт-инвентаря</title>
    <title>Sportake.ru | Прокат спорт-инвентаря</title>
    <?$APPLICATION->ShowHead();?>
</head>
<body>
<?$APPLICATION->ShowPanel()?>
<div class="content-top">
    <div class="content-top-inner">
        <header class="page-header">
            <div class="page-header__desktop">
                <div class="page-header__top">
                    <div class="page-content-inner">
                        <div class="row">
                            <div class="col-12-4">
                                <div class="smart_search smart_search--min">
                                    <div class="smart_search__text">Санкт-Петербург</div>
                                    <div class="smart_search__body">
                                        <input type="text" name="" value="" placeholder="Ваш город" class="smart_search__input" autocomplete="off" />
                                        <input type="hidden" name="" value="" class="smart_search__id" />
                                        <div class="smart_search__result"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12-8">
                                <div class="after-parent">
                                    <div class="after-parent right">
                                        <div class="left"><a href="" class="page-header__bookmarks marg-r-40">4</a></div>
                                        <div class="left"><a href="" class="page-header__link marg-r-20">Войти</a></div>
                                        <div class="left"><a href="" class="btn btn--min btn--icon btn--icon-take marg-r-10">Возьму на прокат</a></div>
                                        <div class="left"><a href="" class="btn btn--orange btn--min btn--icon btn--icon-leave">Сдам в прокат</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-header__adaptive">
                <div class="page-header__top">
                    <div class="page-content-inner">
                        <div class="row">
                            <div class="col-12-2">
                                <div class="nav-adaptive">
                                    <div class="nav-adaptive_icon"></div>
                                </div>
                            </div>

                            <div class="col-12-10">
                                <div class="smart_search smart_search--min">
                                    <div class="smart_search__text">Санкт-Петербург</div>
                                    <div class="smart_search__body">
                                        <input type="text" name="" value="" placeholder="Ваш город" class="smart_search__input" autocomplete="off" />
                                        <input type="hidden" name="" value="" class="smart_search__id" />
                                        <div class="smart_search__result"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-content-inner">
                <div class="page-header__middle">
                    <div class="row">
                        <div class="col-12-5 col-adaptive center-adaptive">
                            <div class="page-header__logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="sportake logo" /></div>
                        </div>
                        <div class="col-12-7 col-adaptive top-adaptive">
                            <div class="page-header__search">
                                <div class="smart_search">
                                    <div class="smart_search__text">Поиск: велосипед, сноуборд, гидроцикл...</div>
                                    <div class="smart_search__body">
                                        <input type="text" name="" value="" placeholder="Начать поиск..." class="smart_search__input" autocomplete="off" />
                                        <input type="hidden" name="" value="" class="smart_search__id" />
                                        <div class="smart_search__result"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-nav">
                <div class="page-content-inner">
                    <ul class="main-nav__list">
                        <li class="main-nav__item main-nav--item-active"><a href="">Зимний сезон</a></li>
                        <li class="main-nav__item"><a href="">Летний сезон</a></li>
                        <li class="main-nav__item"><a href="">Отдых и туризм</a></li>
                        <li class="main-nav__item"><a href="">Водный спорт</a></li>
                        <li class="main-nav__item"><a href="">Развлечения</a></li>
                        <li class="main-nav__item"><a href="">Фитнес</a></li>
                    </ul>
                </div>
            </nav>

            <div class="nav-mobile">
                <div class="nav-mobile__title">Каталог</div>
                <ul class="nav-mobile__list">
                    <li class="nav-mobile__item"><a href="">Зимний сезон</a></li>
                    <li class="nav-mobile__item"><a href="">Летний сезон</a></li>
                    <li class="nav-mobile__item"><a href="">Отдых и туризм</a></li>
                    <li class="nav-mobile__item"><a href="">Водный спорт</a></li>
                    <li class="nav-mobile__item"><a href="">Развлечения</a></li>
                    <li class="nav-mobile__item"><a href="">Фитнес</a></li>
                </ul>
            </div>
        </header>