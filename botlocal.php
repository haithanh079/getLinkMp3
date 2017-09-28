
<?php
/**
 * Created by PhpStorm.
 * User: Error404 not found
 * Date: 8/25/2017
 * Time: 8:50 PM
 */
require_once __DIR__.'/vendor/autoload.php';
use juno_okyo\Chatfuel;
$get=$_GET['msg'];
(new Chatfuel())->sendText('hello'.$get);
?>