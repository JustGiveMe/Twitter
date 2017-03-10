<?php

namespace JustGiveMe\Twitter;

use GuzzleHttp\Client as Browser;

class Client {

	private $base_uri = "https://api.twitter.com/1.1/";

	private $include_retweets = true;

	private $guzzle;

	function __construct($consumer_key, $consumer_secret, $access_token, $access_token_secret) {

	}

	public static function all() {}

	public static function find($ids) {

		// Make sure to check if it is array or string

	}

	public function query($string) {}

	public function includeRetweets($set) {
		$this->include_retweets = $set;
		return true;
	}

	public function get_home_timeline() {}

	public function get_mentions() {}

}