<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <!--Fonts Link-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">






  <!--Fonts Link ends-->
  <link rel="stylesheet" href="css/info.css">

  <title>Description</title>
</head>

<body>

  <!--Navbar Starting-->

  <div class="container">
    <nav class="navbar nav-pills fixed-top navbar-expand-lg bg-white">
      <a class="navbar-brand" href="index.php">Room Finder</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item current_page_item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listings.php">Listings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
          <a href="User/postprop.php"><button type="button" class="btn btn-success">Post Property Free</button></a>
          <a href="login.php"><button type="button" class="btn btn-outline-primary">Login</button></a>

        </ul>
      </div>
    </nav>
    <?php
                             session_start();
                             $dbcon = mysqli_connect("localhost","root","","roomkhoji");
                             $id=$_GET['id'];
                             

                             $selectquery ="select * from radioin WHERE id='$id'";
                             $query =mysqli_query($dbcon,$selectquery);
                            // $result = mysqli_fetch_array($query);

                             while($result = mysqli_fetch_array($query)){
                             	?>

   
  </div>
  <section class="py-5 mb-5 mt-5" style="background-color:white;">
    <div class="container">
       <div class="row align-items-center text-center text-md-left">
          <div class="col-md-12">
             <h2 class="text-black my-2 "> House in Samakhusi</h2>
          </div>
         
       </div>
    </div>
 </section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img_5terre_wide.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img_lights_wide.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img_mountains_wide.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="card mt-3">
    <div class="card-body">
      <h6>Posted by :</h6>
      <div class="chip">
        <img src="img_avatar.png" alt="Person" width="96" height="96">
        Bishal Singh
      </div>
    </div>
  </div>
  <br>
  <div class="card mt-3">
    <div class="card-body">
      <h3>Family Apartment</h3><br>
      
      
      <p>3000 sq-ft., 3 Bedroom, Semi-furnished, Luxurious, South facing Apartment for Rent in Rangs Malancha, Melbourne.</p>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <h3>Price Details:</h3><br>
      <p><b>Rent/Month:</b> Rs.35000</p>
      <p><b>Flat Release Policy:</b>  3 months earlier notice required</p>

    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-body">
      <h3>Property Details:</h3><br>
      <p><b>Address & Area:</b>Dhanmondi Residential Area,Shantinagar</p>
      <p><b>City:</b> Kathmandu</p>
      <p><b>Ward No.:</b> 5</p>
      <p><b>Total Area:</b> 3 Aana</p>
      <p><b>Built Area:</b> 3 Aana</p>
      <p><b>Built Year:</b> 2046 B.S.</p>
      <p><b>Floor:</b> 5</p>
  </div>
  </div>
  <div class="card">
    <div class=" card-body">
      <h3>Apartment Overview:</h3><br>
      <div class="column">
      
      <div class="alert alert-dark text-center w-50 ml-5" role="alert">
        Kitchen : 1
      </div>
      <div class="alert alert-dark text-center  w-50 ml-5  " role="alert">
        Bedroom : 2
      </div>
      <div class="alert alert-dark text-center  w-50  ml-5 " role="alert">
        Bathroom : 2
      </div>
      <div class="alert alert-dark  w-50 text-center ml-5 " role="alert">
        Parking : 4
      </div>
      <div class="alert alert-dark w-50 text-center  ml-5 " role="alert">
        Living Room: 1
      </div>
      <div class="alert alert-dark w-50 text-center ml-5 " role="alert">
        Floors: 5
      </div>
      </div>
      
    </div>
  </div>
  <?php
                             }


                             ?>
  
  <div class="col-md-9">
    <form id="contact-form" method="post" action="#">
			<div class="contact-form ml-5"><br>
        <h2>Contact the owner</h2><br>
        
				<div class="form-group">
				  <label class="control-label col-sm-2 pt-1" for="fname">Full Name:</label>
				  <div class="col-sm-9">          
					<input type="text" class="form-control" id="fname" placeholder="Your Name" name="name" required>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-9">
					<input type="email" class="form-control" id="email" placeholder="Your Email" name="email"  required>
				  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="Phone">Phone:</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="Phone" placeholder="Enter number" name="phone"  required>
                    </div>
                  </div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment" >Comment:</label>
				  <div class="col-sm-9">
					<textarea name="msg" class="form-control" rows="5" id="comment" placeholder="Message" required></textarea>
				  </div>
				 


        </div>
        </div>
      </form>
      <button type="button" class="btn btn-outline-primary btn-lg" style="margin-left: 35%;">Send</button>
		</div>
	</div>
</div>

 

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
