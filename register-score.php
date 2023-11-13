<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");
$error =" ";
if(!empty($_POST['studentid'])){
  $studentid = $_POST['studentid'];
  }

  if(!empty($_POST['fca'])){
  $fca = $_POST['fca'];
  }

  if(!empty($_POST['sca'])){
  $sca = $_POST['sca'];
  }


  if(!empty($_POST['exam'])){
  $exam = $_POST['exam'];
  }

  if(!empty($_POST['term'])){
  $term = $_POST['term'];
  }

  if(!empty($_POST['session'])){
  $session = $_POST['session'];
  }

  if(!empty($_POST['class'])){
  $class = $_POST['class'];
  }

   if(!empty($_POST['subject'])){
  $subject = $_POST['subject'];
  }

$subjects = "SELECT * FROM subject ORDER BY subjectName DESC";
  $subjects = query($subjects);


  if(isset($_POST['submit'])){
     $query = "insert into grade(admissionNo,fca,sca,exams,term,session,class,subjectName) values('$studentid','$fca','$sca','$exam','$term','$session','$class','$subject')";
    $result = query($query);
        if($result){
          $error = "student score registered successfully";
        }else{
          $error = "unable to register score. pls try again later";
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
           <form action="register-score.php" method="post" class="">
            <div class="round">
            <h1>score registration</h1>
             <h6 class="red-text text-darken-5"><?php echo $error ; ?></h6>
            <div class="container row">
                      <div class="input-field col s12">
        <input type="text" name="studentid" id="studentid" required maxlength="30">
        <label for="studentid" class="u">admission&nbsp;number</label>
        </div>

            <div class="input-field col s12">
        <input type="text" name="fca" id="firstca" maxlength="2" required>
        <label for="firstca">first&nbsp;c.a</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="sca" id="secondca" maxlength="2" required>
        <label for="secondca">second&nbsp;c.a</label>
        </div>

                <div class="input-field col s6">
        <input type="text" name="exam" id="exam" maxlength="2" required>
        <label for="exam">exam</label>
        </div>

         <div class="input-field col s6">
        <input type="text" name="term" id="term" maxlength="1" required>
        <label for="term">term</label>
        </div>

        <div class="input-field col s6">
        <input type="text" name="session" id="session" maxlength="7" required>
        <label for="session">session</label>
        </div>

        <div class="input-field col s6">
        <select name="subject" required="">
          <?php
           if($subjects){
    $subjects = mysqli_fetch_all($subjects,MYSQLI_ASSOC);
    foreach ($subjects as $subjectss) {
      echo "<option value=\" $subjectss[subjectName]\">".$subjectss['subjectName']."</option>";
    }
  }
          ?>
          <label>subject</label>
        </select>
        </div>

        <div class="input-field col s6">
        <input type="text" name="class" id="class" maxlength="15" required>
        <label for="class">class</label>
        </div>
          <button class="btn-large green z-depth-0" type="submit" name="submit">register&nbsp;score</button>
        </div>
        </form>
       </div>
       </center>
   </div> 
   </div>
   <?php
   require_once("footer.php");
   ?>
  