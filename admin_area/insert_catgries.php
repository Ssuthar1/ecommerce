


<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $categray_title=$_POST['cat_title'];

  // SELECT data from data base 
  $select_query="select * FROM catgries WHERE  categray_title='$categray_title'";
  $result_select = mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('catgries already exist')</script>";

  }else{

  $insert_query="INSERT INTO catgries (categray_title) VALUES('$categray_title')";
  $result = mysqli_query($con,$insert_query);

  if($result){
    echo "<script>alert('catgries have been sucessfully added')</script>";
     
  }

  }}


?>




<form action="" method="post" class="mb-2">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="inser catgries" aria-label="catgries" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 m-auto">
  <input type="submit" class=" border-0 p-2 m-2 bg-info" name="insert_cat" value="inser catgries"  aria-describedby="basic-addon1">
  <!-- <button class="p-2 border-0 my-3 bg-info">inser brands</button> -->
</div>
</form>