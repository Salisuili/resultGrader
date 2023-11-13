<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");

$error = " ";

  if (isset($_POST['submit'])) {
    $file =$_FILES['csv']['tmp_name'];
    $size=$_FILES['csv']['size'];
    $type =$_FILES['csv']['type'];
    if($type == "application/vnd.ms-excel"){
      if ($size > 0) {
        $resourse = fopen($file, "r");
          while ($getData = fgetcsv($resourse,1000,",")) {
            if (is_array($getData) && count($getData) == 8) {
             $sql ="insert into grade(admissionNo,fca,sca,exams,term,session,class,subjectName) values('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]','$getData[5]','$getData[6]','$getData[7]')";
        $result = query($sql);
        if($result){
          $error = "students grade added successfully";
          }else{
            $error ="fail to upload students grade. contact 08101418633";
          }
        }else{
        $error = "invalid file";
      }
      }
      }else{
        $error = "this file is empty and cannot be processed.";
      }
    }else{
      $error = "invalid file.please upload microsoft excel file";
    }
    }
  }
?>
   <div class="s-container">
   <div class=" container row">
       <div class="logo col s6 center green-text text-darken-5 c">
        <img src="img/clogo.png" alt="" srcset="">
        <h5 class="center green-text text-darken-5 c">08101418633</h5>
       </div>
       <center>
       <div class="col s4 container green-text text-darken-5 c">
           <form action="register-scores.php" method="post" class="" enctype="multipart/form-data">
            <div class="round">
            <h3>score&nbsp;registration</h3>
            <h6 class="red-text text-darken-5"><?php echo $error ; ?></h6>
            <div class="container row">

         <div class="container row">
            <div class="input-field col s12">
        <input type="file" name="csv" required>
        </div>
        </div>

        <center>
          <button class="btn-large green z-depth-0" type="submit" name="submit">register&nbsp;scores</button>
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
