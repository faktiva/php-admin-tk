<?php
/*
 * Admin Tools Dashboard
 *
 * @author "Emiliano Gabrielli" <albert@faktiva.com>
 */

ini_set('display_errors', 1);
ini_set('log_errors', 1);

define('INSTALL_DIR', __DIR__);
define('TOOLS_DIR', INSTALL_DIR.'/tools');
define('TOOLS_URI', dirname($_SERVER['PHP_SELF']).'/tools');

umask(0);

require_once dirname(INSTALL_DIR).'/vendor/autoload.php';
