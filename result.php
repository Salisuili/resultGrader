<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");
}
 ?>
 <div class="s-container">
  <div class="container">
    <div class="logo col s6 center green-text text-darken-5 c">
        <img src="img/clogo.png" alt="" srcset="">
       </div>
     </div>
  </div>
  <center>
 <form action="result-processor.php" method="post">
<div class="round">
            <h1>result-printer</h1>
            <h6 class="red-text text-darken-5"></h6>
            <div class="container row">

    <div class="input-field col s12">
        <input type="text" name="class" id="class" maxlength="15">
        <label for="class">class</label>
        </div>

         <div class="input-field col s12">
        <input type="text" name="session" id="session" maxlength="4">
        <label for="session">session</label>
        </div>

         <div class="input-field col s12">
        <input type="text" name="term" id="term" maxlength="1">
        <label for="term">term</label>

        <button class="btn-large green z-depth-0" type="submit" name="submit">print&nbsp;results</button>
        </div>
      </div>
 </form>
 </center>
 <?php require_once('footer.php'); ?>