<?php 

require_once 'db_connect.php';

if ($_POST) {
   $title = $_POST['title'];
   $aName = $_POST['author_name'];
   $aSur = $_POST[ 'author_surname'];
   $img= $_POST['image'];
      $isbn= $_POST['isbn'];
   $descr= $_POST['description'];
   $publishD= $_POST['publish_date'];
   $publisher=$_POST['publisher'];

      $type= $_POST['type'];
   $available= $_POST['available'];

   $sql = "INSERT INTO media 
(title, author_name, author_surname, image, isbn, description, publish_date,publisher, type, available) VALUES ('$title', '$aName', '$aSur', '$img', '$isbn', '$descr', '$publishD', '$publisher', '$type', '$available')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>