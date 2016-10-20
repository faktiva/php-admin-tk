<?php
/*
 * Admin Tools Dashboard
 *
 * @author "Emiliano Gabrielli" <albert@faktiva.com>
 */

ini_set('display_errors', 1);
ini_set('log_errors', 1);
umask(0);

require_once __DIR__.'/vendor/autoload.php';

define('BASE_DIR', __DIR__.'/httpdocs');
define('BASE_URI', rtrim(dirname($_SERVER['PHP_SELF']), '/'));

define('TOOLS_DIR', BASE_DIR.'/tools');
define('TOOLS_URI', BASE_URI.'/tools');
