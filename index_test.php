

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
// $album_id = '1676498949030148';
// $album_id = '290876794259044';

// $photos = $fb->get("/$album_id/photos?fields=images&name&width", $accessToken)->getGraphEdge()->asArray();

$photos = $fb->get("/$album_id/photos?fields=*", $accessToken)->getGraphEdge()->asArray();

    foreach($photos as $photo){
        echo "<br><img src='{$photo['images'][3]['source']}' width='25%' />".PHP_EOL;//Get largest by 0 index
        echo "<br>name:{$photo['name']}<br>".PHP_EOL;
      echo "<pre>";
      var_dump($photo);
      echo "</pre>";
    }

    // for ($x=0; $x<9; $x++)
    // {
    //   echo "<br><img src='{$photos[$x]['images'][3]['source']}' width='25%' />".PHP_EOL;
    // }

/* PHP SDK v5.0.0 */
/* make the API call */
// try {
//   // Returns a `Facebook\FacebookResponse` object
//   $response = $fb->get(
//     '/loris.lovely.lashes.muncie/videos',
//     $accessToken
//   )->getGraphEdge()->asArray();
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }
// $graphNode = $response->getGraphNode();
/* handle the result */
//https://www.facebook.com/loris.lovely.lashes.muncie/videos/1973377869342253/

// foreach($response as $video)
// {
//   echo "<pre>";var_dump($video);echo "</pre>";
//   $vid[] = "https://www.facebook.com/loris.lovely.lashes.muncie/videos/".$video['id']."/";
//   $description[]=$video['description'];

// }

//   echo "<pre>";var_dump($vid);echo "</pre>";

//   echo "<pre>";var_dump($description);echo "</pre>";
?>
<html>
<head><<title>test</title>
</head>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=138484903495684&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h1>test</h1>
<div class="fb-video" data-href="<?php echo $vid[0]; ?>" data-width="500" data-show-text="false"><p><?php echo $description[0]; ?></p><blockquote cite="<?php echo $vid[0]; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $vid[0]; ?>"></a>Posted by <a href="https://www.facebook.com/loris.lovely.lashes.muncie/">Lori&#039;s Lovely Lashes</a> on Monday, February 12, 2018</blockquote></div>
</body>
</html>


