<?php
session_start();

$_SESSION['acct'] = 'none';
if (isset($_POST['btnLogin'])){
   $acct = trim($_POST['acct']);
   if ($acct === 'ewanlp'){
      $_SESSION['acct'] = $acct;
      header('Location: ./home.php');
   }else if ($acct === 'admin'){
      $_SESSION['acct'] = $acct;
      header('Location: ./adminHome.php');
   }
}


?>

<!DOCTYPE html>
<html lang="en-US" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="format-detection" content="telephone=no">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/mobile.css" media="only screen and (max-device-width: 480px), (max-width:480px)" />
<link rel="stylesheet" type="text/css" href="css/mid.css" media="only screen and (max-device-width: 768px) and (min-device-width:481px), (min-width:481px) and (max-width:768px)" />
<link rel="stylesheet" type="text/css" href="css/max.css" media="only screen and (min-device-width: 769px) and (min-width:769px)" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Green@CSU</title>

</head>

<body>





<div id="greenstripe">

	<div id="logocontainer">

		<div style="height:20px;">
        </div>

		<a href="http://colostate.edu/">
        <span class="NotToShow">CSU</span>
			<div id="csulogo">
			</div>
		</a>
		<div id="collegelogo">
			<a href="http://www.natsci.colostate.edu/">

            <span class="rwd-line">Sustainability|CSU</span>
			</a>
		</div>

	</div>

	<div id="greenstripe2">
    	<div id="deptcontainer">
        <div style="height:8px;">
        </div>
        	<div id="deptlogo">
            <a href="" style="color: white;">Green@CSU</a>
            </div>
        </div>
	</div>

</div>

<div style="height:20px;">
</div>

<div class="container text-center">
	<div class="row">
		<div class="col-3">

		</div>
		<div class="col">
			<div class="card text-center">
			  <div class="card-header">
			    Welcome
			  </div>
			  <div class="card-body">
			    <h5 class="card-title">Log-In</h5>
					<div class="">
					  <form role="form" method="POST">
						<div class="form-group">
						  <input type="text" class="form-control" id="acct" placeholder="eID" name="acct">
						</div>
						<div class="form-group">
						  <input type="password" class="form-control" id="psw" placeholder="eID Pass" name="txtpass">
						</div>
						  <button class="btn btn-block" type="submit" name="btnLogin" style="color:white; background: #286739;">Login</button>
					  </form>
					</div>
			  </div>
			  <div class="card-footer text-muted">

			  </div>
			</div>
		</div>
		<div class="col-3">

		</div>
	</div>
</div>




<div id="textarea">
</div>


                    <!-- Gold: rgb(200, 195, 114)     |     Green: #286739; -->



<script>
window.onscroll = function() {myFunction()};

var cssmenu = document.getElementById("cssmenu");
var sticky = cssmenu.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    cssmenu.classList.add("sticky")
  } else {
    cssmenu.classList.remove("sticky");
  }
}
</script>



<script>
function bars(x) {
    x.classList.toggle("change");
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
