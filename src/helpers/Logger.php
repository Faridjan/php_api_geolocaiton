<?php
namespace geoApiLib\helpers\Logger;

class Logger {
	public function error(string $message, array $exception) {
		echo $message .PHP_EOL;
	}
}