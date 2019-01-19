<?php
    $version = getenv('REMOTE_ADDR') ?: "0.0";
    echo "HelloWorld: $version"; 