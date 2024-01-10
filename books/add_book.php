<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book - Bookish Musings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #F4EFEA;
            padding: 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #8C735B;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 40px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .img-preview {
            display: block;
            max-width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        button {
            padding: 10px 15px;
            background-color: #8C735B;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <script>
        // Function to show image preview
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('imgPreview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <div><i class="fas fa-book"></i> Bookish Musings</div>
    <div>
        <a href="../home.php"><i class="fas fa-home"></i> Home</a>
        <a href="../profile.php"><i class="fas fa-user"></i> Profile</a>
    </div>
</nav>

<div class="container">
    <h2>Add New Book</h2>
    <form action="add_book_functionality.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <label for="pubYear">Publication Year:</label>
        <input type="number" id="pubYear" name="publication_year" min="1000" max="2099" required>

        <label for="review">My Review</label>
        <input type="text" id="review" name="review" min="1000" max="2099" required>

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required>

        <label for="coverImage">Cover Image:</label>
        <input type="file" id="coverImage" name="cover_image" accept="image/*" onchange="previewImage(event)" required>

        <!-- Image preview section -->
        <img id="imgPreview" class="img-preview" alt="Image Preview">

        <button type="submit">Add Book</button>
    </form>
</div>

</body>
</html>
