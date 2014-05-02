<?php

namespace OpenClassrooms\Tests;

use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;

error_reporting(E_ALL | E_STRICT);

/** @var ClassLoader $loader */
require __DIR__ . '/../vendor/autoload.php';
AnnotationRegistry::registerAutoloadNamespace(
    'OpenClassrooms\CleanArchitecture\Annotations',
    dirname(__DIR__) . '/src'
);
