<?php
require __DIR__."/vendor/autoload.php";
use Franyza\Repo3\branding;

$branding = new Branding();
echo 'Hello from '.$branding->getBrandingCode();