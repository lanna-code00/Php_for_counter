<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="interface.css">
</head>
<style>

.sidebar {
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;
	background-color: #fff;
	overflow-x: hidden;
	transition: 0.5s ease;
	padding-top: 60px;
  }
  
  .sidebar a {
   /* padding: 8px 8px 8px 32px; */
   padding: 40px;
	text-decoration: none;
	font-size: 25px;
	color: #818181;
	display: block;
	transition: 0.8s;
  }
  
  .sidebar a:hover {
	color: #02015C ;
  }
  
  .sidebar .closebtn {
	position: absolute;
	top: 0;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
  }
  
  .openbtn {
	font-size: 20px;
	cursor: pointer;
	color: white;
	padding: 10px 15px;
	border: none;
  }
  
  .openbtn:hover {
	background-color: #444;
  }
  
  #main {
	transition: margin-left .5s;
	padding: 16px;
  }
  
  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
  @media screen and (max-height: 450px) {
	.sidebar {padding-top: 15px;}
	.sidebar a {font-size: 18px;}
  }
  
</style>
<body>

<div id="mySidebar" class="sidebar">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a> -->
  <a href="homet.php">HOME</a>
  <a href="about.php">ABOUT</a>
  <a href="hist.php" onclick="closeNav()">HISTORY</a>
  <a href="help.php" onclick="closeNav()">HELP</a>
</div>

<div id="main">
	<button class="openbtn4 btn btn-primary" style="background-color: #02015C !important;" onclick="openNav()">☰</button>  
</div>

</body>
<script src="jquery/jquery.min.js"></script>
  <script src="interface.js"></script>
  <script src="js/bootstrap.js"></script>

  <script>
     function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

  </script>
</html>






































































<!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow" style="background: #02015C !important;">  -->
   <!-- <a class="navbar-brand"><img src="../../assets/img/logo1.png" alt=""></a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"> 
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="margin-right: 590px;">
       <li class="nav-item"><a class="nav-link" style="margin: 20px;" href="homet.php">HOME</a></li>
       <li class="nav-item"><a class="nav-link" style="margin: 20px;" href="about.php">ABOUT</a></li>
       <li class="nav-item"><a class="nav-link" style="margin: 20px;" href="help.php">HELP</a></li>
       <li class="nav-item"><a class="nav-link" style="margin: 20px;" href="hist.php">HISTORY</a></li>
       <li class="nav-item"><a class="nav-link" style="margin: 20px;">EXIT</a></li>

    </ul>
   
   </div>
 </nav>  -->