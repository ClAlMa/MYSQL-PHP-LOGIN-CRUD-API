<?php 

require_once 'db_connect.php';

if ($_POST) {
   $title = $_POST['title'];
   $aName = $_POST['author_name'];
   $aSur = $_POST[ 'author_surname'];
   $img=$_POST['image'];
      $isbn=$_POST['isbn'];
   $descr=$_POST['description'];
   $publishD=$_POST['publish_date'];
   $id = $_POST['id'];
      $type=$_POST['type'];
   $available=$_POST['available'];

   $sql = "UPDATE media SET title = '$title', author_name = '$aName', author_surname = '$aSur', image = '$img', isbn = '$isbn',description = '$descr', publish_date = '$publishD', type = '$type', available = '$available' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>