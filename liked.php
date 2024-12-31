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
        .navbar-bottom {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dropdown {
            overflow: hidden;
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
            text-align: left;
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

        #title h2 {
            font-size: 2em;
            color: #333; /* Dark text for contrast */
            text-align: center; /* Center alignment */
            margin-bottom: 1em; /* Space below the heading */
            text-transform: uppercase; /* Uppercase letters */
            letter-spacing: 1px; /* Slightly spaced letters */
            text-shadow: 1px 1px 2px white; /* Soft white shadow */
        }

        .post-readbtn {
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

        .post-readbtn:hover {
            background-color: #45a049;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .post-dwnldbtn {
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

        .post-dwnldbtn:hover {
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
        <div class="logo">E-LIBRARY</div>
    </header>
    <div class="navbar">
        <div class="navbar-left">
            <div class="dropdown">
                <button class="dropbtn">Menu
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="index.php">Mainpage</a>
                    <a href="latest.php">Latest</a>
                    <a href="popular.php">Popular</a>
                    <a href="genre.php">Genre</a>
                    <a href="history.php">History</a>
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
            <button class="header-btn"> <a href="login.php"> Log in </a> </button>
        </div>
    </div>

    <div class="navbar-bottom" id="title">
        <h2>Liked Books</h2>
    </div>

    <div class="container">
        <article class="post">
            <h2>Title 1</h2>
            <img src="BOOK 1.jpg" alt="IT.jpg">
            <p>Description of the new book.</p>
            <button class="post-readbtn">Read More</button>
            <button class="post-dwnldbtn">Download</button>
        </article>
        <article class="post">
            <h2>Title 2</h2>
            <img src="BOOK 2.jpg" alt="IT.jpg">
            <p>Description of another new book.</p>
            <button class="post-readbtn">Read More</button>
            <button class="post-dwnldbtn">Download</button>
        </article>
        <article class="post">
            <h2>Title 3</h2>
            <img src="BOOK 3.jpg" alt="IT.jpg">
            <p>Description of another new book.</p>
            <button class="post-readbtn">Read More</button>
            <button class="post-dwnldbtn">Download</button>
        </article>
        <article class="post">
            <h2>Title 4</h2>
            <img src="BOOK 4.jpg" alt="IT.jpg">
            <p>Description of another new book.</p>
            <button class="post-readbtn">Read More</button>
            <button class="post-dwnldbtn">Download</button>
        </article>
    </div>

    <footer>
        <p>&copy; 2024 E-Library. All rights reserved.</p>
    </footer>
</body>
</html>