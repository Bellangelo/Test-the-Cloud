<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud\TestCases;

use Bellangelo\TestTheCloud\Helpers\Aws\CloudWatchLogs;
use Bellangelo\TestTheCloud\Helpers\Aws\EventBridge;
use PHPUnit\Framework\TestCase;

class AWSTestCase extends TestCase
{
	use EventBridge;
	use CloudWatchLogs;
}