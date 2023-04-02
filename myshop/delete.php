<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "myshop";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header("location: http://localhost/projektas/myshop/index.php");
exit;
?>