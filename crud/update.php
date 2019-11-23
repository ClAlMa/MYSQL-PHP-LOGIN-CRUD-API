<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>title</th>
               <td><input type="text"  name="title" placeholder ="title" value="<?php echo $data['title'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Author name</th>
               <td><input type= "text" name="author_name"  placeholder="Author name" value ="<?php echo $data['author_name'] ?>" /></td >
           </tr>
           <tr>
               <th >Author surname</th>
               <td><input type ="text" name= "author_surname" placeholder= "Author surname" value= "<?php echo $data['author_surname'] ?>" /></td>
           </tr>
                      <tr>
               <th >image</th>
               <td><input type ="text" name= "image" placeholder= "image" value= "<?php echo $data['image'] ?>" /></td>
           </tr>
           <tr>
               <th >ISBN</th>
               <td><input type ="text" name= "isbn" placeholder= "ISBN" value= "<?php echo $data['isbn'] ?>" /></td>
           </tr>
           <tr>
               <th >description</th>
               <td><input type ="text" name= "description" placeholder= "description" value= "<?php echo $data['description'] ?>" /></td>
           </tr>
           <tr>
               <th >publish date</th>
               <td><input type ="text" name= "publish_date" placeholder= "publish date" value= "<?php echo $data['publish_date'] ?>" /></td>
           </tr>
           <tr>
               <th >type</th>
               <td><input type ="text" name= "type" placeholder= "type" value= "<?php echo $data['type'] ?>" /></td>
           </tr>
           <tr>
               <th >available</th>
               <td><input type ="text" name= "available" placeholder= "available" value= "<?php echo $data['available'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button class="btn btn-info"  type= "submit">Save Changes</button></td>
               <td>                <a href='index.php'><button class='btn btn-success'  type='button'>back</button></a></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>