<?php
session_start();
if(!empty($_SESSION['admin'])){
  header('location:student-registration.php');
}
?>
<?php
require_once("header.php");
?>

   <div class="container row">
       <div class="logo col s6 center green-text text-darken-5 c">
          <h1>hey there !</h1>
          <h3>welcome back to unity school grading system</h3>
        <img src="img/clogo.png" alt="" srcset="">
       </div>
       <center>
       <div class="col s4 container green-text text-darken-5 c">
           <form action="processor/login_processor.php" method="post" class="">
            <div class="round">
            <h1>login</h1>
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
          <button class="btn-large green z-depth-0" type="submit" name="submit">login</button>
        </center>
        </div>
        </form>
       </div>
       </center>
   </div> 
   <?php
   require_once("footer.php");
   ?>
  