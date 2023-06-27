<?php
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Add your authentication logic here
  // For demonstration purposes, we'll use a simple check

  // Replace 'username' and 'password' with your actual credentials
  $validUsername = 'username';
  $validPassword = 'password';

  if ($username === $validUsername && $password === $validPassword) {
    // Successful login
    echo "Login successful! Welcome, $username!";
  } else {
    // Invalid credentials
    echo "Invalid username or password!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>News Portal</title>
  <link rel="stylesheet" type="text/css" href="./css/homePage.css">
</head>
<body>
  <header>
    <h1>News Portal </h1>
  </header>

  <nav>
    <ul>
      <li><a href="#" class="active">Home</a></li>
      <li><a href="#">Categories</a></li>
      
      <li><a href="#">Trending</a></li>
      <li><a href="#">Popular</a></li>
      <li><a href="#">Archives</a></li>
    </ul>
  </nav>

 

</body>
</html>


