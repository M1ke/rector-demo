<?php

use Rector\Config\RectorConfig;
use Rector\Php84\Rector\Param\ExplicitNullableParamTypeRector;

return RectorConfig::configure()
	->withPaths([
		__DIR__ . '/src',
	])
	->withRules([
		ExplicitNullableParamTypeRector::class,
	]);
