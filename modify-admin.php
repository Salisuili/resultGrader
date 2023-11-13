<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
  require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");

$error = " ";

if(!empty($_POST['username'])){
  $username = $_POST['username'];
  }

  if(!empty($_POST['password'])){
  $password = $_POST['password'];
  }

  if(!empty($_POST['cusername'])){
  $cusername = $_POST['cusername'];
  }

  if(isset($_POST['submit'])){
    $query = "update admin set username = '$username',password ='$password' where username = '$cusername'";
    $result = query($query);
    if($result){
      $error = "admin details modified successfully";
    }else{
      $error = "admin modification failed.try again later";
    }
  }
}
?>

   <div class="container row">
       <div class="logo col s6 center green-text text-darken-5 c">
          <h1>hey there !</h1>
          <h3>welcome back to unity school grading system</h3>
        <img src="img/clogo.png" alt="" srcset="">
       </div>
       <center>
       <div class="col s4 container green-text text-darken-5 c">
           <form action="modify-admin.php" method="post" class="">
            <div class="round">
            <h1>admin setup</h1>
            <h6 class="red-text text-darken-5"><?php echo $error ?></h6>

             <div class="container row">
        <div class="input-field col s12">
        <input type="text" name="cusername" id="cusername" maxlength="15" required>
        <label for="cusername">previous&nbsp;username</label>
        </div>
        </div>

           <div class="container row">
            <div class="input-field col s12">
        <input type="text" name="username" id="username" maxlength="15" required>
        <label for="username">username</label>
        </div>
        </div>

         <div class="container row">
            <div class="input-field col s12">
        <input type="password" name="password" maxlength="8" id="password">
        <label for="password">password</label>
        </div>
        </div>

        <center>
          <button class="btn-large green z-depth-0" type="submit" name="submit">finish</button>
        </center>
        </div>
        </form>
       </div>
       </center>
   </div> 
   <?php
   require_once("footer.php");
   ?>
  