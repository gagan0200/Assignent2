<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT id, name, email, password FROM registeri WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View member</title>
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
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </header>
<h2>View Employee</h2>
<p>ID: <?php echo $row['id']; ?></p>
<p>Name: <?php echo $row['name']; ?></p>
<p>Email: <?php echo $row['email']; ?></p>
<p>Password: <?php echo $row['password']; ?></p>
<a href="info.php">Back to User info</a>
</body>
</html>
