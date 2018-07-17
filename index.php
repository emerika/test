<?php
/**
 * User: brad
 * Date: 7/16/18
 * Time: 3:08 PM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);


include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("8vxo0M0hmTWZs0TsOqDRVT54x","3ZpojpGVyDh7ofvc09BoBFwibF9aOzIotJJ7DS6UxUoXEzkg2x");
$value = ["q" => "bemerson"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";

