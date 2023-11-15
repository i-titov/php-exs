<?php 
require_once('connection.php');
$query = "SELECT * FROM books";
$db = $db->prepare($query);
$db->execute();
$books = $db->fetchAll();
function getBooks(array $books){
    foreach($books as $book){
      echo "<tr><td>" . htmlspecialchars($book['id']) . "</td>";
      echo "<td>" . htmlspecialchars($book['name']) . "</td></tr>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
  <thead>
    <tr>
      <th colspan="2">Books</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php  getBooks($books)?>
    </tr>
  </tbody>
</table>
</body>
</html>