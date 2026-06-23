<?php

include "db.php";


$book=$_POST['book_name'];

$author=$_POST['author'];

$qty=$_POST['quantity'];



$sql=
"INSERT INTO books
(book_name,author,quantity)

VALUES

('$book','$author','$qty')";


mysqli_query($conn,$sql);


echo "Book Added Successfully";

?>
