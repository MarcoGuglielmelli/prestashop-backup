<?php

include(dirname(__FILE__).'/config/config.inc.php');
include(dirname(__FILE__).'/init.php');
 
$key = 'latuapassword';
 
if(!Tools::getValue('k') || Tools::getValue('k') != $key)
    die('unauthorized');
 
if(!defined('_PS_ADMIN_DIR_'))
    define('_PS_ADMIN_DIR_',  getcwd().'/latuacartellaadmin');
 
$backup = new PrestaShopBackup();
if($backup->add())
    die('success');
else die('error');