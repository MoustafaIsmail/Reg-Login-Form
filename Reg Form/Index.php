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
    <link rel="stylesheet" href="css/style.css">

    <title>IEEE Registration Form</title>
</head>
<body class="bg-1">
  <div class="wrapper">
   <div class="card">
    <div class="card-body">
     <div class="card-title"> <!--FORM-HEAD-->
       <img class="form-icon float-left m-4" src="img/ieee-icon.png">
       <h2 class="title robo float-right mr-5 my-5 p-4 d-none d-sm-block">Registration Form</h2>
     </div>
     <hr>
     <?php include('error.php'); ?>
     <form method="POST"> <!--FORM-BODY-->
       <div class="form-row">
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input class="form-control input-style-1" type="text" name="firstname" placeholder="First Name" required value="<?php echo $firstname; ?>" />
           </div>
         </div>
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input class="form-control input-style-1" type="text" name="lastname" placeholder="Last Name" required value="<?php echo $lastname; ?>" />
         </div>
         </div>
       </div>

       <div class="form-row">
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
             <input class="form-control input-style-1" name="email" type="email" placeholder="Your E-mail" required value="<?php echo $email; ?>"/>
           </div>
         </div>
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4 ">
             <div class="btn-group btn-group-toggle ml-5" data-toggle="buttons">
               <label class="btn btn-lg btn-outline-primary">
                 <input type="radio" name="gender" id="option1" value="male" autocomplete="off" required> Male
               </label>
               <label class="btn btn-lg btn-outline-primary">
                 <input type="radio" name="gender" id="option2" value="female" autocomplete="off"> Female
               </label>
         </div>
           </div>
         </div>
       </div>

       <div class="form-row">
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-key"></i></span>
             <input class="form-control input-style-1" name="password1" type="password" placeholder="Your Password" required />
           </div>
         </div>
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4 ">
             <span class="input-group-addon"><i class="fa fa-key"></i></span>
             <input class="form-control input-style-1" name="password2" type="password" placeholder="Confirm Your Password" required />
         </div>
         </div>
       </div>

       <div class="form-row">
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4">
             <span class="input-group-addon"><i class="fa fa-phone"></i></span>
             <input class="form-control input-style-1" type="text" name="mobile" placeholder="Your Mobile" maxlength="11" required value="<?php echo $mobile; ?>" />
           </div>
         </div>
         <div class="col col-lg-6 col-md-6 col-sm-6 col-12">
           <div class="input-group px-3 mt-4" id='datetimepicker1'>
             <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
             <input class="form-control input-style-1" type="date" name="birthday" placeholder="DD/MM/YYYY" required value="<?php echo $birthday; ?>"/>
         </div>
         </div>
       </div>

       <div class="form-row">
         <div class="col col-md-6 col-sm-6 col-12">
           <div class="input-groupp px-3 mt-4 ">
             <label class="custom-file">
               <input type="file" name="file" id="file" class=" custom-file-input form" required>
               <span class="custom-file-control"></span>
             </label>
           </div>
         </div>
       </div>

       <div class="form-row">
        <button value="submit" name="register" class="btn btn-outline-primary btn-lg w-100 ml-5 mr-5 mt-5 mb-4 p-2">Register</button>
        <p class="lead m-auto">Already a member? <a id="login"  class="btn" href="login.php">Login</a></p>
       </div>
     </form>
    </div>
   </div>
  </div>
</body>
</html>
