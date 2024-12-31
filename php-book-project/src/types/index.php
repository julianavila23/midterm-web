<?php
// This file defines custom types or interfaces related to the book data structure.

interface Book {
    public function getTitle(): string;
    public function getAuthor(): string;
    public function getGenre(): string;
    public function getPublishedDate(): string;
    public function getParagraphs(): array;
}

class BookDetails implements Book {
    private $title;
    private $author;
    private $genre;
    private $publishedDate;
    private $paragraphs;

    public function __construct($title, $author, $genre, $publishedDate, $paragraphs) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->publishedDate = $publishedDate;
        $this->paragraphs = $paragraphs;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getPublishedDate(): string {
        return $this->publishedDate;
    }

    public function getParagraphs(): array {
        return $this->paragraphs;
    }
}
?>