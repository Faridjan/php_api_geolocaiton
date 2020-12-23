<?php
namespace geoApiLib\helpers\cache\CacheLocator;

class CacheLocator implements Locator {
	private $next, $cache, $ttl;

	public  function __constructor(Locator $next, Cache $cache, int $ttl) {
		$this->next = $next;
		$this->cache = $cache;
		$this->ttl = $ttl;
	}

	public function locate(Ip $ip): ?Location {
		$key = 'location-' .$ip->getValue();
		$location = $this->cache->get();

		if($location === null) {
			$location = $this->next->locate($ip);
			$this->cache->set($key, $location, $this->ttl);
		}

		return $location;
	}
}