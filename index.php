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
// try {
//   $response = $fb->get('/230941890252535/page/feed/, full_picture, created_time');
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   // When Graph returns an error
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   // When validation fails or other local issues
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }

$id='230941890252535';

//Tie it all together to construct the URL
$url = "https://graph.facebook.com/$id/posts?access_token=$accessToken";
 
//Make the API call
$result = file_get_contents($url);
 
//Decode the JSON result.
$decoded = json_decode($result, true);
 
//Dump it out onto the page so that we can take a look at the structure of the data.
echo "size:".sizeof($decoded['data']).$PHPEOL;
echo "<pre>";
var_dump($decoded['data']);
echo "</pre>";

//The ID of the post.
$postId = explode("_", $decoded['data'][0]['id']); 
 
//Tie it all together to construct the URL
$url = "https://www.facebook.com/loris.lovely.lashes.muncie/posts/$postId[1]";
 
//Make the API call
$result = file_get_contents($url);
 
//Decode the JSON.
$decoded = json_decode($result, true);
 
//Dump it out.
//echo $url.$PHPEOL;
//var_dump($decoded);

echo "<iframe src='".$url."' width='150' height='150' seamless></iframe>";

foreach($response->getDecodedBody()['data'] as $item) {
    foreach ($item as $key => $value) {
        if($key == 'full_picture') { echo '<img src="'.$value.'" width="300px" height="300px"/>'; }
        elseif($key == 'created_time') { echo date('F jS, Y h:i:s', strtotime($value));} else {
        echo $key .": ". $value;}
        echo "<br/>";
    }
    echo "<br/>--------------<br/>";
 }   

    