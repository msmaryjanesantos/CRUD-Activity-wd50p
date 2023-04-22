<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<!-- Include Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Form</h2>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			<div class="form-group">
				<label for="book_title">Book Title:</label>
				<input type="text" class="form-control" id="book_title" name="book_title" required>
			</div>
			<div class="form-group">
				<label for="author">Author:</label>
				<input type="text" class="form-control" id="author" name="author" required>
			</div>
			<div class="form-group">
				<label for="customer_name">Customer Name:</label>
				<input type="text" class="form-control" id="customer_name" name="customer_name" required>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php
		// Connect to database
		$conn = mysqli_connect("localhost", "root", "", "sampledb");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		// Insert form data into database
		if (isset($_POST['book_title']) && isset($_POST['author']) && isset($_POST['customer_name'])) {
			$book_title = mysqli_real_escape_string($conn, $_POST['book_title']);
			$author = mysqli_real_escape_string($conn, $_POST['author']);
			$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
			$sql = "INSERT INTO activity_wd50p (book_title, author, customer_name) VALUES ('$book_title', '$author', '$customer_name')";
			if (mysqli_query($conn, $sql)) {
				echo "<div class='alert alert-success'>Data inserted successfully</div>";
			} else {
				echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
			}
		}

		// Retrieve data from database
		$sql = "SELECT * FROM activity_wd50p";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "<h2>Data</h2>";
			echo "<table class='table'>";
			echo "<tr><th>ID</th><th>Book Title</th><th>Author</th><th>Customer Name</th></tr>";
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row['id'] . "</td><td>" . $row['book_title'] . "</td><td>" . $row['author'] . "</td><td>" . $row['customer_name'] . "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "<div class='alert alert-info'>No data found</div>";
		}

		// Close database connection
		mysqli_close($conn);
		?>
	</div>
	<!-- Include Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap
