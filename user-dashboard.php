

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User</title>

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- bootstrap 5 CDN-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="assets/css/user-style.scss">
</head>
<body>
	<div class="container">
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="admin.php">Admin</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" 
		         id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link" 
		             aria-current="page" 
		             href="index.php">Store</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="add-book.php">Add Book</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="add-category.php">Add Category</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="add-author.php">Add Author</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" 
		             href="logout.php">Logout</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav> -->

		<body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="#">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
						
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">User Dashboard</span>
                    </a>

                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                        <i class='bx bxs-user'></i>
                            <span class="nav__name">My Profile</span>
                        </a>

                        <a href="user-plan.php" class="nav__link">
						<i class='bx bx-cart-add' ></i>
                            <span class="nav__name">New SIPs</span>
                        </a>
                        
                        <a href="user-kyc.php" class="nav__link">
							<i class='bx bx-clipboard'></i>
                            <span class="nav__name">Update KYC </span>
                        </a>
                
                        <a href="my-sip.php" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">MY SIPs</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Analytics</span>
                        </a>

						<a href="index.php" class="nav__link">
						<i class='bx bx-home'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </div>
                </div>

                <a href="user-logout.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>


        <div class="dashboard--content-item">

        <div class="dashboard--width">
            <div class="dashboard-card h-100">

                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="https://product.geniusocean.com/genius-hyip-light/assets/images/deposit.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Deposit</h6>
                        <div class="balance">Rs 80.73</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dashboard--width">
            <div class="dashboard-card h-100">

                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="https://product.geniusocean.com/genius-hyip-light/assets/images/investing.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Invest</h6>
                        <div class="balance">Rs 84.29</div>
                    </div>
                </div>
            </div>
        </div>
                    
              
        <div class="dashboard--width">
            <div class="dashboard-card h-100">

                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="https://product.geniusocean.com/genius-hyip-light/assets/images/money.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Interest Balance</h6>
                        <div class="balance">Rs 3.77</div>
                    </div>
                </div>
            </div>
        </div>

      

      

        <div class="dashboard--width">
            <div class="dashboard-card h-100">

                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="https://product.geniusocean.com/genius-hyip-light/assets/images/cash-withdrawal.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Payout</h6>
                        <div class="balance">Rs 0</div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="dashboard--width">
            <div class="dashboard-card h-100">

                <div class="dashboard-card__header">
                    <div class="dashboard-card__header__icon">
                        <img src="https://product.geniusocean.com/genius-hyip-light/assets/images/transaction.png" alt="wallet">
                    </div>
                    <div class="dashboard-card__header__cont">
                        <h6 class="name">Total Transaction</h6>
                        <div class="balance">Rs 95.03</div>
                    </div>
                </div>
            </div>
        </div>

        
  </>
</div>





	
       <script src="assets/js/main.js"></script>

</body>
</html>

