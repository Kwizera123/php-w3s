<!DOCTYPE html>
<html>
<head>
    <title>Upload Multiple Images</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        img { max-width: 200px; margin: 10px; }
    </style>
</head>
<body>

<h2>Upload Images</h2>
<form action="" method="post" enctype="multipart/form-data">
    Select images: <br><br>
    <input type="file" name="images[]" multiple accept="image/*" required>
    <br><br>
    <input type="submit" name="submit" value="Upload">
</form>

<hr>

<h2>Uploaded Images</h2>
<div>
<?php
$target_dir = "uploads/";

// Handle file upload
if(isset($_POST['submit'])) {
    foreach($_FILES['images']['tmp_name'] as $key => $tmp_name){
        $file_name = basename($_FILES['images']['name'][$key]);
        $target_file = $target_dir . $file_name;
        $uploadOk = 1;

        // Check if file is an image
        $check = getimagesize($_FILES["images"]["tmp_name"][$key]);
        if($check === false){
            echo "$file_name is not an image.<br>";
            $uploadOk = 0;
        }

        // Check if file already exists
        if(file_exists($target_file)){
            echo "$file_name already exists.<br>";
            $uploadOk = 0;
        }

        // Allow only certain file types
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if(!in_array($imageFileType, $allowed_types)){
            echo "$file_name format not allowed.<br>";
            $uploadOk = 0;
        }

        // Move file if all checks pass
        if($uploadOk){
            if(move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)){
                echo "$file_name uploaded successfully.<br>";
            } else {
                echo "Error uploading $file_name.<br>";
            }
        }
    }
}

// Display uploaded images dynamically
$images = glob($target_dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
foreach($images as $img){
    echo "<img src='$img'>";
}
?>
</div>

</body>
</html>