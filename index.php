<!DOCTYPE HTML>
<html>

	<head>
		<title>GitHub Status for Status Board</title>
		
		<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
	</head>

		<script type="text/javascript">

			function getStatus() {
				$.getJSON('https://status.github.com/api/status.json?callback=?', function(data) {
					var status = data.status;
					$('#status').addClass(status);
					$('#status').html(status);
				});
			}

			var int=self.setInterval(function(){getStatus()},900000);

		</script>
	
	<body onload="getStatus()">
	
		<div id="status-container">
			<h1>Status: <span id="status"></span></h1>
		</div>

	</body>
	
</html>