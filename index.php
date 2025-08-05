<?php
if(isset($_POST['submit'])):
$invesmet=$_POST['invesmet'];
$annualRate=$_POST['return_rate'];
$monthlyRate=$annualRate/12/100;
$years=$_POST['year'];
$months=$years*12;
$futureValue=0;
$futureValue=$invesmet*((pow(1+$monthlyRate,$months)-1)/$monthlyRate)*(1+$monthlyRate);
$invesmet_amonut=$invesmet*12*$years;
$est_rtn=$futureValue-$invesmet_amonut;
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investo</title>
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylee.scss" >

    

</head>

<body>


    <!-- navbar and main -->

    <section class='main' id="home" >
        <nav>
            <a herf="index.php" target="_blank" class="logo">
                Investo
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn" >
            <label class="menu-btn" for="menu-btn" > 
                <span class="nav-icon" > </span>     
            </label>

            <ul class="menu">
                
                <nav class="navbar" >
                    <li><a  href="#" > Home</a></li>
                    <!-- <li><a  href="calculator/calculator.php"  >Calculator</a></li> -->
                    <li><a  href="#about"  > About </a></li>
                    <li><a  href="#contact"> Calculator  </a></li>
                    <li><a  href="user-login.php"> Login  </a></li>
                </nav>
                
                
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
  
            </div>

            </ul>

        </nav>
        


        <div class="header-content">
            <div class="header-text" >
                <h1>Investo   <span>Capital.</span> </h1>
                <h2>Platform For Investment.</h2>
                <h5>The Investo is a secure platform to make mutual-funds investments through a Systematic Investment Plans.We provide varities of option for user to invest.</h5>

                <a href="user-login.php" class="header-btn">Start Investing</a>
            </div>
            
        </div>

    </section>



    <!-- affilates -->


   

    <h2 class="heading" >About us</h2>
    <section class="about" id="about" >

        <div class="box">
        
            <div class="about-img">
                    <img src="img/bg2.jpeg" >
        
            </div>
            <div class="about-text" >
                <h2>Investo Capital</h2>
                <p>A mutual fund is a reserve that pools the investments of several investors who share common financial goals. The collected money is invested in sectors like the money market and the capital market, such as bank deposits, shares, debentures, and other securities. Share unit holders share the income earned through these investments, and capital appreciation is realized in proportion to the number of units owned.</p>
                
            </div>

        </div>
    
    </section>


    <!-- contact us -->


    <section class="contact" id="contact" >
    <div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto py-5">
			<div class="card">
 	<div class="card-header bg-primary text-white text-center font-weight-bold">
 		SIP Calculator
 	</div>
 	<div class="card-body">
 		<form action="" method="post">
 			<div class="form-group">
 				<input type="number" name="invesmet" placeholder="Monthly Investment" required="" class="form-control" value="<?php if(!empty($invesmet)):echo $invesmet; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="return_rate" placeholder="Expected Return Rate" required="" class="form-control" value="<?php if(!empty($annualRate)):echo $annualRate; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="year" placeholder="Time Period" required="" class="form-control" value="<?php if(!empty($years)):echo $years; endif;?>">
 			</div>
 			<div class="form-group text-center">
 				<input type="submit" name="submit" class="btn btn-success" value="Calculate">
 			</div>
 		</form>
 	</div>
 	<div class="card-footer bg-white">
 		<table class="table table-bordered table-hover">
 			<tr>
 				<th>Invested Amount</th>
 				<th>Rs <?php echo number_format(@$futureValue);?></th>
 			</tr>
 			<tr>
 				<th>Est. Returns</th>
 				<th>Rs <?php echo number_format(@$est_rtn);?></th>
 			</tr>
 			<tr>
 				<th>Total Value</th>
 				<th>Rs <?php echo number_format(@$futureValue);?></th>
 			</tr>
 		</table>
 	</div>
 </div>
		</div>
	</div>
 
</div>


    </section>




    <?php include 'footer.php'; ?>


 <!-- jss -->
<script src="script.js"></script>
    
</body>
</html>