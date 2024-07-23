<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Login Successfull")</script>';
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitLife - Login</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="login.css" />
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
    <main>
      <section>
        <h2>Login</h2>
        <form method="post" action="login.php">
          <label for="email">Email:</label>
          <input class="fields" type="email" id="email" name="email" required />

          <label for="password">Password:</label>
          <input class="fields" type="password" id="password" name="password" required />
          <br/>
          <button class="btn" type="submit">Login</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2024 FitLife. All rights reserved.</p>
    </footer>
  </body>
</html>
