<?php

//Config App
if (is_file(DIR_ROOT . '/config/app.php')) {
    require_once(DIR_ROOT . '/config/app.php');
}

//Constants
if (is_file(DIR_ROOT . '/opencart/constants.php')) {
    require_once(DIR_ROOT . '/opencart/constants.php');
}

//Config database
if (is_file(DIR_ROOT . '/config/database.php')) {
    require_once(DIR_ROOT . '/config/database.php');
}

//Bootstrap
if (is_file(DIR_APPLICATION . 'bootstrap.php')) {
    require_once(DIR_APPLICATION . 'bootstrap.php');
}

// VirtualQMOD
\Prhost\System\Vqmod\Vqmod::bootup();