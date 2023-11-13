<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");

$error =" ";
if(!empty($_POST['subject'])){
  $subject = $_POST['subject'];
  }
    if(isset($_POST['submit'])){
    $check = "select * from subject where subjectName = '$subject'";
    $check = query($check);
    if (mysqli_num_rows($check) > 0 ) {
      $error = "this subject has been registered";
    }else{
     $query = "insert into subject values('$subject')";
    $result = query($query);
        if($result){
          $error = "subject registered successfully";
        }
    }
    }
  }
?>
  <div class="s-container">
   <div class="container">
       <div class="logo col s6 center green-text text-darken-5 c">
        <img src="img/clogo.png" alt="" srcset="">
       </div>
       <center>
       <div class="green-text text-darken-5 c">
           <form action="subject-registration.php" method="post" class="">
            <div class="round">
            <h1>student registration</h1>
            <h6 class="red-text text-darken-5"><?php echo $error ; ?></h6>
            <div class="container row">
            <div class="input-field col s12">
        <input type="text" name="subject" id="subject" maxlength="15" required>
        <label for="subject">suject&nbsp;name</label>
        </div>

          <button class="btn-large green z-depth-0" type="submit" name="submit">register&nbsp;subject</button>
        </center>
        </div>
        </form>
       </div>
       </center>
   </div> 
   </div>
  <?php
   require_once("footer.php");
   ?>
  