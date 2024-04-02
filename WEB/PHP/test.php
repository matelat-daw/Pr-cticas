<?php
include "includes/conn.php";

print ("Hola" . "\n");
echo "Hola" . "\n";
$sql = "SELECT * FROM user;";
$stmt = $conn->prepare($sql);
$stmt->execute();
if ($stmt->rowCount() > 0)
{
    while ($row = $stmt->fetch(PDO::FETCH_OBJ))
    {
        echo $row->name;
    }
}