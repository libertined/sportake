<?php
// Склонение существительных взависимости от числительного
function NumberEnd($number, $titles) {
    $cases = array (2, 0, 1, 1, 1, 2);
    return $titles[ ($number%100>4 && $number%100<20)? 2 : $cases[min($number%10, 5)] ];
}

// Определение города в БД по названию и региону
function getCityIDByNameRegion($cityname, $regionname) {
	if($cityname=='Санкт-Петербург' || $cityname=='Москва') {$regionname='';}
    foreach($GLOBALS['cities'] as $kid=>$city1) {
        //echo 'City name: ' . $city1['CITY'] . "                        " ;
        //echo 'Region name: ' . $city1['REGION'] . "\r\n" ;
        if($city1['CITY'] == $cityname && $city1['REGION'] == $regionname) {
            //print_r($city1);
            return $kid;
        }
    }
	return DEFAULT_CITY_ID;
}

// Определение города по IP
function get_city_by_ip($ip){
    $data = file_get_contents_timeout("http://ipgeobase.ru:7020/geo?ip=".$ip);
    if($data){
        //$data = mb_convert_encoding($data, "utf-8", "windows-1251");
        //$data = mb_convert_encoding($data, "windows-1251", "utf-8");
        $xml = simplexml_load_string($data);
        //$city = mb_convert_encoding($xml->ip->city, "utf-8", "windows-1251");
        //$region = mb_convert_encoding($xml->ip->region, "utf-8", "windows-1251");
        $city = $xml->ip->city;
        $region = $xml->ip->region;
        //echo "City from xml: ".$city."\r\n";
        //echo "Region from xml: ".$region."\r\n";
        return getCityIDByNameRegion($city, $region);
    } else {
        //echo "default city: ".DEFAULT_CITY_ID."\r\n";
        return DEFAULT_CITY_ID;
    }
}

// Запрос к IpGeoBase.ru с таймаутом
function file_get_contents_timeout($filename, $timeout=3)
{
    if(strpos($filename,"://")===false) return file_get_contents($filename);
    if(!function_exists("curl_init")) return false;
    $session=curl_init($filename);
    curl_setopt($session,CURLOPT_MUTE,true);
    curl_setopt($session,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($session,CURLOPT_CONNECTTIMEOUT,$timeout);
    curl_setopt($session,CURLOPT_TIMEOUT,$timeout);
    curl_setopt($session,CURLOPT_USERAGENT,"Mozilla/5.0 (compatible)");
    $result=curl_exec($session);
    curl_close($session);
    return $result;
}
