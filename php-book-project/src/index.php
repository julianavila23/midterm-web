<?php
include 'data/db.php';

$sql = "SELECT * FROM books ORDER BY published_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: tan;
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
        .container {
            padding: 20px;
        }
        .post {
            background: #fff;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .post h2 {
            margin: 0 0 10px;
        }
        .post p {
            margin: 5px 0;
        }
        .post button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>E-Library</h1>
    </header>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<article class='post'>";
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>Author: " . $row['author'] . "</p>";
                echo "<p>Genre: " . $row['genre'] . "</p>";
                echo "<p>Published Date: " . $row['published_date'] . "</p>";
                echo "<p>Details: " . nl2br($row['paragraphs']) . "</p>";
                echo "<button onclick=\"window.location.href='read_book.php?id=" . $row['id'] . "'\">Read</button>";
                echo "<button onclick=\"window.location.href='update_book.php?id=" . $row['id'] . "'\">Update</button>";
                echo "<button onclick=\"window.location.href='remove_book.php?delete_id=" . $row['id'] . "'\">Delete</button>";
                echo "</article>";
            }
        } else {
            echo "<p>No books found</p>";
        }
        ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>