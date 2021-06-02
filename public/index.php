<?php

use App\Framework\Kernel;
use Symfony\Component\HttpFoundation\Request;

require_once "./../vendor/autoload.php";

include dirname(__DIR__) . '/config/bootstrap.php';

$request = Request::createFromGlobals();
$kernel = new Kernel($request);
$kernel->execute();

echo $kernel->terminate();
