<?php
session_start();
if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
    $_SESSION['admin'] = true;
    header('Location: ../index.html');
} else {
    echo 'Invalid login';
}
?>
