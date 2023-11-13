  <?php
  session_start();
  require_once("../initialize.php");
  if(!empty($_POST['username'])){
  $username = $_POST['username'];
  }
  if(!empty($_POST['password'])){
  $password = $_POST['password'];
  }
    $query = "select * from admin where userName = '$username' and password = '$password'";
    $result = query($query);
    if($result){
      if(mysqli_num_rows($result) > 0){
        $result = mysqli_fetch_assoc($result);
        $admin = $result['userName'];
        $_SESSION['admin'] = $admin;
        header('location:../student-registration.php');
    }else{
      header('location:../index.php');
    }
    }
  ?>