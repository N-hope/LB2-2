<?php

require "vendor/autoload.php";

$client = new MongoDB\Client();

$usersCollection = $client->network_traffic->users;

if (isset($_POST['showUsers'])) {
    $query = ['accountBalance' => ['$lt' => 0]];
    $users = $usersCollection->find($query);
    $result = iterator_to_array($users);

    echo "<h3>Пользователи с отрицательным балансом:</h3>";
    foreach ($result as $user) {
        echo "<p>".$user->login."</p>";
    }
}

echo "
<script>
    let allRows = [];   
    if (localStorage.getItem('users'))
        allRows = JSON.parse(localStorage.getItem('users'));
    allRows.push(" . json_encode($result) . ");
    localStorage.setItem('users', JSON.stringify(allRows));
";
echo "</script>";
?>








