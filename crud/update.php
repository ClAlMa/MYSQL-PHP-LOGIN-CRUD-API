<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM {$id}";
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

$subbi = substr($id,-8,-2);

if ($subbi=="res_id"){
$subtable="restaurant";
}
elseif ($subbi=="tod_id") {
$subtable="todo";
}
else{
$subtable="concerts";
}

   $conn->close();

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

   <form action="actions/a_create.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>title</th>
               <td><input type="text"  name="title" placeholder ="title" value="<?php echo $data['tod_name'] ?><?php echo $data['res_name'] ?><?php echo $data['loc_name'] ?>"  /></td>
           </tr >    
           <tr>
               <th>type</th>
               <td><input type= "text" name="type"  placeholder="type" value ="<?php echo $data['tod_type'] ?><?php echo $data['res_type'] ?><?php echo $data['loc_type'] ?>" /></td >
           </tr>
           <tr>
               <th >description</th>
               <td><input type ="text" name= "description" placeholder= "description" value= "<?php echo $data['tod_descr'] ?><?php echo $data['res_descr'] ?><?php echo $data['loc_descr'] ?>" /></td>
           </tr>
                      <tr>
               <th >web</th>
               <td><input type ="text" name= "web" placeholder= "web" value= "<?php echo $data['tod_web'] ?><?php echo $data['loc_web'] ?>" /></td>
           </tr>
           <tr>
               <th >adress</th>
               <td><input type ="text" name= "adress" placeholder= "adress" value= "<?php echo $data['tod_adr'] ?><?php echo $data['res_adr'] ?><?php echo $data['loc_adr'] ?>" /></td>
           </tr>
           <tr>
               <th >conDate</th>
               <td><input type ="text" name= "condate" placeholder= "condate" value= "<?php echo $data['con_date'] ?>" /></td>
           </tr>
           <tr>
               <th >conprize</th>
               <td><input type ="text" name= "conprize" placeholder= "conprize" value= "<?php echo $data['con_prize'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data[$subbi]?>" />
 <input type="hidden" name= "statement" value="<?php echo $id ?>" />
 <input type="hidden" name= "subtable" value="<?php echo $subtable ?>" />
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