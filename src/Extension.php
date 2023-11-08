<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud;

use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\TextUI\RuntimeException;

final class Extension implements BeforeFirstTestHook
{
	private const ARGUMENT_TEMPLATE = 'template';

	private static TestTheCloud $testTheCloud;

	public function __construct(array $options = [])
	{
		if (!array_key_exists(self::ARGUMENT_TEMPLATE, $options)) {
			throw new RuntimeException('Missing required argument: template');
		}

		$this->initTest($options);
	}

	private function initTest(array $options): void
	{
		if (isset(self::$testTheCloud)) {
			throw new RuntimeException('TestTheCloud already initialized');
		}

		self::$testTheCloud = new TestTheCloud($options[self::ARGUMENT_TEMPLATE]);
	}

	public static function getTestTheCloud(): TestTheCloud
	{
		if (!isset(self::$testTheCloud)) {
			throw new RuntimeException('TestTheCloud not initialized');
		}

		return self::$testTheCloud;
	}

	public function executeBeforeFirstTest(): void
	{

	}
}