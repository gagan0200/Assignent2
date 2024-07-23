<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO registeri (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: info.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="create.css">
  </head>

  
  <body>
    <div class="contaner">
        <form method="post" action="register.php" class="form">
          <div class="header">
            <h1> sign up</h1>
          </div>
          <div class="form-group">
            <lable>NAME :</lable>
            <input type="text" class="form-control" name="Name" placeholder="name">
          </div>
          <div class="form-group">
            <lable>EMAIL : </lable>
            <input type="email" class="form-control" name="email" placeholder="email">
          </div>
          <div class="form-group">
            <lable>PASSWORD : </lable>
            <input type="address" class="form-control" name="password" placeholder="password"> 
          </div>
          <div class="submit">
            <button type="submit" class="btn btn-default">Register</button>
          </div>
        </form>
      </div>
    
    <script>
        $('#name').addClass('animated tada');
    </script>
  </body>
</html>
