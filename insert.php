<!DOCTYPE html>
<html lang="en">
<head>
    <title>activity wd50p</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "sampledb");

        if ($conn === false) {
            die("Error: could not connect to DB. " . mysqli_connect_error());
        }

        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        $book_title = isset($_REQUEST['book_title']) ? $_REQUEST['book_title'] : '';
        $author = isset($_REQUEST['author']) ? $_REQUEST['author'] : '';
        $customer_name = isset($_REQUEST['customer_name']) ? $_REQUEST['customer_name'] : '';

        $stmt = mysqli_prepare($conn, "INSERT INTO activity_wd50p (id, book_title, author, customer_name) VALUES (?, ?, ?, ?)");

        mysqli_stmt_bind_param($stmt, "ssss", $id, $book_title, $author, $customer_name);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h2>Data was successfully inserted to Information Table</h2>";
            echo nl2br("\n$id\n \n$book_title\n \n$author\n \n$customer_name");
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    ?>
</body>
</html>
