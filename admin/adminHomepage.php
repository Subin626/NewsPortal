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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
</head>

<body>
    <div class="sidebar ">
        <ul>
            <li><a href="#" class="active">Dashboard</a></li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle text-dark" type="button" data-toggle="dropdown">Category
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add</a></li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Sub-Category
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add</a></li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">User
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add</a></li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Posts
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add</a></li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </div>
            </li>
            <li><div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">Comments
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Read</a></li>
                        <li><a href="#">Edit</a></li>
                    </ul>
                </div></li>
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