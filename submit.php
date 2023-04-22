<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sampledb");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Check if form data has been submitted
if(isset($_POST['book_title'])){
    $book_title = $_POST['book_title'];    
} else {
    $book_title = "";
}

if(isset($_POST['author'])){
    $author = $_POST['author'];
} else {
    $author = "";
}

if(isset($_POST['customer_name'])){
    $customer_name = $_POST['customer_name'];
} else {
    $customer_name = "";
}

// Set the ID value
$id = ""; // replace "" with the actual ID value

// Insert the values into the database
$sql = "INSERT INTO activity_wd50p (id, book_title, author, customer_name) VALUES ('$id', '$book_title', '$author', '$customer_name')";

if (mysqli_query($conn, $sql)) {
	echo "Record added successfully.";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
