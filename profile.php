<?php include_once("connection.php");   ?>
<?php include_once("profile_header.php");   ?>
<style>
  .container{
     
    box-shadow: 0 0.1rem 0.5rem rgb(0 0 0 / 15%);
    border-radius: 4px;
    margin:0 auto;
  }
</style>

<form method="POST">
<div class="container">

    <div class="row">
        <div class="col-10">
        <form action="">
    <?php
        $query ="SELECT * fROM login";
        $query_run=$link->query($query);
        while($login=$query_run->fetch_assoc()){
    ?>

    <!--
      // if(isset($_POST['submit'])){
       //     $first_name=$_POST['first_name'];
      //      $last_name=$_POST['last_name'];
       //     $email=$_POST['email'];
       //     $phone=$_POST['phone'];
         //   $password=$_POST['password'];
           // $card=$_POST['card'];
//
           // $sql="update 'login' set id=$id,name='$name',email='$email',phone='$phone',password='$password',card='$card'";
            //$result=mysqli_query($link,$sql);
           // if($result){
        //        echo"";
          //  }else{
            //    die(mysqli_error($link));
            //}
        //}
          -->
          <div class="form-row">
          <div class="form-group col-6">
              <p>First Name:</p>
              <input type="text" class="form-control" name="first_name" value=" <?php echo $login['first_name'];  ?>">
          </div>
          <div class="form-group col-6">
              <p>Last Name:</p>
              <input type="text" class="form-control" name="last_name" value="<?php echo $login['last_name'];  ?>  ">
          </div>
          </div>

          <div class="form-row">
          <div class="form-group col-6">
              <p>Email Address:</p>
              <input type="email" class="form-control" name="email" value=" <?php echo $login['email'];  ?>">
          </div>
          <div class="form-group col-6">
              <p>Contact Number:</p>
              <input type="numeric" class="form-control" name="phone" value="<?php echo $login['phone'];  ?> ">
          </div>
          <div class="form-group col-6">
              <p>Password:</p>
              <input type=" " class="form-control" name="password" value="<?php echo $login['password'];  ?> ">
          </div>
          <div class="form-group col-6">
              <p>Credit Card NO:</p>
              <input type=" " class="form-control" name="card" value="<?php echo $login['card'];  ?> ">
          </div>
          <?php } ?>       

          <div class="form-row">
          <div class="form-group col-12 text-center">
              <button type="submit" class="btn btn-primary">
                  <i class="fas fa-save"></i>
                  Save
              </button>
          </div>
          </div>
          </div>
        </div>               
    </div>
</div>
</form>




<div class="panel-footer">
	<p style="text-align:center; padding:5px;">&copy;2022</p>
</div>

</div>
</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html> 