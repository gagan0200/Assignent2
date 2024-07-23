<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE registeri SET name='$name', email='$email', password='$password' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: info.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT id, name, email, password FROM registeri WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
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
<h2>Update Employee</h2>
<?php include 'navbar.php'; ?>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>" required><br>
    Password: <input type="text" name="password" value="<?php echo $row['password']; ?>" required><br>
    <input type="submit" value="Update">
</form>
<a href="info.php">Back to Home</a>
</body>
</html>
