<?php
namespace geoApiLib\helpers\Ip;

class Ip {
	private $_value;

	public function __construct(string $ip) {
		if(empty($ip)) throw new InvalidArgumentException('Empty IP.');
		if(filter_var($ip, FILTER_VALIDATE_IP) == false) throw new InvalidArgumentException('Invalid IP ' .$ip);
		$this->_value = $ip;
	}

	public function getValue(): string {
		return  $this->_value;
	}
}

