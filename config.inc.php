<?php

/*
 * This file is part of the Faktiva "PHP Admin ToolKit".
 *
 * (c) Faktiva (http://faktiva.com)
 *
 * NOTICE OF LICENSE
 * This source file is subject to the CC BY-SA 4.0 license that is
 * available at the URL https://creativecommons.org/licenses/by-sa/4.0/
 *
 * DISCLAIMER
 * This code is provided as is without any warranty.
 * No promise of being safe or secure
 *
 * @author   Emiliano 'AlberT' Gabrielli <albert@faktiva.com>
 * @license  https://creativecommons.org/licenses/by-sa/4.0/  CC-BY-SA-4.0
 * @source   https://github.com/faktiva/php-admin-tk
 */

umask(0);

require_once __DIR__.'/vendor/autoload.php';

define('BASE_DIR', __DIR__.'/web');
define('BASE_URI', rtrim(dirname($_SERVER['PHP_SELF']), '/'));

define('TOOLS_DIR', BASE_DIR.'/tools');
define('TOOLS_URI', BASE_URI.'/tools');
