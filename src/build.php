<?php

if (is_file($autoload = getcwd() . '/vendor/autoload.php')) {
    require $autoload;
} elseif (is_file($autoload = getcwd() . '/../../autoload.php')) {
    require $autoload;
}

if (is_file($autoload = __DIR__ . '/../vendor/autoload.php')) {
    require($autoload);
} elseif (is_file($autoload = __DIR__ . '/../../../autoload.php')) {
    require($autoload);
} else {
    fwrite(STDERR,
        'You must set up the project dependencies, run the following commands:' . PHP_EOL .
        'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        'php composer.phar install' . PHP_EOL
    );
    exit(1);
}

error_reporting(E_ALL);
use MysqlGeneralLogColorizer\Application;
use app
;
$app = new MysqlGeneralLogColorizer\Application();
$app->run();

