<?php

use Rector\Config\RectorConfig;
use Rector\Php84\Rector\Param\ExplicitNullableParamTypeRector;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
	->withPaths([
		__DIR__.'/src',
	])
	// This line is important _if_ running on a PHP version prior to 8.4
	->withPhpVersion(PhpVersion::PHP_84)
	->withRules([
		ExplicitNullableParamTypeRector::class,
	]);
