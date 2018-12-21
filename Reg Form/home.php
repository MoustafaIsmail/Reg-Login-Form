<?php include('server.php');
 if(empty($_SESSION['success'])){
   header('location: login.php');
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta&link tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="img/ieee-icon.png">
    <link rel="stylesheet" href="css/styleee.css">

    <title>IEEE Home</title>
</head>
 <body class="bg-1">
  <div class="wrapper">
   <div class="card">
      <!-- <div class="alert alert-success mt-5 mx-5">sasa</div>
      <div class="alert alert-success mx-5 mt-4 btn">sasa</div> -->

   <?php if(isset($_SESSION['success']) && !isset($_SESSION['admin'])): ?> <!--normal user-->
    <div class="alert alert-success mt-5 mx-5">
      <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
       ?>
    </div>
   <?php endif ?>

   <?php if(isset($_SESSION['firstname']) && !isset($_SESSION['admin'])): ?>   <!--normal user-->
    <div class=" mx-5 mt-4 col-10">
      <p class="lead alert alert-light w-75">welcome <?php echo $_SESSION['firstname']; ?> ♥</p>
      <p class="alert alert-light h5 w-75">Your Firstname is : <?php echo $_SESSION['firstname']; ?></p>
      <p class="alert alert-light h5 w-75">Your Lastname is : <?php echo $_SESSION['lastname']; ?></p>
      <p class="alert alert-light h5 w-75">Your Email is : <?php echo $_SESSION['email']; ?></p>
      <p class="alert alert-light h5 w-75">Your Mobile is : <?php echo $_SESSION['mobile']; ?></p>
      <p class="alert alert-light h5 w-75">Your Gender is : <?php echo $_SESSION['gender']; ?></p>
      <p class="alert alert-light h5 w-75 mb-4">Your Birthday is : <?php echo $_SESSION['birthday']; ?></p>
        <div class="container col-12">
          <a href="#" id="edit" class="alert alert-success btn mt-4 btn w-50 d-inline mx-5 mt-4">Edit</a>
          <a href="home.php?logout='1'" id="login" class="alert alert-danger btn mt-4 btn w-50 d-inline mt-4">Log out</a> <!--id !!-->
        </div>
    </div>
   <?php endif ?>

   <?php if(isset($_SESSION['admin'])): ?> <!--ADMIN-->
    <div class="col-10 m-5">
      <table class="table table-striped m-4 col-lg-12 table-hover">
        <thead class="thead-inverse">
          <tr>
           <th>Select</th>
           <th>ID</th>
           <th>Firstname</th>
           <th>Lastname</th>
           <th>Mail</th>
           <th>Password</th>
           <th>Mobile</th>
           <th>Birthday</th>
           <th>Gender</th>
          </tr>
        </thead>
       <tbody>
        <!--t3bt(while cond !!)-->
       </tbody>
     </table>
       <div class="mt-5">
         <a href="home.php?logout='1'" id="login" class="alert alert-danger btn m-4 btn w-50 d-inline mt-4">Log out</a> <!--id !!-->
         <a href="#" id="login" class="alert alert-dark btn mt-4 btn w-50 d-inline m-4">Delet</a> <!--id !!-->
         <a href="#" id="login" class="alert alert-warning btn mt-4 btn w-50 d-inline m-4">Edit</a> <!--id !!-->
         <input class="form-control w-25  float-right" type="text" placeholder="Search">
       </div>
     </div>
   <?php endif ?>
   </div>
  </div>
</body>
</html>
