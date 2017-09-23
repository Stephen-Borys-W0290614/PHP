<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Films in Sakila</title>
</head>
<body>
<table>
    <thread>
        <tr>
            <th>Descrption</th>
        </tr>
    </thread>
    <tbody>
<?php
mysqli_connect( "localhost", "root",  "inet2005",  "sakila");
if (!$conn){
    echo die("Could not connect" .mysql_connect_error());
}
$result = mysqli_query($conn, "select * from film limit 0,10");
if(!$result){
    die("Could not retrieve dats " . mysqli_error());
}
while ($row = mysqli_fetch_assoc($result)): ?> {

echo $row['title'] . " : "  . $row['description']. "<br/>";
</php
endwhile;
?>
}
?>
    </tbody>
</table>
</body>
</html>