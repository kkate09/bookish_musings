<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookish Musings - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #F4EFEA;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #8C735B;
        }

        nav a, nav i {
            margin: 0 10px;
            color: white;
            text-decoration: none;
        }

        .container {
            display: flex;
            padding: 20px;
        }

        .main-content {
            flex: 3;
            padding: 20px;
        }

        .sidebar {
            flex: 1;
            padding: 20px;
            background-color: #EDE7E3;
            border-radius: 8px;
        }

        .section {
            margin-bottom: 20px;
        }

        .btn {
            padding: 5px 15px;
            background-color: #8C735B;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .book-list {
            list-style-type: none;
            padding: 0;
        }

        .book-list li {
            border: 1px solid #8C735B;
            padding: 10px;
            margin: 5px 0;
        }

        .book-details {
            border: 1px solid #8C735B;
            padding: 15px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <div><i class="fas fa-book"></i> Bookish Musings</div>
    <div>
        <a href="home.php"><i class="fas fa-home"></i> Home</a>
        <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
    </div>
</nav>

<!-- Content -->
<div class="container">
    <!-- Main Content -->
    <div class="main-content">
        <!-- Add New Book Section -->
        <div class="section">
            <h2>Add New Book</h2>
            <form action="books/add_book.php" method="post">
                <!-- Fields for adding a book -->
                <!-- ... -->
                <button class="btn" type="submit">Add Book</button>
            </form>
        </div>

        <!-- Search Book Section -->
        <div class="section">
            <h2>Search Book</h2>
            <form action="functions/search_book.php" method="post">
                <input type="text" name="search_query" placeholder="Search by title or author..." style="width: 70%; padding: 10px; margin-right: 10px;">
                <button class="btn" type="submit">Search</button>
            </form>
        </div>

        <!-- Book Details Section -->
        <div class="section">
            <h2>Book Details</h2>
            <div class="book-details">
                <!-- Display details of the selected book here -->
                <!-- ... -->
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- List Books Section -->
        <div class="section">
            <h2>List of Books</h2>
            <ul class="book-list">
                <!-- This should be populated dynamically with the books in the database -->
                <li><a href="#">Example Book 1</a></li>
                <li><a href="#">Example Book 2</a></li>
                <!-- ... -->
            </ul>
        </div>
    </div>
</div>

<!-- Optional: Footer -->

</body>
</html>
