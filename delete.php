<?php
include 'config.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM registeri WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: info.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Employee</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<header>
      <h1>FitLife</h1>
      <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="workout.php">Workout Plans</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="aboutme.php">About Me</a></li>
          <li><a href="info.php">User Info</a></li>
        </ul>
      </nav>
    </header>
<h2>Delete Employee</h2>
<p>Are you sure you want to delete this employee?</p>
<form method="post" action="delete.php?id=<?php echo $id; ?>">
    <input type="submit" value="Yes">
    <a href="info.php">No</a>
</form>
</body>
</html>
