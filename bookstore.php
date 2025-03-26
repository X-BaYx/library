<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- PAGE TITLE-->
<title>elibrary</title>

	<!-- FAVICON ICON -->
	<link rel="icon" type="image/png" href="/img/e logo1.png">
	
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- MetisMenu CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css">



	<!-- Style css -->
    <link href="style.css" rel="stylesheet">


	<style>
		/* Hover effect for book cards */
		.card.contact-bx {
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.card.contact-bx:hover {
  transform: scale(1.05);
}

/* Hidden overlay for hover effect */
.card.contact-bx .hover-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.card.contact-bx:hover .hover-overlay {
  opacity: 1;
}

/* Description text */
.hover-overlay p {
  font-size: 14px;
  text-align: center;
  margin: 10px;
}

/* Borrow button */
.hover-overlay .borrow-btn {
	background: linear-gradient(45deg, #7f70f0, #FFCF50);
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.hover-overlay .borrow-btn:hover {
  background-color: #FFCF50;
}
	</style>
	
</head>
<body>

     <!-- Preloader start-->
	 <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!-- Preloader end-->

    <div id="main-wrapper">

        <!-- Nav header start-->
		<div class="nav-header">
            <a href="dashboard.php" class="brand-logo">
				<img src="public/img/e logo1.png" width="55" height="55" viewbox="0 0 55 55" fill="none" alt="elibrary logo">
				<div class="brand-title">
					<h2 class="" style="color: #040404">elibrary</h2>
					</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
		
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
			</div>
		</div>
						
		<!--Header start-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                               Books Store
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="public/img/profile-logo.png" width="56" alt="">
								</a>
								
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>


       <!--  Sidebar start -->
 <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li>
						<a class="" href="dashboard.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
					   
				<li>
					<a class="" href="bookstore.php" aria-expanded="false">
					<i class="fas fa-book"></i>
						<span class="nav-text">Explore Books</span>
					</a>
				</li> 
				<li>
					<a class="has-arrow " href="javascript:void()" aria-expanded="false">
					<i class="fas fa-database"></i>
						<span class="nav-text">Loan Management</span>
					</a>
					<ul aria-expanded="false">
						<li><a href="borrowed-db.php">Borrowed Books</a></li>
						<li><a href="return.php">Returned Books</a></li>
						
					</ul>
				</li> 
					
                    <li>
						<a class="" href="logout.php" aria-expanded="false">
						<i class="fa-solid fa-arrow-right-from-bracket"></i>
							<span class="nav-text">Logout</span>
						</a>
                    </li>   
                </ul>
				
				
			</div>
        </div>
	<!-- Sidebar end -->
		
		<!--**********************************
            Content body start
        ***********************************-->

		<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="input-group contacts-search mb-4">
						<!-- Dropdown for Filter Type -->
						<select class="form-select" id="filterType" style="max-width: 150px;">
							<option value="title">Title</option>
							<option value="author">Author</option>
							<option value="genre">Genre</option>
						</select>
						<!-- Search Input -->
						<input type="text" class="form-control" id="searchInput" placeholder="Search here..." style="border-bottom: 1px solid #FFCF50;;">
						<!-- Search Button -->
						<span class="input-group-text">
							<a href="javascript:void(0)" id="searchButton">
								<i class="flaticon-381-search-2"></i>
							</a>
						</span>
					</div>
				</div>
				</div>

				<!-- displaying of books -->
				<!-- book1 -->
				<div class="row">
					     <?php
require('db.php');
$view = "SELECT * FROM books";
$result = $conn->query($view);
if($result->num_rows > 0){
while($row = $result->fetch_array()){?>
					<div class="col-xl-2 col-xxl-3 col-lg-3 col-md-4 col-sm-6 items">
						<div class="card contact-bx item-content">
						  <div class="card-body user-profile">
							<div class="new-arrival-product">
							  <div class="new-arrivals-img-contnent">
								<img class="img-fluid" src="admin/<?php echo $row['bookfile']; ?>" alt="Book Cover">
							  </div>
							  <div class="new-arrival-content text-center mt-3">
								<h4><a><?php echo $row['title']; ?></a></h4>
								<p class="author" style="display:">Author Name</p>
								<p class="genre" style="display: none;">Fiction</p>
							  </div>
							</div>
							<!-- Hover Overlay -->
							<div class="hover-overlay">
							 
							  <a class="borrow-btn" href="book-detail.php?id=<?php echo md5($row['id']);?>">Borrow Book</a>
							</div>
						  </div>
						</div>
					</div>

									   <?php
					
							}

						}else{
							echo " <div class='alert alert-success alert-dismissible'>
	       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                     
             No  record found
                    </div>";
						}
					
				$conn->close();
				?>

				

			
				</div>
	
			</div>

            </div>
        </div>

		

	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!-- Scripts -->
	<script src="https://kit.fontawesome.com/ff488817c2.js" crossorigin="anonymous"></script>
	

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

	<!-- MetisMenu JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Required vendors -->
    <script src="public/vendor/global/global.min.js"></script>

	<!-- <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script> -->
	
	<!-- Apex Chart -->
	<!-- Chart piety plugin files -->
	<!-- Dashboard 1 -->
	
    <script src="public/js/custom.min.js"></script>
	<script src="public/js/dlabnav-init.js"></script>
	<script src="public/js/demo.js"></script>
 
	<script>
		// Initialize metismenu
		document.addEventListener('DOMContentLoaded', function () {
		  $('#menu').metisMenu();
		});

//hover effect on books



	  </script>

</body>
</html>