<?php

echo '<table border = "1">';
echo '<tr><th>File</th><th>Size in bytes</th><th>Name</th><th>Extension</th><th>Delete</th></tr>';

$files = scandir('uploads');
for ($i = 2; $i < count($files); $i++) {                         //start from 2 -> 0 = . , 1 = ..
    $ext = end(explode(".",$files[$i]));        // find extension of file
    $name = basename($files[$i], $ext);                         // find name without extension
    $name = rtrim($name,".");                           // delete dot from name

    $size = filesize('uploads/'.$files[$i]);            //get size of file in bytes
    $del = 'uploads/'.$files[$i];                               //path for button

    $deleteButton = '<form action = "deletefile.php" method = "post"><input type="hidden" name = "file" value = "'.$del.'" ><button class = "close"  type = "submit" name = "submit">x</form>';

    echo "<tr><td><br><a download='$files[$i]' href='uploads/$files[$i]\'>$files[$i]</a><br></td><td>$size</td><td>$name</td><td>.".$ext."</td><td>$deleteButton</td></tr>";

}
echo "</table>"
?>


