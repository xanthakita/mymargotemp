

<?php
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '138484903495684',
  'app_secret' => 'c26c0220164e21d2df595048431b19ce',
  'default_graph_version' => 'v2.12',
  ]);

$accessToken = '138484903495684|mreViJjw_fCCbrBjOR9hKNSEb4k';
$fb->setDefaultAccessToken($accessToken);
$id='230941890252535';
$album_id = '811654502181268';
$photos = $fb->get("/$album_id/photos?fields=images&width", $accessToken)->getGraphEdge()->asArray();


    // foreach($photos as $photo){
    //     echo "<br><img src='{$photo['images'][3]['source']}' width='25%' />".PHP_EOL;//Get largest by 0 index
    // }

    for ($x=0; $x<9; $x++)
    {
      echo "<br><img src='{$photos[$x]['images'][3]['source']}' width='25%' />".PHP_EOL;
    }


?>

