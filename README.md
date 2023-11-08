# Test the Cloud
A PHPUnit extension for testing your cloud infrastructure.

## Installation
```
composer require bellangelo/test-the-cloud
```

## Configuring the extension
```xml
<phpunit
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:noNamespaceSchemaLocation="vendor/phpunit/phpunit/phpunit.xsd"
	bootstrap="vendor/autoload.php"
>
	<extensions>
		<bootstrap class="Bellangelo\TestTheCloud\Extension">
		    <parameter name="template" value="my-template"/>
		</bootstrap>
	</extensions>
	<testsuites>
		<testsuite name="unit">
			<directory>test/Unit/</directory>
		</testsuite>
	</testsuites>
</phpunit>
```

## Roadmap
- [ ] Load AWS credentials through the configuration.
- [ ] Assert resources contain tag.
- [ ] Enforce name conventions in resources.