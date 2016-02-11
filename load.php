<?php

//Config App
require_once(DIR_ROOT . '/config/app.php');

//Composer autoload
require_once(DIR_ROOT . '/vendor/autoload.php');

//Constants
require_once(DIR_ROOT . '/core/constants.php');

//Config database
require_once(DIR_ROOT . '/config/database.php');

// VirtualQMOD
if(ENABLE_VQMOD) {
    class_alias('Newcart\System\Vqmod\Vqmod', 'Vqmod');
    Vqmod::bootup(DIR_STORAGE);
}

//Bootstrap
require_once(DIR_APPLICATION . 'bootstrap.php');