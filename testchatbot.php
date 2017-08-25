<?php
/**
 * Created by PhpStorm.
 * User: Error404 not found
 * Date: 8/25/2017
 * Time: 9:55 AM
 */
$response=array();
$response['message']=array('text'=>'success');
header('Content-type: application/json');
echo json_encode( $response );
?>