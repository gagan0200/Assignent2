<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Message sent")</script>';
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
    <title>FitLife - Contact</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="contact.css"/>
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
          <li><a href="info.php">Login</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section class="container">
        <h2>Contact Us</h2>
        <form method="post" action="contact.php">
          <label for="name">Name:</label>
          <input class="fields" type="text" id="name" name="name" required />

          <label for="email">Email:</label>
          <input class="fields" type="email" id="email" name="email" required />
            <br/>
          <label class="msg-lbl" for="message">Message:</label>
          <textarea class="message" id="message" name="message" required></textarea>

          <button class="btn" type="submit">Send Message</button>
        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2024 FitLife. All rights reserved.</p>
    </footer>
  </body>
</html>
