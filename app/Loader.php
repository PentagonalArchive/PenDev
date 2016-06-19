<?php
spl_autoload_register(function ($className) {
    $baseDir   = __DIR__ . DIRECTORY_SEPARATOR . 'Resource'.DIRECTORY_SEPARATOR;
    $nameSpace = 'Pentagonal\\StarterApp\\';
    $className = ltrim($className, '\\');
    if (stripos($className, $nameSpace) !== 0) {
        return;
    }
    $className = substr($className, strlen($nameSpace));
    if (file_exists($baseDir . $className . '.php')) {
        /** @noinspection PhpIncludeInspection */
        require $baseDir . $className . '.php';
    }
});

$app = new \Pentagonal\StarterApp\App();
return $app->run();
