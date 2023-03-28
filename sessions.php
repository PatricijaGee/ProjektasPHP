<?php

/*
sessions are a way to store information (in var) to be used across multiple pages.
unlike cookies, sessions are stored on the server.
*/
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /projektas/extras/index.php');
    } else {
        echo 'Incorrect Login';
    }
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john & age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Userame: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="submit" name="submit">
</form>