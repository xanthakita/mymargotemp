<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '138484903495684',
  'app_secret' => 'fe7fd7f292ff36c9eefab89ee0cca56f',
  'default_graph_version' => 'v2.11',
  ]);

$accessToken = '138484903495684|fe7fd7f292ff36c9eefab89ee0cca56f';
$fb->setDefaultAccessToken($accessToken);

// Send the request to Graph
try {
  $response = $fb->get('/138484903495684/page/feed, full_picture, created_time');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
var_dump($response);
exit;

foreach($response->getDecodedBody()['data'] as $item) {
    foreach ($item as $key => $value) {
        if($key == 'full_picture') { echo '<img src="'.$value.'" width="300px" height="300px"/>'; }
        elseif($key == 'created_time') { echo date('F jS, Y h:i:s', strtotime($value));} else {
        echo $key .": ". $value;}
        echo "<br/>";
    }
    echo "<br/>--------------<br/>";
 }   

    