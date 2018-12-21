<?php include('server.php'); ?>
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
    <link rel="stylesheet" href="css/stylee.css">

    <title>IEEE Login</title>
</head>
<body class="bg-1">
  <div class="wrapper">
   <div class="card">
    <div class="card-body">
     <div class="card-title">
       <img class="form-icon d-flex justify-content-center m-auto" src="img/ieee-icon.png">
     </div>
     <hr>
     <?php include('error.php'); ?>
     <form method="post">
       <div class="form-row">
         <div class="col">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
             <input class="form-control input-style-1" name="email" type="email" placeholder="Your E-mail" required value="<?php echo $email; ?>" />
           </div>
         </div>
       </div>

       <div class="form-row">
         <div class="col">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-key"></i></span>
             <input class="form-control input-style-1" name="password" type="password" placeholder="Your Password" required />
           </div>
         </div>
       </div>

       <div class="form-row">
        <button name="login" value="submit" class="btn btn-outline-primary btn-lg w-100 ml-5 mr-5 mt-5 mb-4 p-2">Login</button>
        <p class="lead m-auto">Not a member Yet?  <a id="login"  class="btn" href="index.php">Sign Up</a></p>
       </div>
     </form>
    </div>
   </div>
  </div>
</body>
</html>
