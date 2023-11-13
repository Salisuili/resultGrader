<?php
require_once("initialize.php");
require_once("header.php");
require_once("navBar.php");
?>
  <div class="s-container">
   <div class="container">
       <div class="logo col s6 center green-text text-darken-5 c">
        <img src="img/clogo.png" alt="" srcset="">
       </div>
       <center>
       <div class="green-text text-darken-5 c">
           <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="">
            <div class="round">
            <h1>system configurations</h1>
            <div class="container row">
            <div class="input-field col s12">
        <input type="text" name="sname" id="sname" maxlength="100" required>
        <label for="sname">school&nbsp;name</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="sadress" id="sadress" maxlength="100" required>
        <label for="sadress">school&nbsp;adress</label>
        </div>

        <div class="input-field col s12">
        <input type="text" name="smotto" id="smotto" maxlength="100" required>
        <label for="smotto">motto</label>
        </div>

        <div class="input-field col s6">
        <input type="text" name="begin" id="begin" required>
        <label for="begin">term begins</label>
        </div>

       <div class="input-field col s6">
        <input type="text" name="ends" id="ends" required>
        <label for="ends">term end's</label>
        </div>
          <button class="btn-large green z-depth-0" type="submit" name="submit">register student</button>
        </center>
        </div>
        </form>
       </div>
       </center>
   </div> 
   </div>
   <footer class="center green-text text-darken-5 c">copyright&copy; unity 2016</footer>
   <?php
   require_once("footer.php");
   ?>
