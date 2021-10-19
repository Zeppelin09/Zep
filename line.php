 <?php
  

function send_LINE($msg){
 $access_token = 'hFthDsfSP72jG+xHl1SykcPaCTlgPaG2jSZUoPGjAckDm/P4XLdfRkthSmOrf2u/uTZJ9ZNZ9mW9alHVc290xGLrW6dn9w8aBoYSw8pT88VGYReZOnRo7MGeG16jgJ3WlKbRULOvIhMYfP2iKvBNTQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U8ccac79a5a4db4cb9f8eadea521e518f',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
