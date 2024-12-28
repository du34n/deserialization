<?php
class User {
    var $username;
    var $access_token;
}


$payload = 'O:4:"User":2:{s:8:"username";s:6:"wiener";s:12:"access_token";s:32:"xa9dv3q2flxbfs1j3zkmmvnr8cnctrzr";}';

$user = unserialize($payload);
$user->access_token = 0;
echo serialize($user);
