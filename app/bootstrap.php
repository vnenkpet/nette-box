<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

//$configurator->setDebugMode(TRUE);  // debug mode MUST NOT be enabled on production server
$configurator->enableDebugger(__DIR__ . '/../log');

$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->addDirectory(__DIR__ . '/../vendor/others')
	->addDirectory(LIBS_DIR . '/janmarek/webloader/WebLoader/Filter') // add webloader filters
	->addDirectory(LIBS_DIR . '/natxet') // add CssMin filter for webloader
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

Kdyby\Annotations\DI\AnnotationsExtension::register($configurator);
Kdyby\Console\DI\ConsoleExtension::register($configurator);
Kdyby\Events\DI\EventsExtension::register($configurator);
Kdyby\Doctrine\DI\OrmExtension::register($configurator);

$container = $configurator->createContainer();

return $container;
