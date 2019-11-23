<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM todo WHERE {$id}";
   echo $sql;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();
echo "<br>" .$data;

foreach($data as $value){ 
    echo $value;    
?>  <br/>
<?php
}

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete media</title>
</head>
<body>

<h3>Do you really want to delete this media?</h3>

<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['tod_id'] ?>" />
   <button type="submit">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>

<?php
}
echo $data['tod_id'];
?>