<?php

use app\Http\controllers\Dashboard as Dashboard;
require_once __DIR__."../vendor/autoload.php";

/*Page Loader*/
$boot = new Dashboard();
$boot->render();
