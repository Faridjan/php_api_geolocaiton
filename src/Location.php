<?php
namespace geoApiLib\Location;

class Location {
	private $_country;
	private $_region;
	private $_city;

	public function __construct(
		string $country,
		?string $region,
		?string $city
	){
		$this->_country = $country;
		$this->_region = $region;
		$this->_city = $city;
	}

	public function getCountry(): string {
		return $this->_country;
	}
	public function getRegion(): ?string {
		return $this->_region;
	}
	public function getCity(): ?string {
		return $this->_city;
	}
}
