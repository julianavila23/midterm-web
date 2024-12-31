<?php
include 'data/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_date = $_POST['published_date'];
    $paragraph = $_POST['paragraph'];

    $sql = "INSERT INTO books (title, author, genre, published_date, paragraph) VALUES ('$title', '$author', '$genre', '$published_date','$paragraph')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully";
        header("Location: addbook.php"); // Redirect back to addbook.php
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>