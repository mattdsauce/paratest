<?php

/*
 * Global setup for running all unit tests.
 */


/**
 *
 * @category    tests
 * @package     selenium
 * @subpackage  runner
 * @author      Martin Bedouret <martin@softwareadvice.com>
 *
 */
define('SELENIUM_TESTS_BASEDIR', realpath(__DIR__ . DIRECTORY_SEPARATOR));
define(
    'SELENIUM_TESTS_SCREENSHOTDIR',
    realpath(SELENIUM_TESTS_BASEDIR . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'screenshots')
);

if (($phantomPath = getenv('PHANTOMJS_BINARY_PATH')) !== false) {
    define('PHANTOMJS_BINARY_PATH', $phantomPath);
} else {
    define('PHANTOMJS_BINARY_PATH', '/opt/phantomjs/phantomjs-2.1.1-linux-x86_64/bin/phantomjs');
    echo 'Note: PHANTOMJS_BINARY_PATH is not defined in the environment. ' . PHANTOMJS_BINARY_PATH
        . ' will be used as the default';
}

set_include_path(
    implode(
        PATH_SEPARATOR,
        [
            realpath(SELENIUM_TESTS_BASEDIR . DIRECTORY_SEPARATOR . 'tests'),
            get_include_path(),
        ]
    )
);

$_SERVER['SERVER_NAME'] = 'localhost';

ini_set('display_errors', true);
ini_set('error_prepend_string', '');
ini_set('error_append_string', '');
ini_set('html_errors', false);

