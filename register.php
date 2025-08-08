

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.scss">

</head>
<body>


<section class="form-container">

   <form class="register" action="" method="post" enctype="multipart/form-data">
      <h3>create account</h3>
      <div class="flex">
      <div class="col">
            <p>your Name <span>*</span></p>
            <input type="text" name="name" placeholder="eneter your Name" maxlength="50" required class="box">
            <p>your email <span>*</span></p>
            <input type="email" name="email" placeholder="enter your email" maxlength="20" required class="box">
         </div>
         <div class="col">
            <p>your BOID <span>*</span></p>
            <input type="text" name="BOID" placeholder="eneter your BOID" maxlength="50" required class="box">
            <span id="passwordHelpInline" class="form-text">
            Must be 16 characters long.
            </span>
            
         </div>
         <div class="col">
            <p>your password <span>*</span></p>
            <input type="password" name="pass" placeholder="enter your password" maxlength="20" required class="box">
            <p>confirm password <span>*</span></p>
            <input type="password" name="cpass" placeholder="confirm your password" maxlength="20" required class="box">
         </div>
      </div>
      <p>select pic <span>*</span></p>
      <input type="file" name="image" accept="image/*" required class="box">
      <p class="link">already have an account? <a href="user-login.php">login now</a></p>
      <input type="submit" name="submit" value="register now" class="btn">
      <a href="index.php">Home Page</a>
   </form>

</section>













<!-- custom js file link  -->
<script src="script.js"></script>
   
</body>
</html>