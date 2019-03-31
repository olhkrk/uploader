<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] === "POST"){
    // if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif",
            "png" => "image/png", "pdf" => "application/pdf", "doc" => "application/msword",
            "docx" => "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
            "txt" => "text/plain");                                            // array of allowed ext
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // if the ext is allowed
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) {
            echo("Error: Please select a valid file format.");
            echo "</br><p><a href='index.php'>Try one more time</a></p>";
        }

        // if the size < 5mb
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) {
            echo("Error: File size is larger than the allowed limit.");
            echo "</br><p><a href='index.php'>Try one more time</a></p>";
        }

        // if the type is allowed
        if(in_array($filetype, $allowed)){                                        //if filettype is in allowed ext array
            // Check whether file exists before uploading it
            if(file_exists("uploads/" . $filename)){
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $filename);
                header('Location: index.php');
            }
        } else {
            echo "Error: There was a problem uploading your file. Please try again.";
            echo "</br><p><a href='index.php'>Try one more time</a></p>";
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
        echo "</br><p><a href='index.php'>Try one more time</a></p>";
    }
}
?>