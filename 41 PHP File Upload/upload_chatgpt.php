<?php
if(isset($_POST['submit'])) {

    $target_dir = "uploads/"; // folder to store images
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;

    // Check if file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    // Check file size (max 2MB)
    if ($_FILES["image"]["size"] > 2 * 1024 * 1024) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if(!in_array($imageFileType, $allowed_types)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by error
    if ($uploadOk == 0) {
        echo "Your file was not uploaded.<br>";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["image"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}
?>