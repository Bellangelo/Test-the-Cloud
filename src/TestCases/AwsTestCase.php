<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud\TestCases;

use Bellangelo\TestTheCloud\Helpers\Aws\CloudWatchLogs;
use Bellangelo\TestTheCloud\Helpers\Aws\EventBridge;

class AWSTestCase extends CloudTestCase
{
	use EventBridge;
	use CloudWatchLogs;
}