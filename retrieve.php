<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sampledb");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Fetch all records from the users table
$sql = "SELECT * FROM activity_wd50p";
$result = mysqli_query($conn, $sql);

// Display the records in a table
echo "<h2>Submitted values:</h2>";
echo "<table border='1'>";
echo "<tr><th>id</th><th>book_title</th><th>author</th><th>customer_name</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" .$row['id']. "</td><td>" .$row['book_title']. "</td><td>" .$row['author']. "</td><td>" .$row['customer_name']. "</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>

