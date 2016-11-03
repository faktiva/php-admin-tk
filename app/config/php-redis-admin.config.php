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

require_once __DIR__.'/config.dist.php';

$config = array_merge(
    $config,
    /* the following are your custom settings ... */
    array(
        'auth' => null,   /* disable basic auth */
        'log' => array(
            'driver' => 'file',
            'threshold' => 0, /* 0: Disable Logging, 1: Error, 2: Warning, 3: Notice, 4: Info, 5: Debug */
            'file' => array('directory' => 'var/logs'),
        ),
    )
);

return $config;
