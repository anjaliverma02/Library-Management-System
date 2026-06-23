<?php

include "db.php";


$result=
mysqli_query(
$conn,
"SELECT * FROM books"
);


echo "<h1>Books Available</h1>";



while($row=mysqli_fetch_assoc($result))
{


echo "Book : ".$row['book_name'];

echo "<br>";

echo "Author : ".$row['author'];

echo "<br>";

echo "Quantity : ".$row['quantity'];

echo "<hr>";


}

?>
