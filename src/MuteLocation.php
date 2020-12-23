<?php
namespace MuteLocation;

class MuteLocation implements Locator {
	private $next;
	private $handler;

	function __construct(Locator $next, ErrorHandler $handler){
		$this->next = $next;
		$this->handler = $handler;
	}

	public function locate(Ip $ip): ?Location {
		try {
			return $this->next->locate($ip);
		} catch (\RuntimeException $exception) {
			$this->handler->handle($exception);
			return null;
		}
	}
}