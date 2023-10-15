<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "szd";

$con = mysqli_connect($localhost, $username, $password, $database);

// Select Category
$category_sql = "SELECT * FROM `category`";
$category_query = mysqli_query($con, $category_sql);
$category = mysqli_fetch_all($category_query, MYSQLI_ASSOC);

// upload new project
if (isset($_POST['upload'])) {

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $category_ID = mysqli_real_escape_string($con, $_POST['category']);

    $categorysql = "SELECT `Category_ID` FROM `category` WHERE `Category` = '$category_ID'";
    $categoryquery = mysqli_query($con,$categorysql);
    $categoryid = mysqli_fetch_assoc($categoryquery);
    $categories = $categoryid['Category_ID']; 

    $myproject = "INSERT INTO `projects`(`Category_ID`, `Project_name`, `Project_description`) VALUES ('$categories', '$title','$description')";
    $myprojectsql = mysqli_query($con, $myproject);
    $project_id = mysqli_insert_id($con);
    if ($myprojectsql) {
        echo "Data inserted into the database successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    $uploadedImages = array();

    foreach ($_FILES['image']['error'] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $name = $_FILES['image']['name'][$key];
            $tmp_name = $_FILES['image']['tmp_name'][$key];
            $target_path = "Architect_files/images/" . $name;
            if (move_uploaded_file($tmp_name, $target_path)) {
                $uploadedImages[] = $name;
            } else {
                echo "Failed to move uploaded file: $name";
            }
        }
    }

    foreach ($uploadedImages as $image) {
        $myimage = "INSERT INTO `project_image`(`Project_ID`, `Image_name`) VALUES ('$project_id', '$image')";
        $myimagesql = mysqli_query($con, $myimage);
        if (!$myimagesql) {
            echo "Error inserting image into the database: " . mysqli_error($con);
        }
    }
}

mysqli_close($con);
?>