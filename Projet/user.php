<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>zzAgenda</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		 <div class="navbar-header">
		   <a class="navbar-brand" href="http://fc.isima.fr/~raligorio/DevWeb/Projet/" style="font-size: 30px; margin-bottom:3px;"><span class="glyphicon glyphicon-envelope" style="color: white;"></span>  zzAgenda</a>
		 </div>
		 <div class="collapse navbar-collapse" id="myNavbar">
		 	<ul class="nav navbar-nav navbar-right">
		 		<li><p style="font-size:20px; margin-top:15px; margin-right:15px;">Logged as <?php echo $_SESSION['username'] ?></p></li>
		 		<li><a href="http://fc.isima.fr/~raligorio/DevWeb/Projet/" style="font-size:20px;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		     <li class="dropdown" style="margin-top:8px; margin-right:15px;">
		        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		        Select Language
						<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		           <li><a href="en">English</a></li>
		           <li><a href="fr">Français</a></li>
		        </ul>
		        </li>
		   </ul>
	  </div>
	</nav>

	<div class="container-fluid text-center" style="margin-top:40px;">    
	  <div class="row content">
		 <div class="col-sm-2 sidenav">
		 </div>
		 <div class="col-sm-8 text-left"> 
		   <button class="btn btn-primary" type="button">Ajouter un Evènement</button>
		   <br>
		   <br>
		   <h1>Your Events</h1>
		   <br>
		   <h2>10h30 | Conférence 1</h2>
		   <h4><span class="glyphicon glyphicon-bullhorn"></span> Conférence sur le jambon du WEI</h4>
		   <h4><span class="glyphicon glyphicon-map-marker"></span> Amphi Garcia, ISIMA, Campus des Cézeaux</h4>
		   <h4><span class="glyphicon glyphicon-user"></span> Mr Mousse</h4>
		   <h4><span class="glyphicon glyphicon-time"></span> Vendredi 29 Septembre à 10h30</h4>
		 </div>
	  </div>
	</div>

	<footer class="footer">
	<div class="text-center">
	  <p>© Copyright Raphaël Ligorio</p>
	</div>
	</footer>

	</body>
</html>

