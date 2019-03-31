<?php

$path = $_POST['file'];

if (!unlink($path)){                           //delete file from folder
    echo "You have an error </br>";
    echo "<p><a href='index.php'>Try one more time</a></p>";
} else {
    header('Location: index.php');
}
?>