<form method="POST" action="1.php">
    <label for="user">Выберите пользователя:</label>
    <select name="user" id="user">
        <option value="">Выберите пользователя</option>
        <?php
        
        require "vendor/autoload.php";
        $client = new MongoDB\Client();        
        $usersCollection = $client->network_traffic->users;        
        $users = $usersCollection->find();
        foreach ($users as $user) {
            echo "<option value='".$user->login."'>".$user->login."</option>";
        }

        ?>
    </select>
    <button type="submit">Показать сообщения</button>
</form>







<form method="POST" action="2.php">
    <label for="user">Выберите пользователя:</label>
    <select name="user" id="user">
        <option value="" selected disabled>Выберите пользователя</option>
        <?php
        
        require "vendor/autoload.php";
        $client = new MongoDB\Client();        
        $usersCollection = $client->network_traffic->users;        
        $users = $usersCollection->find();
        foreach ($users as $user) {
            echo "<option value='".$user->login."'>".$user->login."</option>";
        }

        ?>
    </select>
    <button type="submit">Показать информацию</button>
</form>



<form method="POST" action="3.php">
    <button type="submit" name="showUsers">Показать пользователей с отрицательным балансом</button>
</form>

<form method="POST" action="localstorage.php">
    <button type="submit" name="local">local storage</button>
</form>