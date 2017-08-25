<?php
/**
 * Created by PhpStorm.
 * User: Error404 not found
 * Date: 8/25/2017
 * Time: 9:05 AM
 */
if (! isset($_GET['url']))
{
    die('IncorrectURL!');
}

require(PATH.'/getlink.php');
//nhận URL từ user
$url=$_GET['url'];

$getLink = new getLink();
//Lấy link api
$apiLink = $getLink->mp3Link($mp3Link);
//Lấy link lossless
$jsonLink = $getLink->generatorLink($apiLink);

$mp3=$getLink->getLink320($jsonLink);

$flac=$getLink->getLinkLossless($jsonLink);

$response='{
  "messages": {
{
  "text": "'.$mp3.'"
}
}
}';
print_r(json_encode($response));