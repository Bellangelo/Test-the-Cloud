<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud\TestCases;

use Bellangelo\TestTheCloud\Extension;
use Bellangelo\TestTheCloud\TestTheCloud;
use PHPUnit\Framework\TestCase;

class CloudTestCase extends TestCase
{
	public function getExtension(): TestTheCloud
	{
		return Extension::getTestTheCloud();
	}
}