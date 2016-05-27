<?php
/*
 * Admin Vhost interface.
 *
 * @author "Emiliano Gabrielli" <emiliano.gabrielli@gmail.com>
 */

ini_set('display_errors', 1);
ini_set('log_errors', 1);

define('ROOT_DIR', __DIR__);
define('TOOLS_URI', '/tools');
define('TOOLS_DIR', sprintf('%s/%s', ROOT_DIR, rtrim(TOOLS_URI, '/')));

$bootstrap = dirname(ROOT_DIR).'/vendor/autoload.php';
if (file_exists($bootstrap)) {
    require_once $bootstrap;
}

umask(0);
