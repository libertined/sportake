<?php

if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/constants.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/constants.php");

if (file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/functions.php"))
    require_once($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/functions.php");



CModule::IncludeModule("iblock");

// Установим город при переходе через поддомен - spb.partymasters.ru, msk.partymasters.ru
// Используем кэш
$obCache = new CPHPCache();
$cacheLifetime = 86400*7; $cacheID = 'MSG_CITIES'; $cachePath = '/'.$cacheID;
if($obCache->InitCache($cacheLifetime, $cacheID, $cachePath) )
{
   $vars = $obCache->GetVars();
   $GLOBALS['cities'] = $vars['$cities'];
   $GLOBALS['cities2'] = $vars['$cities2'];
}
elseif( $obCache->StartDataCache()  )
{
    $GLOBALS['cities'] = Array();
    $GLOBALS['cities2'] = Array();
    $city_res = CIBlockElement::GetList(Array(), Array("IBLOCK_ID"=>CITIES_IBLOCK_ID));
    while($city = $city_res->GetNext()) {
        $GLOBALS['cities'][$city['ID']] = Array("CITY" => $city['NAME'], "REGION" => $city['PREVIEW_TEXT'], "CODE" => $city['CODE']);
        $GLOBALS['cities2'][$city['CODE']] = $city['ID'];    
    }
}

// Закрываем ошибку с авторизацией через HTTP_AUTH (.htaccess)
if(isset($_SERVER['PHP_AUTH_USER']))
{
    $_SERVER['PHP_AUTH_USER'] = '';
}
