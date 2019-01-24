<?php

$dbuser = 'root';
$dbpass = '';
$dbname = 'mysql_kurs';
// Hier käme der Link zum Host
$dbhost = 'localhost';

$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
//var_dump($pdo);

$query = $pdo->prepare("SELECT * FROM books");
//var_dump($query);
$query->execute();
echo "<ol>";
while($book = $query->fetch()){
    //var_dump($book);
    echo "<li>".$book['title'] . "</li><br>";
}
echo "</ol>";
?>
<footer>
    <p><a href="insert.php">Neues Buch</a> <a href="mysqlconnect.php">Buchliste</a></p>
</footer>