<?php

require_once("user.class.php");

$user = new User("Selahattin", "Duman");
echo $user ,"\n";

$store_somewhere = serialize($user);

echo $store_somewhere;