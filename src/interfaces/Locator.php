<?php
namespace geoApiLib\interfaces\Locator;

interface Locator {
	public function locate(Ip $ip): ?Location;
}