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
<style>
.news-section{
  margin: 20px;
  padding: 20px;
 /* background-color: red; */
  display: flex;
  justify-content: space-around;
}
.news-section div{

  background-color: purple;
  padding: 10px;
}

</style>
  <title>News Portal</title>
  <link rel="stylesheet" href="./css/homePage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <h1 style="text-align: center;">News Portal</h1>
  <nav>

    <ul class="nav-links">
      <li><a href="http://localhost/newsportal/NewsPortal/homePage.php#">Home</a></li>
      <li><a href="http://localhost/newsportal/NewsPortal/preference.php">Preference</a></li>
      <li> <a class="btn btn-primary" href="http://localhost/newsportal/NewsPortal/loginPage.php" role="button">Admin login</a></li>

    </ul>
  </nav>

  <!--  <h3 style="text-align: center;">News Portal</h3> -->

  <div class="news-section">

  <div>
    Title:<span>1.
      hejdsflj
    </span>
    <br>
    description:<span>
      hejdsflj
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam optio consequatur in impedit excepturi perspiciatis fugiat recusandae. Perspiciatis, exercitationem inventore ex suscipit animi facilis aliquam quae, delectus amet sapiente obcaecati.
    </span>
    <br>
    photo<span>
      hejdsflj
    </span>
    <br>
    Comment<span>
      hejdsflj
    </span>
  
  </div>
  <div>
    Title:<span>1.
      hejdsflj
    </span>
    <br>
    description:<span>
      hejdsflj
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur hic officia voluptatum harum illo, fuga cupiditate. Non hic sapiente aliquid et necessitatibus tempore perferendis reiciendis dicta, veniam libero quidem delectus.
    </span>
    <br>
    photo<span>
      hejdsflj
    </span>
    <br>
    Comment<span>
      hejdsflj
    </span>
  
  </div>
  </div>

<script>
  const toggleButton = document.querySelector('.toggle-comment-form');
  const commentForm = document.querySelector('.comment-form');

  toggleButton.addEventListener('click', () => {
    commentForm.style.display = commentForm.style.display === 'none' ? 'block' : 'none';
  });
</script>






  
</body>
</html>
