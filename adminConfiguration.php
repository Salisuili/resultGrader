<?php 
session_start();
if(!isset($_SESSION['admin'])){
  header('location:index.php');
}else{
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");

$error = " ";
if(isset($_POST['submit'])){
	$schoolName = $_POST['schoolName'];
	$schoolAddress = $_POST['schoolAddress'];
	$motto = $_POST['motto'];
	$tbegin = $_POST['tbegin'];
	$tend = $_POST['tend'];


	$query = "insert into config(schoolName,motto,schoolAddress,termBegins,termEnds) values('$schoolName','$motto','$schoolAddress','$tbegin','tend')";
	$query = query($query);

	if ($query) {
		$error = "details added successfully";
	}else{
		$error = "fail to process your request. try again later";
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
           <form action="adminConfiguration.php" method="post" class="">
            <div class="round">
            <h1>school detail panel</h1>
            <h6 class="red-text text-darken-5"><?php echo $error ?></h6>
            <div class="container row">
            <div class="input-field col s12">
        <input type="text" name="schoolName" id="schoolName" maxlength="100" required>
        <label for="schoolName">school&nbsp;name</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="motto" id="motto" maxlength="100">
        <label for="motto">school&nbsp;motto</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="schoolAddress" id="schoolAddress" maxlength="100">
        <label for="schoolAddress">school&nbsp;address</label>
        </div>

        <div class="input-field col s12">
        <input type="date" name="tbegin" id="tbegin" required>
        <label for="tbegin">term&nbsp;begin</label>
        </div>

        <div class="input-field col s12">
        <input type="date" name="tend" id="motto" required>
        <label for="motto">term&nbsp;end</label>
        </div>

        <button class="btn-large green z-depth-0" type="submit" name="submit">register student</button>
        </center>
        </div>
        </form>
       </div>
       </center>
   </div> 
   </div>
 <<?php require_once('footer.php'); ?>