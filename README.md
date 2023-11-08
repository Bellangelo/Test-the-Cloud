# Test the Cloud
A PHPUnit extension for testing your cloud infrastructure.

## Installation
```
composer require bellangelo/test-the-cloud
```

## Configuring the extension
```diff
<phpunit
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:noNamespaceSchemaLocation="vendor/phpunit/phpunit/phpunit.xsd"
	bootstrap="vendor/autoload.php"
>
+	<extensions>
+		<extension class="Bellangelo\TestTheCloud\Extension">
+			<arguments>
+				<array>
+					<element key="template">
+						<string>my-template</string>
+					</element>
+				</array>
+			</arguments>
+		</extension>
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
- [ ] Add support for PHPUnit 10+.