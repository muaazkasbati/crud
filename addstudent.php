<!doctype html>
<html lang="en">
  <head>
    <title>Add-Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h2>Php Crud</h2>
    <div class="container">
        <form action="addstudent.php" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email"
            class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <input type="text"
            class="form-control" name="address" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        
    <div class="form-group">
      <label for="">Batch</label>
      <select class="form-control" name="batch" id="">

      <?php  
              $con =  mysqli_connect("localhost","root","","school"); 
              $batch =$con->query("SELECT * FROM `batch`");


              foreach($batch as $data){
              ?>

            <option value="<?php echo $data['bname']?>"><?php echo $data['bname']?></option>
        
            <?php } ?>
      </select>
    </div>


        <div class="form-group">
          <label for="">Picture</label>
          <input type="file"
            class="form-control" name="picture" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Add Student">
        </form>
    </div>      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $batch = $_POST['batch'];
    $picture = $_FILES['picture']['name'];
    $tmpname = $_FILES['picture']["tmp_name"];
    $targetfile="img/".$picture;
    $move = move_uploaded_file($tmpname,$targetfile);



    $con = mysqli_connect("localhost","root","","school");

    $insert = $con->query("INSERT INTO `student`(`name`,`picture`, `email`, `address`, `batch`)
     VALUES ('$name','$targetfile','$email','$address','$batch')");
    
    if($insert){
        header("location:student.php");
    }


}

?>