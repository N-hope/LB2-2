<?php

require "vendor/autoload.php";

$client = new MongoDB\Client();

$usersCollection = $client->network_traffic->users;


if (isset($_POST['user'])) {
    $selectedUser = $_POST['user'];
    
    $userMessages = $usersCollection->findOne(['login' => $selectedUser]);
    
    echo "<p>".$userMessages->message."</p>";
}
?>