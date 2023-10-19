<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $con = mysqli_connect("localhost", "root", "1234", "szd");
    $page = 1;
    $limit = 1;


    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    }

    $offset = ($page - 1) * $limit;

    $select_image = "SELECT * FROM `project_image` LIMIT $offset, $limit";
    $select_image_query = mysqli_query($con, $select_image);

    while ($img = mysqli_fetch_array($select_image_query)) {
        echo '<img src="Architect_files/images/' . $img['Image_name'] . '" height="300" width="300px">';
    }

    // Count the total number of records
    $total_records_query = "SELECT COUNT(*) as total FROM `project_image`";
    $total_records_result = mysqli_query($con, $total_records_query);
    $total_records = mysqli_fetch_assoc($total_records_result)['total'];

    // Calculate the number of pages
    $total_pages = ceil($total_records / $limit);

        // Define the maximum number of visible page buttons
        $maxVisibleButtons = 5;

    echo "<br><br>";
    ?>

    <div>
        <form method="POST">
            <?php

            $currentPage = $page;

                        // Calculate the start and end buttons based on the current page
                        $startButton = max(1, $currentPage - 2);
                        $endButton = min($total_pages, $startButton + $maxVisibleButtons - 1);

            // Previous button
            if ($currentPage > 1) {
                echo '<button type="submit" name="page" value="' . ($currentPage - 1) . '">< Previous</button>';
            }

            // Page buttons
            for ($b = $startButton; $b <= $endButton; $b++) {
                if ($b == $currentPage) {
                    echo '<button type="submit" name="page" value="' . $b . '" style="font-weight: bold;">' . $b . '</button>';
                } else {
                    echo '<button type="submit" name="page" value="' . $b . '">' . $b . '</button>';
                }
            }


            // Next button
            if ($currentPage < $total_pages) {
                echo '<button type="submit" name="page" value="' . ($currentPage + 1) . '">Next ></button>';
            }
            ?>
        </form>
    </div>
</body>

</html>