


<?php /*
<form>
    Name: <input type="text" value="<?php echo $result['first_name']?>"/> </br>
    age: <input type="text" value="<?php echo $result['last_name']?>"/> </br>

</form>
 */ ?>
<?php /*
require("dbconn.php");
$conn = connectToDatabase();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db("my_db", $conn);
$id = ($_POST['id']);

$result = mysqli_query($conn,"SELECT * FROM actor WHERE actor_id = $id");

while($row = mysqli_fetch_array($result))
{
    echo '<form action="">';
    echo '<select name="nameofname :D">';
    echo '<option value='. $row['first_name'] .">". $row['last_name']. '</option>';
  echo '</form>';
  }

mysqli_close($conn);
*/?>