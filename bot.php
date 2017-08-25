<?php
require (__DIR__.'vendor/autoload.php');
use juno_okyo\Chatfuel;
if (isset($_GET['msg']) && ! empty($_GET['msg']))
{
    (new Chatfuel())->sendText($_GET['msg']);
}


?>