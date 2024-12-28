<?php

require_once("user.class.php");

$deserialize_str = 'O:4:"User":2:{s:9:"firstname";s:10:"Selahattin";s:8:"lastname";s:5:"Duman";}';

$user = unserialize($deserialize_str);
echo $user;