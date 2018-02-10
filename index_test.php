
  <html>
    <body>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=138484903495684';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
// echo "size:".sizeof($decoded['data']).$PHPEOL;
// echo "<pre>";
// var_dump($decoded['data']);
// echo "</pre>";

//The ID of the post.
$postId = explode("_", $decoded['data'][0]['id']); 
 
//Tie it all together to construct the URL
$url2 = "https://www.facebook.com/loris.lovely.lashes.muncie/posts/$postId[1]";
 
//Make the API call
// $result = file_get_contents($url2);
 
//Decode the JSON.
// $decoded = json_decode($result, true);
 
//Dump it out.
echo $url2."<br>";
//var_dump($decoded);

//echo "<iframe src='".$url."' width='100%' height='100%' seamless></iframe>";

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get(
    '/811654502181268',
    $accessToken
  );
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
var_dump($graphNode);
echo "Count: $graphNode->count".PHP_EOL;
?>
<hr>

      <!-- <div id="fb-root"></div> -->
      <!-- <h1>test</h1> -->
      <!-- <h2><?php //echo $url2; ?></h2> -->
<!-- <div class="fb-video" data-href="<?php //echo $url2; ?>"" data-width="500" data-show-text="true"></div> -->
<hr>
<!-- <iframe sandbox="allow-same-origin allow-scripts allow-popups allow-forms" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Floris.lovely.lashes.muncie%2Fposts%2F1930832403596800&width=500&show_text=true&appId=138484903495684&height=0" width="500" height="0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe> -->

</body>
</html>
