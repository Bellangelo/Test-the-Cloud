<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud\Helpers\Aws;

use Aws\CloudWatchLogs\CloudWatchLogsClient;

trait CloudWatchLogs
{
	private CloudWatchLogsClient $cloudWatchLogsClient;

	public function setUpCloudWatchClient(array $clientArguments): void
	{
		// TODO: Fill arguments.
		$this->cloudWatchLogsClient = new CloudWatchLogsClient($clientArguments);
	}

	public function assertCloudWatchLogsExist(
		string $logGroupName,
		string $logStreamName,
		?int $startTimestamp = null,
		?int $endTimestamp = null
	): void {
		$events = $this->cloudWatchLogsClient->getEventSelectors(
			[
				'logGroupName' => $logGroupName,
				'logStreamName' => $logStreamName,
				'startTimestamp' => $startTimestamp,
				'endTimestamp' => $endTimestamp,
				'limit' => 1
			]
		);

		$this->assertNotEmpty($events->get('events'));
	}
}