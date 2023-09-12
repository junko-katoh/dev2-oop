<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br><br>
        <label for="author">Title</label>
        <input type="text" name="author" id="author">
        <br><br>
        <label for="publisher">Publisher</label>
        <input type="text" name="publisher" id="publisher">
        <br><br>
        <label for ="price">Price</label>
        <input type="text" name="price" id="price">
        <br><br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>

<?php
include "Book.php";

if(isset($_POST['btn_submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $price = $_POST['price'];

    $book = new Book($title, $author, $publisher, $price);

    // $book->setTitle($title);
    // $book->setPublisher($publisher);
    // $book->setPrice($price);

    echo $book->getTitle() . "<br>";
    echo $book->getAuthor(). "<br>";
    echo $book->getPublisher() . "<br>";
    echo $book->getPrice() . "<br>";
}

?>
