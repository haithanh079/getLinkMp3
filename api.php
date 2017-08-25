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

require(__DIR__.'/getlink.php');
//nhận URL từ user
$mp3Link=$_GET['url'];
//$mp3Link='http://mp3.zing.vn/bai-hat/1234-Chi-Dan/ZW7FE0FC.html';
$getLink = new getLink();
//Lấy link api
$apiLink = $getLink->mp3Link($mp3Link);
//Lấy link lossless
$jsonLink = $getLink->generatorLink($apiLink);

$mp3=$getLink->getLink320($jsonLink);

$flac=$getLink->getLinkLossless($jsonLink);

$response=array();
$response['message']=array('text'=>'success');
//
//    '{
//  "messages": {
//{
//  "text": "'.$mp3.'"
//}
//}
//}';
header('Content-type: application/json');
echo json_encode( $response );