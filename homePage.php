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
 .news-section {
    display: flex;
    gap: 20px;
  }

  .news-item {
    border: 1px solid #ccc;
    padding: 20px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    flex: 1;
  }

  .comment-form {
    display: none;
    margin-top: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
  }

  .comment-form label {
    display: block;
    font-weight: bold;
  }

  .comment-form textarea {
    width: 100%;
    padding: 5px;
    margin-top: 5px;
  }

  .comment-form button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
  }
</style>
  <title>News Portal</title>
  <link rel="stylesheet" href="./css/homePage.css">
</head>
<body>
  <h1 style="text-align: center;">News Portal</h1>
  <nav>

    <ul class="nav-links">
      <li><a href="#home">Home</a></li>
      <li class="dropdown">
        <a href="#categories">Categories &#9662;</a>
        <ul class="dropdown-content">
          <li><a href="#category1">Category 1</a></li>
          <li><a href="#category2">Category 2</a></li>
          <li><a href="#category3">Category 3</a></li>
          <!-- Add more categories as needed -->
        </ul>
      </li>
      <li><a href="#preference">Preference</a></li>
    </ul>
  </nav>

  <!--  <h3 style="text-align: center;">News Portal</h3> -->

  <div class="news-section">

  
  <div class="news-item">
    <h2>Title 2</h2>
    <p>Description 2</p>
    <img src="http://localhost/newsportal/NewsPortal/test.webp" style="width: 50%;" alt="Image 2">
    <button class="toggle-comment-form">Leave a Comment</button>
    <form class="comment-form">
      <label for="user-comment">Leave your comment:</label>
      <textarea id="user-comment" name="user-comment" rows="4" placeholder="Enter your comment"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div><div class="news-item">
    <h2>Title 2</h2>
    <p>Description 2</p>
    <img src="http://localhost/newsportal/NewsPortal/test.webp" style="width: 50%;" alt="Image 2">
    <button class="toggle-comment-form">Leave a Comment</button>
    <form class="comment-form">
      <label for="user-comment">Leave your comment:</label>
      <textarea id="user-comment" name="user-comment" rows="4" placeholder="Enter your comment"></textarea>
      <button type="submit">Submit</button>
    </form>
  </div><div class="news-item">
    <h2>Title 2</h2>
    <p>Description 2</p>
    <img src="http://localhost/newsportal/NewsPortal/test.webp" style="width: 50%;" alt="Image 2">
    <button class="toggle-comment-form">Leave a Comment</button>
    <form class="comment-form">
      <label for="user-comment">Leave your comment:</label>
      <textarea id="user-comment" name="user-comment" rows="4" placeholder="Enter your comment"></textarea>
      <button type="submit">Submit</button>
    </form>
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
