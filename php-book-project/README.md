# php-book-project/php-book-project/README.md

# PHP Book Project

## Overview
This project is a simple PHP application that allows users to manage a collection of books. Users can add new books, view existing books, and manage their details, including title, author, genre, published date, and detailed descriptions in paragraph form.

## Project Structure
```
php-book-project
├── data
│   └── db.php
├── src
│   ├── add_book.php
│   ├── addbook.php
│   ├── index.php
│   └── types
│       └── index.php
├── package.json
├── tsconfig.json
└── README.md
```

## Files Description

- **data/db.php**: Contains the database connection settings. It establishes a connection to the MySQL database using mysqli and checks for connection errors.

- **src/add_book.php**: Handles the logic for adding a new book to the database. It processes form submissions, including the title, author, genre, published date, and paragraphs. It inserts this data into the books table in the database.

- **src/addbook.php**: Contains the HTML form for adding a new book. It includes input fields for the book's title, author, genre, published date, and a textarea for entering multiple paragraphs of book details.

- **src/index.php**: Serves as the main entry point for the application. It retrieves and displays a list of books from the database, showing their details and providing options to read, update, or delete each book.

- **src/types/index.php**: Can be used to define any custom types or interfaces related to the book data structure, such as a Book interface that includes properties for title, author, genre, published date, and paragraphs.

- **package.json**: Configuration file for npm. It lists the dependencies and scripts for the project, although it may not be necessary for a PHP project unless using Node.js for some functionality.

- **tsconfig.json**: Typically used for TypeScript projects. If this project is purely PHP, this file may not be needed. If included, it should specify the compiler options and files to include in the compilation.

## Setup Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Set up your MySQL database and update the `data/db.php` file with your database credentials.
4. Open `src/addbook.php` in your web browser to access the form for adding new books.
5. Follow the on-screen instructions to add books to your collection.

## Usage
- Use the form in `addbook.php` to add new books.
- View the list of books in `index.php`.
- Each book entry will have options to read, update, or delete the book.

## Contributing
Contributions are welcome! Please feel free to submit a pull request or open an issue for any enhancements or bug fixes.

## License
This project is open-source and available under the MIT License.