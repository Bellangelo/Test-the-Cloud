<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud\Helpers\Aws;

use Aws\EventBridge\EventBridgeClient;

trait EventBridge
{
	private EventBridgeClient $eventBridgeClient;

	public function setUpEventBridgeClient(array $clientArguments): void
	{
		// TODO: Fill arguments.
		$this->eventBridgeClient = new EventBridgeClient($clientArguments);
	}

	public function assertRulesExistForTarget(string $targetArn): void
	{
		$rules = $this->eventBridgeClient->listRuleNamesByTarget(
			[
				'TargetArn' => $targetArn,
			]
		);

		$this->assertNotEmpty($rules->get('RuleNames'));
	}
}