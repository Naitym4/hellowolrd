<?php
    $version = getenv('APP_VERSION') ?: "0.0";
    $hostname = getenv('HOSTNAME') ?: "";
    echo "<pre>";
    echo "HelloWorld", PHP_EOL;
    echo "version: $version", PHP_EOL;
    echo "hostname: $hostname", PHP_EOL;
    echo "</pre>";
    phpinfo();