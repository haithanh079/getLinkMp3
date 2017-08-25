<?php
$json ='{
  "sender":{
    "id":"USER_ID"
  },
  "recipient":{
    "id":"PAGE_ID"
  },
  "timestamp":1458692752478,
  "message":{
    "mid":"mid.1457764197618:41d102a3e1ae206a38",
    "text":"hello, world!",
    "quick_reply": {
      "payload": "DEVELOPER_DEFINED_PAYLOAD"
    }
  }
}    ';
$jsonDecode = json_decode($json,true);
$user=$jsonDecode["sender"];
print_r($user["id"]);
$message = $jsonDecode["message"];
print_r("<br>".$message["text"]);
//var_dump($jsonDecode);
//print_r($jsonDecode);
?>