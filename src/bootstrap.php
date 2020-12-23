<?php
require __DIR__ . '/../vendor/autoload.php';


use geoApiLib\Location;
use MuteLocation;
//use geoApiLib\ChainLocator;
//use geoApiLib\interfaces\Locator;
//use geoApiLib\helpers\Ip ;
//use geoApiLib\helpers\HttpClient ;
//use geoApiLib\helpers\ErrorHandler ;
//use geoApiLib\helpers\Logger ;
//use geoApiLib\helpers\cache\CacheLocator;
//use geoApiLib\helpers\cache\Cache;
//use geoApiLib\locators\IpGeoLocationLocator;

require 'interfaces/Locator.php';
require 'helpers/HttpClient.php';
require 'helpers/ErrorHandler.php';
require 'helpers/Logger.php';
require 'helpers/cache/CacheLocator.php';
require 'helpers/cache/Cache.php';
require 'locators/IpGeoLocationLocator.php';
require 'ChainLocator.php';
require 'MuteLocation.php';
require 'Location.php';
require 'helpers/Ip.php';

$client = new HttpClient();
$handler = new ErrorHandler(new Logger());
$cache = new Cache();

$ipGeo = new IpGeoLocationLocator($client, '8566186001a6421b9cd9a2c97eaf8a2f');
$chain = new ChainLocator(
	new MuteLocation(
		$ipGeo,
		$handler
	)
);

$myIp = file_get_contents('http://bot.whatismyipaddress.com/');
print_r($chain->locate(new Ip($myIp)));