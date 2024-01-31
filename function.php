<?php

$localhost = "localhost";
$username = "root";
$password = "1234";
$database = "szd";

$con = mysqli_connect($localhost, $username, $password, $database);

// Select Category
$category_sql = "SELECT * FROM `category`";
$category_query = mysqli_query($con, $category_sql);
$category = mysqli_fetch_all($category_query, MYSQLI_ASSOC);

// image upload
if(isset($_POST["submit"])){
    $totalFiles = count($_FILES['fileImg']['name']);
    $filesArray = array();

    for($i = 0; $i < $totalFiles; $i++){
        $imageName = $_FILES["fileImg"]["name"][$i];
        $tmpName = $_FILES["fileImg"]["tmp_name"][$i];

        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));

        $newImageName = uniqid() . '.' . $imageExtension;

        move_uploaded_file($tmpName, 'Architect_files/images/' . $newImageName);
        $filesArray[] = $newImageName;
    }

    $filesArray = json_encode($filesArray);
    $query = "INSERT INTO `project_image`(`Image_name`) VALUES ('$filesArray')";
    mysqli_query($con, $query);
    echo "
        <script>
            alert('Successfully Added');
            document.location.href = 'upload.php'
        </script>
    ";
}





?>