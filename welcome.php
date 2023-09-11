/*<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <h2>Form Submission Result</h2>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first-name = $_POST["first-name"];
		$last-name = $_POST["last-name"];
		$date-of-birth = $_POST["date-of-birth"];
		$date-of-joining = $_POST["date-of-joining"];
		$employee-id = $_POST["employee-id"];
		$designation = $_POST["designation"];
		$gender = $_POST["gender"];
		echo "<p>First Name:" . htmlspecialchars($first-name) . "</p>";
		echo "<p>Last Name:" . htmlspecialchars($last-name) . "</p>";
		echo "<p>Date of Birth:" . htmlspecialchars($date-of-birth) . "</p>";
		echo "<p>Date of Joining:" . htmlspecialchars($date-of-joining) . "</p>";
		echo "<p>Employee ID:" . htmlspecialchars($employee-id) . "</p>";
		echo "<p>Designation:" . htmlspecialchars($Designation:) . "</p>";
		echo "<p>Gender:" . htmlspecialchars($gender) . "</p>";
	}
	else {
        echo "<p>No form data submitted.</p>";
    }
</body>
</html>
*/
