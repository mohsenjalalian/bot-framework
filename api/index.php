<?php
/**
 * Created by PhpStorm.
 * User: m.mesripour
 * Date: 2016-10-29
 * Time: 8:59 AM
 */

date_default_timezone_set("Asia/Tehran");

# composer autoload
require __DIR__ . '/../vendor/autoload.php';

# app autoload
require __DIR__ . '/../src/autoload.php';

# settings
require __DIR__ . '/../src/settings.php';

# dependencies
require __DIR__ . '/../src/dependencies.php';

# dispatch
require __DIR__ . '/../src/dispatcher.php';

# run app
require __DIR__ . '/../src/run.php';


