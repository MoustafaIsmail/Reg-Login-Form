<?php
session_start();
//variables initialization
$error = array();
$firstname='';
$lastname='';
$email='';
$password1='';
$password2='';
$mobile='';
$birthday='';
$gender='';
$file='';
$db = mysqli_connect('localhost','root','','IEEE');

if(isset($_POST['register'])){ //for registeration

$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$mobile = $_POST['mobile'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$file = $_POST['file'];
// $target = "img/".basename($FILES['image']['name']);

if($password1 != $password2){   //pass match
 array_push($error,"Passwords don't match !!");
}

$quer = mysqli_query($db,"SELECT * FROM data WHERE email ='$email'");
if (mysqli_num_rows($quer) > 0)
{
  array_push($error,"This Email is used before :D");
}

if (count($error) == 0) { //alles GUT ♥
 $password = md5($password1);
 $sql = "INSERT INTO data (firstname,lastname,email,password,mobile,birthday,gender,file)
                   VALUES ('$firstname','$lastname','$email','$password','$mobile','$birthday','$gender','$file')";
 mysqli_query($db,$sql);
 $_SESSION['firstname'] = $firstname;
 $_SESSION['lastname'] = $lastname;
 $_SESSION['email'] = $email;
 $_SESSION['mobile'] = $mobile;
 $_SESSION['gender'] =$gender;
 $_SESSION['birthday'] =$birthday;
 $_SESSION['success'] = "Now You are With us";
 header('location:home.php');
}
}

if (isset($_POST['login'])) { //for loging in
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password = md5($password);

   $query = "SELECT * FROM data WHERE email='$email' AND password='$password'";
   $result = mysqli_query($db,$query); //for loging in

   $quer = "SELECT * FROM data WHERE email='$email'";
   $resultf = mysqli_query($db,$quer); //for getting data
   $row = mysqli_fetch_array($resultf);

   if (mysqli_num_rows($result) == 1 && $email == "admin@admin.admin"){ //if its admin(1mail just for now)
     $_SESSION['admin'] = "welcome Boss ♥♥";
      $_SESSION['success'] = "hi"; //just for direction baby !!
     // $_SESSION['firstname'] = $row['firstname'];
     // $_SESSION['lastname'] = $row['lastname'];
     // $_SESSION['gender'] = $row['gender'];
     // $_SESSION['email'] = $row['email'];
     // $_SESSION['mobile'] = $row['mobile'];
     // $_SESSION['birthday'] = $row['birthday'];
     // $_SESSION['file'] = $row['file'];
     header('location:home.php');

   }elseif (mysqli_num_rows($result) == 1) { // for users
     $_SESSION['firstname'] = $row['firstname'];
     $_SESSION['lastname'] = $row['lastname'];
     $_SESSION['gender'] = $row['gender'];
     $_SESSION['email'] = $row['email']; // SHAKIRAAAAAAAAAAAAAAAAAAAAAAAA
     $_SESSION['mobile'] = $row['mobile'];
     $_SESSION['birthday'] = $row['birthday'];
     $_SESSION['file'] = $row['file'];


     $_SESSION['success'] = "Now You are With us";
     header('location:home.php');
   }else {
     array_push($error,"Wrong E-Mail or Password");
     $email = $_POST['email'];
   }
}


if (isset($_GET['logout'])) { //for loging out
  session_destroy();
  unset($_SESSION['success']);
  header('location: index.php');
}
 ?>
