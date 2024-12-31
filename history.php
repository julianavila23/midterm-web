<?php
session_start();
include 'data/db.php';

$history = isset($_SESSION['history']) ? $_SESSION['history'] : [];

$books = [];
if (!empty($history)) {
    $ids = implode(',', $history);
    $sql = "SELECT * FROM books WHERE id IN ($ids)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History - E-Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('GIGN.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            background: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 0 10px;
        }
        .navbar-left {
            display: flex;
            align-items: center;
        }
        .navbar-center {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navbar-right {
            display: flex;
            align-items: center;
        }
        .navbar a {
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
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
        <h2>Previously Viewed Books</h2>
        <?php
        if (!empty($books)) {
            foreach ($books as $book) {
                echo "<div class='book-details'>";
                echo "<h2>" . $book['title'] . "</h2>";
                echo "<p><strong>Author:</strong> " . $book['author'] . "</p>";
                echo "<p><strong>Genre:</strong> " . $book['genre'] . "</p>";
                echo "<p><strong>Published Date:</strong> " . $book['published_date'] . "</p>";
                echo "<p>" . $book['paragraph'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No history found</p>";
        }
        ?>
        <a href="main.php" class="return-btn">Return to Main Page</a>
    </div>
</body>
</html>