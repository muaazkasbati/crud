<?php

if(isset($_GET['id'])){


    $id = $_GET['id'];


    $con = mysqli_connect("localhost","root","","school");

    $fetch = $con->query("SELECT * FROM `student` WHERE `id`='$id'");
    foreach($fetch as $data){

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update-Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <form action="edit.php" method="post">
        
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" >
        <div class="form-group">
          <label for="">Name</label>
          <input type="text"
            class="form-control" name="name" value="<?php echo $data['name'] ?>" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email"
            class="form-control" name="email" id="" value="<?php echo $data['email'] ?>"  aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Address</label>
          <input type="text"
            class="form-control" name="address" id="" value="<?php echo $data['address'] ?>"  aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Batch</label>
          <input type="text"
            class="form-control" name="batch" id="" value="<?php echo $data['batch'] ?>"  aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>

        <input class="btn btn-info" type="submit" name="Update" value="Update">
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
}
if(isset($_POST['Update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $batch = $_POST['batch'];

    $con = mysqli_connect("localhost","root","","school");

    $update = $con->query("UPDATE `student` SET `name`='$name',`email`='$email',`address`='$address',`batch`='$batch' WHERE id ='$id'");
    
    if($update){
        header("location:student.php");
    }


}

?>