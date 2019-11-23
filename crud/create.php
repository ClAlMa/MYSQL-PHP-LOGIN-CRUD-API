<!DOCTYPE html>
<html>
<head>
   <title>add media</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>


<fieldset>
   <legend>Add media</legend>

   <form action="actions/a_create.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>title</th>
           </tr >    
               <td><input type="text"  name="title" placeholder ="title"></td>
           <tr>
               <th>Author name</th>
           </tr>
               <td><input type= "text" name="author_name"  placeholder="Author name"></td >
           <tr>
               <th >Author surname</th>
           </tr>
               <td><input type ="text" name= "author_surname" placeholder= "Author surname"></td>
                      <tr>
               <th >image</th>
           </tr>
               <td><input type ="text" name= "image" placeholder= "image"></td>
           <tr>
               <th >ISBN</th>
           </tr>
               <td><input type ="text" name= "isbn" placeholder= "ISBN"></td>
           <tr>
               <th >description</th>
           </tr>
               <td><input type ="text" name= "description" placeholder= "description"></td>
           <tr>
               <th >publish date</th>
           </tr>
               <td><input type ="text" name= "publish_date" placeholder= "publish date"></td>
           <tr>
                       <tr>
               <th >publisher</th>
           </tr>
               <td><input type ="text" name= "publisher" placeholder= "publisher"></td>
           <tr>
               <th >type</th>
           </tr>
               <td><input type ="text" name= "type" placeholder= "type"></td>
           <tr>
               <th >available</th>
           </tr>
               <td><input type ="text" name= "available" placeholder= "available"></td>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><a href='actions/a_create.php'><button class="btn btn-info"  type= "submit">create</button></a></td>
               <td>                <a href='index.php'><button class='btn btn-success'  type='button'>back</button></a></td >
           </tr>
       </table>
   </form >


</fieldset >

</body>
</html>