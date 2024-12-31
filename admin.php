<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - E-Library</title>
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

        /* Dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            cursor: pointer;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Search bar styling */
        .search-bar {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .search-bar input[type="text"] {
            padding: 0.5em;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            width: 250px;
        }
        .search-bar button {
            padding: 0.5em 1em;
            background-color: #f1f1f1;
            border: none;
            cursor: pointer;
            font-size: 1em;
            border-radius: 4px;
            margin-left: 10px;
        }

        .header-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 3px 8px;
            margin-left: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .header-btn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .search-bar button:hover {
            background-color: #ddd;
        }

        article {
            margin-bottom: 2em;
        }
        article img {
            width: 95%;
            height: auto;
        }

        .post {
            background-color: white;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            color: black;
        }
        .post:hover {
            box-shadow: 0 4px 12px #333;
        }
        .post h2 {
            color: black;
            text-shadow: 1px 1px 2px black;
        }
        .post p {
            color: black;
        }

        .post-readbtn, .post-dwnldbtn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .post-readbtn:hover, .post-dwnldbtn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        @media (min-width: 768px) {
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }
            article {
                flex: 1 1 calc(50% - 1em);
                margin-bottom: 2em;
            }
        }
        @media (min-width: 1024px) {
            article {
                flex: 1 1 calc(33.333% - 1em);
            }
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">E-LIBRARY - Admin Panel</div>
    </header>
    <div class="navbar">
        <div class="navbar-left">
            <div class="dropdown">
                <button class="dropbtn">Menu
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="latest.php">Latest</a>
                    <a href="popular.php">Popular</a>
                    <a href="genre.php">Genre</a>
                    <a href="history.php">History</a>
                    <a href="liked.php">Liked Books</a>
                </div>
            </div>
        </div>
        <div class="navbar-center">
            <div class="search-bar">
                <form action="#" method="GET">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit">Search</button>
                    <button type="submit">Clear</button>
                </form>
            </div>
        </div>
        <div class="navbar-right">
            <div class="dropdown">
                <button class="dropbtn">Settings
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="addbook.php">Add Book</a>
                </div>
            </div>
            <button class="header-btn"><a href="main.php">Log out</a></button>
        </div>
    </div>
    <div class="container">
        <h2>Manage Books</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Published Date</th>
                <th>Actions</th>
            </tr>
            <?php
            include 'data/db.php';
            $sql = "SELECT * FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['author'] . "</td>";
                    echo "<td>" . $row['genre'] . "</td>";
                    echo "<td>" . $row['published_date'] . "</td>";
                    echo "<td><a href='update_book.php?id=" . $row['id'] . "' class='update-btn'>Update</a> | <a href='remove_book.php?delete_id=" . $row['id'] . "' class='delete-btn'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No books found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </div>
</body>
</html>