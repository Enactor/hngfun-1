<!DOCTYPE html>
<html>
<head>
	<title>coinman</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/table-style.css">
 	<link rel="stylesheet" type="text/css" href="js/scripts.js">
</head>
<body>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="results"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		// when docs is ready load data
		$("#results").load("class/load-data.php");
		// refresh data every 1 mins
		var refreshData = function (){
			$("#results").load("class/load-data.php");
		}
		// onload fresh data
		window.setInterval(refreshData, 1000 * 60);
	</script>
</body>
</html>




