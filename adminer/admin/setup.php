<?php

// Load Dolibase
require_once '../autoload.php';

// Load Dolibase SetupPage class
dolibase_include_once('core/pages/setup.php');

// Create Setup Page using Dolibase
$page = new SetupPage('Setup', '$user->admin', false, false, false);

$page->addJsFile('setup.js');

$page->begin();

$page->addSubTitle('AdminerLogin');

$page->showTemplate('setup.php');

$page->end();
