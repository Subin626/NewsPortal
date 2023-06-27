<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <style>
    /* Reset some default styles */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    
    /* Sidebar styles */
    .sidebar {
      width: 250px;
      background-color: #333;
      color: #fff;
      padding: 20px;
      position: fixed;
      height: 100%;
    }
    
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    
    .sidebar li {
      margin-bottom: 10px;
    }
    
    .sidebar a {
      display: block;
      color: #fff;
      text-decoration: none;
      padding: 10px;
      border-radius: 4px;
    }
/*     
    .sidebar a:hover {
      background-color: #555;
    }
     */
    .sidebar .active {
      background-color: #555;
    }
    
    /* Main content styles */
    .content {
      margin-left: 250px;
      padding: 20px;
    }
    
    /* Header styles */
    .header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }
    
    /* Footer styles */
    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    /* Responsive styles */
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        position: static;
        height: auto;
      }
    
      .content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <ul>
      <li><a href="#" class="active">Dashboard</a></li>
      <li><a href="./category.php">Category</a></li>
      <li><a href="#">Sub-Category</a></li>
      <li><a href="#">User</a></li>
      <li><a href="#">Posts</a></li>
      <li><a href="#">Comments</a></li>
    </ul>
  </div>

  <div class="content">
    <div class="header">
      <h2>Admin Dashboard</h2>
    </div>
    
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is the main content area where you can display various information and features.</p>
  </div>
</body>
</html>
