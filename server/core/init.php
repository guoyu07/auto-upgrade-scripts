<?php
if (!defined('IN_SINOSKY')) exit(1);

require_once(build_file_path([
    'config.php'
]));

if (DEBUG)
    error_reporting(E_ALL);
else
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);

date_default_timezone_set(TIMEZONE);

spl_autoload_register(function ($class) {
    if (!class_exists($class, false))
        require_once(build_file_path([
            'lib',
            $class . '.php'
        ]));

    return true;
});

require_once(build_file_path([
    'core',
    'output.php'
]));
