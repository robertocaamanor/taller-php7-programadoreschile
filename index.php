<?php

use App\Router;
use App\Request;

require "vendor/autoload.php";

Router::load('app/routers.php')->send(Request::uri(), Request::method());