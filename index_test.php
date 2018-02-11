

<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '138484903495684',
  'app_secret' => 'c26c0220164e21d2df595048431b19ce',
  'default_graph_version' => 'v2.12',
  ]);

$accessToken = '138484903495684|mreViJjw_fCCbrBjOR9hKNSEb4k';
// $accessToken = $fb->getDefaultAccessToken();
// var_dump($accessToken);
// die;
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
// $url = "https://graph.facebook.com/$id/albums/811654502181268/photos?access_token=$accessToken";
 
//Make the API call
// $result = file_get_contents($url);

// $albums = $facebook->api(‘/$id/albums’);

// foreach($albums[‘data’] as $album)
// {
//         // get all photos for album
//         $photos = $facebook->api("/{$album[‘id’]}/photos");

//         foreach($photos[‘data’] as $photo)
//         {
//                 echo "<img src='{$photo[‘source’]}’ />", "<br />";
//         }
// }
 
//Decode the JSON result.
// $decoded = json_decode($result, true);
 // var_dump($decoded);

 //$this->ask('Question');;
//Dump it out onto the page so that we can take a look at the structure of the data.
// echo "size:".sizeof($decoded['data']).$PHPEOL;
// echo "<pre>";
// var_dump($decoded['data']);
// echo "</pre>";

//The ID of the post.
// $postId = explode("_", $decoded['data'][0]['id']); 
 
//Tie it all together to construct the URL
// $url2 = "https://www.facebook.com/loris.lovely.lashes.muncie/posts/$postId[1]";
 
//Make the API call
// $result = file_get_contents($url2);
 
//Decode the JSON.
// $decoded = json_decode($result, true);
 
//Dump it out.
// echo $url2."<br>";
//var_dump($decoded);

//echo "<iframe src='".$url."' width='100%' height='100%' seamless></iframe>";

// try {
//   // Returns a `Facebook\FacebookResponse` object
//   $response = $fb->get(
//     '/811654502181268',
//     $accessToken
//   );
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }
// $graphNode = $response->getGraphNode();
// var_dump($graphNode);

// $album_id = $_REQUEST['811654502181268'];
$album_id = '811654502181268';
$photos = $fb->get("/$album_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();

    // var_dump($photos);
    foreach($photos as $photo){
        echo "<br><img src='{$photo['images'][0]['source']}' /><img src='{$photo['images'][5]['source']}' />".PHP_EOL;//Get largest by 0 index
    }



    // $photos = $fb->get("/$album_id/photos?fields=picture", $accessToken)->getGraphEdge()->asArray();
        // var_dump($photos);

?>

