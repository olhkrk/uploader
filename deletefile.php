<?php

$path = $_POST['file'];

if (!unlink($path)){                           //delete file from folder
    echo "You have an error </br>";
} else {
    header('Location: index.php');
}
?>