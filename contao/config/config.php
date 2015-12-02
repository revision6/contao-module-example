<?php

/**
 * Example contao module.
 *
 * PHP version 5
 *
 * @package    ContaoModuleExample
 * @author     Christopher Boelter <c.boelter@revision6.de>
 * @copyright  Revision6 GmbH
 * @license    LGPL.
 * @filesource
 */

// Backend-Module
$GLOBALS['BE_MOD']['content']['list'] = array(
    'tables' => array(
        'tl_list',
    ),
);

// Frontend-Module
$GLOBALS['FE_MOD']['application']['list'] = 'Revision6\\ModuleExample\\Module\\Listing';
