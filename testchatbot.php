<?php
/**
 * Created by PhpStorm.
 * User: Error404 not found
 * Date: 8/25/2017
 * Time: 9:55 AM
 */
$response=array();
$response['message']=array();
$response['message'][0]=array('text'=>'success');
$response['message'][1]=array('text'=>'abc');
header('Content-type: application/json');
print_r(json_encode($response));
?>