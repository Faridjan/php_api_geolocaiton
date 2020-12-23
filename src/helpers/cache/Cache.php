<?php
namespace geoApiLib\helpers\cache\Cache;

class Cache {
	public function get(): mixed {return 'cache';}
	public function set(string $id, $data, $ttl): void {}
}