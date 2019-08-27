<?php

// Set limits
ini_set('max_execution_time', 120);
ini_set('memory_limit', '256M');

// Turn it all on.
error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');

require_once(__DIR__.'/requirements/RequirementsChecker.php');

$checker = new RequirementsChecker();
$checker->checkCraft()->render();
