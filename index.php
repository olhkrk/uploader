<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>
<form id = "upload" action="test.php" method="post" enctype="multipart/form-data">
    <h2>Upload File</h2>
    <label for="fileSelect">Filename:</label>
    <input type="file" name="photo" id="fileSelect">
    <input class="uploadBtn" type="submit" name="submit" value="Upload">
    <link rel="stylesheet" href="style.css" type="text/css">
    <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png, .pdf, .doc, .docx, .txt formats allowed to a max size of 5 MB.</p>
</form>

</body>

</html>
<?php include 'table.php';?>




