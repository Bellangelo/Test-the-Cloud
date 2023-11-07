<?php

declare(strict_types=1);

namespace Bellangelo\TestTheCloud;

final class TestTheCloud
{
	private string $template;

	public function __construct(string $template)
	{
		$this->setTemplate($template);
	}

	private function setTemplate(string $template): void
	{
		$this->template = $template;
	}

	public function getTemplate(): string
	{
		return $this->template;
	}
}