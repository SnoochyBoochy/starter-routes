<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

/* Defines the hook to be used to modify the webpage. */
$hook['display_override'] = array(
                                'class'    => 'MyHooks',
                                'function' => 'massage_data',
                                'filename' => 'MyHooks.php',
                                'filepath' => 'hooks',
                                'params'   => array('controller')
                                );