<?php
include 'data/db.php';

// Handle delete request
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    
    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        echo "Book deleted successfully";
    } else {
        echo "Error deleting book: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch all books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Book - E-Library</title>
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
        }
    </style>
</head>
<body>
    <!-- Your HTML content here -->
</body>
</html>