<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
if(!empty($_POST['class'])){
  $class = $_POST['class'];
  }
  if(!empty($_POST['session'])){
    $session = $_POST['session'];
  }
  if(!empty($_POST['term'])){
  $term = $_POST['term'];
  }
    $schoolDetail = "SELECT * FROM config";
    $schoolDetail =  query($schoolDetail);
    $schoolDetail = mysqli_fetch_assoc($schoolDetail);
    $students = "SELECT DISTINCT admissionNo FROM grade WHERE term='$term' and class='$class' and session='$session'";
    $students = query($students);
    if ($students) {
    $students = mysqli_fetch_all($students,MYSQLI_ASSOC);
    foreach ($students as $student) {
        $studentsDetail = "SELECT DISTINCT * FROM student where admissionNo='$student[admissionNo]'";
        $studentsDetail = query($studentsDetail);
        if ($studentsDetail) {
          foreach ($studentsDetail as $studentDetail) {
            require('report-header.php');
            $results = "SELECT DISTINCT admissionNo,fca,sca,subjectName,exams FROM grade where admissionNo='$studentDetail[admissionNo]' and term='$term' and class='$class' and session='$session'";
            $results = query($results);
            if ($results) {
              foreach ($results as $result) {
                require('report-data.php');              }
            }
            require('report-footer.php');
          }
        }
      }  
        }
  }
?>