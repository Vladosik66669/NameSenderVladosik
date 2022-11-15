<?php
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', 'root', 'username');
    $mysql->query("INSERT INTO `name` (`name`) VALUES('$name')");
    $mysql->close();
?>