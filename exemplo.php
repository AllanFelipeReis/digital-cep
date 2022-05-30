<?php
require_once "vendor/autoload.php";

use Allan\DigitalCep\Search;

$search = new Search;

$result = $search->getAddressFromZipCode('13506450');
print_r($result);