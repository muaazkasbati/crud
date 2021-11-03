
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <h2>Php Crud</h2>

  <div class="container">
  <br>

  <br>  
<a  class="btn btn-primary" href="addstudent.php" role="button">Add New Record</a>
<a  class="btn btn-primary" href="addteacher.php" role="button">Add Teacher</a>
<a  class="btn btn-primary" href="addbatch.php" role="button">Make Batch</a>
  <br>    
  <br>    
  <br>    
      <table class="table table-striped table-inverse table-responsive">
          <thead class="thead-inverse">
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>PICTURE</th>
                  <th>EMAIL</th>
                  <th>ADDRESS</th>
                  <th>BATCH</th>
                  <th>Options</th>
              </tr>
              </thead>
              <tbody>
              <?php  
              $con =  mysqli_connect("localhost","root","","school"); 
              $fetch =$con->query("SELECT * FROM `student`");


              foreach($fetch as $data){
              ?>
                  <tr>
                      <td scope="row"><?php echo $data['id'] ?></td>
                      <td><?php echo $data['name'] ?></td>
                      <td>
                      <?php 
                     if($data['picture']!=null){
                       ?>
                        <img style="height:32px;width:32px" src="<?php echo $data['picture'] ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                       <?php
                     } else{

                      ?>
                      <img style="height:42px;width:52px"  src="img/abc.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                     <?php

                     }
                     ?>
                     
                     </td>
                      <td><?php echo $data['email'] ?></td>
                      <td><?php echo $data['address'] ?></td>
                      <td><?php echo $data['batch'] ?></td>
                      <td><a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']?>">EDIT</a>  |  <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']?>">DELETE</a></td>
                 
                  </tr>
              <?php } ?>
              </tbody>
      </table>

      <br>    
      <table class="table table-striped table-inverse table-responsive">
          <thead class="thead-inverse">
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>PICTURE</th>
                  <th>EMAIL</th>
                  <th>ADDRESS</th>
                  <th>Salary</th>
                  <th>Options</th>
              </tr>
              </thead>
              <tbody>
              <?php  
              $con =  mysqli_connect("localhost","root","","school"); 
              $Teacher =$con->query("SELECT * FROM `teacher`");


              foreach($Teacher as $data){
              ?>
                  <tr>
                      <td scope="row"><?php echo $data['id'] ?></td>
                      <td><?php echo $data['name'] ?></td>
                      <td>
                      <?php 
                     if($data['picture']!=null){
                       ?>
                        <img style="height:32px;width:32px" src="<?php echo $data['picture'] ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                       <?php
                     } else{

                      ?>
                      <img style="height:42px;width:52px"  src="img/abc.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                     <?php

                     }
                     ?>
                     
                     </td>
                      <td><?php echo $data['email'] ?></td>
                      <td><?php echo $data['address'] ?></td>
                      <td><?php echo $data['salary'] ?></td>
                      <td><a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']?>">EDIT</a>  |  <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']?>">DELETE</a></td>
                 
                  </tr>
              <?php } ?>
              </tbody>
      </table>

      <table class="table table-striped table-inverse table-responsive">
          <thead class="thead-inverse">
              <tr>
                  <th>ID</th>
                  <th>Batch Name</th>
                  <th>Batch of</th>
              
              </tr>
              </thead>
              <tbody>
              <?php  
              $con =  mysqli_connect("localhost","root","","school"); 
              $batch =$con->query("SELECT * FROM `batch`");


              foreach($batch as $data){
              ?>
                  <tr>
                
                      <td><?php echo $data['bname'] ?></td>
                      <td><?php echo $data['tname'] ?></td>
              
                      <td><a class="btn btn-primary" href="edit.php?id=<?php echo $data['id']?>">EDIT</a>  |  <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']?>">DELETE</a></td>
                 
                  </tr>
              <?php } ?>
              </tbody>
      </table>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>