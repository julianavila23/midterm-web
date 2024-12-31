<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book - E-Library</title>
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
            padding: 1em;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .submit-btn:hover {
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
        <h2>Add Book</h2>
        <form method="POST" action="add_book.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>

            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre">

            <label for="published_date">Published Date:</label>
            <input type="date" id="published_date" name="published_date">

            <label for="paragraph">Paragraph:</label>
            <textarea id="paragraph" name="paragraph" rows="4"></textarea>

            <button type="submit" class="submit-btn">Add Book</button>
            <a href="main.php" class="return-btn">Return to Main Page</a>
        </form>
    </div>
</body>
</html>