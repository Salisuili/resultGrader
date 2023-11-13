<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");

$error = " ";
if(!empty($_POST['fname'])){
  $fname = $_POST['fname'];
  }

  if(!empty($_POST['mname'])){
  $fname = $_POST['mname'];
  }else{
    $mname = " ";
  }

  if(!empty($_POST['lname'])){
  $lname = $_POST['lname'];
  }

  if(!empty($_POST['gender'])){
  $gender = $_POST['gender'];
  }

  if(!empty($_POST['studentid'])){
  $studentid = $_POST['studentid'];
  }

  if(isset($_POST['submit'])){
    $query = "update student set fname = '$fname',mname ='$mname',lname='$lname',sex='$gender',admissionNo='$studentid' where admissionNo = '$studentid'";
    $result = query($query);
    if($result){
      $error = "student record modified successfully";
    }else{
      $error = "student modification failed.try again later";
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
           <form action="modify-student.php" method="post" class="">
            <div class="round">
            <h1>student modification</h1>
             <h6 class="red-text text-darken-5"><?php echo $error ?></h6>
            <div class="container row">
                      <div class="input-field col s12">
        <input type="text" name="studentid" id="studentid" required maxlength="30">
        <label for="studentid" class="u">admission&nbsp;number</label>
        </div>
            <div class="input-field col s12">
        <input type="text" name="fname" id="fname" maxlength="15" required>
        <label for="fname">first&nbsp;name</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="mname" id="mname" maxlength="15">
        <label for="mname">middle name</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="lname" id="lname" maxlength="15" required>
        <label for="lname">last&nbsp;name</label>
        </div>

        <div class="input-field col 12">
        <input type="text" name="gender" id="gender" maxlength="15" required>
        <label for="gender">gender</label>
        </div>

          <button class="btn-large green z-depth-0" type="submit" name="submit">modify&nbsp;student</button>
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
  