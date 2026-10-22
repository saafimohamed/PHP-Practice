<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">

    <label>Select your certificate</label><br>
    <input type="file" name="scertificate" required>
    <br><br>

    <input type="submit" name="submit" value="Upload File">

</form>

<?php

if (isset($_POST['submit']) && isset($_FILES['scertificate'])) {

    if ($_FILES['scertificate']['error'] === UPLOAD_ERR_OK) {

        echo "File name: " . $_FILES['scertificate']['name'] . "<br>";
        echo "File size: " . $_FILES['scertificate']['size'] . "<br>";
        echo "Temporary name: " . $_FILES['scertificate']['tmp_name'] . "<br>";
        echo "File type: " . $_FILES['scertificate']['type'] . "<br>";

    } else {
        echo "File upload failed. Please try again.";
    }

}

# check upload file



if (!empty($_FILES['scertificate']['name'])) {
    echo "File name: " . $_FILES['scertificate']['name'];
} else {
    echo "Please select a file.";
}

# temprory folder






$destination = "Docs/" . $_FILES['scertificate']['name'];

if (move_uploaded_file(
    $_FILES['scertificate']['tmp_name'],
    $destination
)) {
    echo "Certificate has been uploaded successfully.";
} else {
    echo "File upload failed.";
}






?>






$_FILES['scertificate']['name'];
$_FILES['scertificate']['size'];
$_FILES['scertificate']['tmp_name'];
$_FILES['scertificate']['type'];
</body>
</html>