<?php
session_start();
$conn=mysqli_connect("localhost","root","","user");
if (isset($_POST['uname']) && isset($_POST['pass'])) {
  function validate($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  $uname = validate($_POST['uname']);
  $pass = validate($_POST['pass']);
  if (empty($uname)) {
   header("location: login.php?uname=Nom d'utilisateur  nécessaire");
   exit();
 }
 elseif (empty($pass)) {
   header("location: login.php?pass=Mot de passe nécessaire");
   exit();
 }else{
  $sql= "SELECT * FROM officier WHERE user_name='$uname'  and password='$pass' ";
  $result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)===1) {
    $row=mysqli_fetch_assoc($result);
    if ($row['user_name']===$uname && $row['password']===$pass ) {
        $_SESSION['user_name']=$row['user_name'];
         $_SESSION['name']=$row['name'];
          $_SESSION['id']=$row['id'];
          header("location:../adminis/index.php");
           exit();
        }else{
           header("location: login.php?error=Nom d'utilisateur ou mot de passe incorrect");
           exit();

 }
  } else{
   header("location: login.php?error= Nom d'utilisateur ou mot de passe incorrect");
   exit();

 }

}

}else{
 header("location: login.php");
 exit();

}


?>
