<?php
session_start();
include 'data/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM books WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
        // Store the book ID in the session
        if (!isset($_SESSION['history'])) {
            $_SESSION['history'] = [];
        }
        if (!in_array($id, $_SESSION['history'])) {
            $_SESSION['history'][] = $id;
        }
    } else {
        echo "Book not found";
        exit();
    }
} else {
    echo "No book ID provided";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Book - E-Library</title>
    <style>
        body {
            background-image: url('GIGN.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: tan;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .book-details {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .book-details h2 {
            margin-bottom: 16px;
        }
        .book-details p {
            margin-bottom: 8px;
        }
        .return-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .return-btn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">E-LIBRARY</div>
    </header>
    <div class="container">
        <div class="book-details">
            <h2><?php echo $book['title']; ?></h2>
            <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
            <p><strong>Genre:</strong> <?php echo $book['genre']; ?></p>
            <p><strong>Published Date:</strong> <?php echo $book['published_date']; ?></p>
            <p><?php echo $book['paragraph']; ?></p>
            <a href="main.php" class="return-btn">Return to Main Page</a>
        </div>
    </div>
</body>
</html>