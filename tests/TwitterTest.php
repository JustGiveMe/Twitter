<?php

use PHPUnit\Framework\TestCase;
use \JustGiveMe\Twitter;
/**
 * @covers JustGiveMe\Twitter\Client
 */

final class TwitterTest extends TestCase {

	public function testCanBeCreated(): void {

		$this->assertInstanceOf(
			Twitter\Client::class,
			Twitter\Client( "4ca4VtfDAJrgKDLE6DeYP7WUr", "0pgH1irKBbWD3o6JRXhUgbICFvMxBKJpU9IoSejVLAJLX9gQue", "14358901-Bou4V6v2c1w4cU9pIRbjaqw5VklVgNoZmXrY3jts4", "lDh4jMADb91rITfpfJPxjyJnmiEKFWAfR7nVIjhjB03B3" )
		);

	}

	public function testAuthorizationFailure(): void {

		$this->expectException(Twitter\Exceptions\AuthorizationFailedException::class);

		Twitter\Client('a','b','c','d');

	}

}