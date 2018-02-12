
<?php
require 'vendor/autoload.php';
require('connect-php-sdk/autoload.php');

# setup authorization
\SquareConnect\Configuration::getDefaultConfiguration()->setAccessToken($access_token);
# create an instance of the Location API $locations_api = new \SquareConnect\Api\LocationsApi();

try {
  $locations = $locations_api->listLocations();
  print_r($locations->getLocations());
} catch (\SquareConnect\ApiException $e) {
  echo "Caught exception!<br/>";
  print_r("<strong>Response body:</strong><br/>");
  echo "<pre>"; var_dump($e->getResponseBody()); echo "</pre>";
  echo "<br/><strong>Response headers:</strong><br/>";
  echo "<pre>"; var_dump($e->getResponseHeaders()); echo "</pre>";
  exit(1);
}

?>