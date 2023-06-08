<?php

require "vendor/autoload.php";

$client = new MongoDB\Client();

$usersCollection = $client->network_traffic->users;
$sessionsCollection = $client->network_traffic->sessions;

$users = $usersCollection->find();

foreach ($users as $user) {
    echo "<option value='".$user->login."'>".$user->login."</option>";
}

if (isset($_POST['user'])) {
    $selectedUser = $_POST['user'];

    $userData = $usersCollection->findOne(['login' => $selectedUser]);

    echo "<p>Сообщение: ".$userData->message."</p>";

    $trafficData = $sessionsCollection->find(['clientIP' => $userData->staticIP]);

    $totalIncomingTraffic = 0;
    $totalOutgoingTraffic = 0;

    foreach ($trafficData as $session) {
        $totalIncomingTraffic += $session->incomingTraffic;
        $totalOutgoingTraffic += $session->outgoingTraffic;
    }

    echo "<p>Общий входящий трафик: ".$totalIncomingTraffic."</p>";
    echo "<p>Общий исходящий трафик: ".$totalOutgoingTraffic."</p>";
}

?>