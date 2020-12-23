<?php
namespace geoApiLib\helpers\HttpClient;

class HttpClient {
	public function get(string $url): ?string {
		$response = @file_get_contents($url);
		if($response === false) {
			throw new \RuntimeException('Message');
		}
		return $response;
	}
}
