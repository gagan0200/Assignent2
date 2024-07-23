<?php
include 'config.php';

$sql = "SELECT id, name, email, password FROM registeri";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Management</title>
    <!-- <link rel="stylesheet" type="text/css" href="crud.css"> -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="info.css">
</head>
<body>
<header>
      <h1>FitLife</h1>
      <nav class="nav">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a class="nav" href="workout.php">Workout Plans</a></li>
          <li><a class="nav" href="contact.php">Contact</a></li>
          <li><a class="nav" href="register.php">Register</a></li>
          <li><a class="nav" href="aboutme.php">About Me</a></li>
          <li><a class="nav" href="info.php">User Info</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </header>
<h2>User Information</h2>
<div class="blank"></div>
<a href="create.php">Create User</a>

<table border="1" class="rwd-table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    <td>
                        <a href='read.php?id={$row['id']}'>View</a> | 
                        <a href='update.php?id={$row['id']}'>Edit</a> | 
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    ?>
</table>
</body>
</html>
