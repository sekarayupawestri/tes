<html>
	<head>
		<meta charset="UTF-8">
		<title>Web Development Test</title>
		<style>
			body{
				width: 1050px;
				margin: 0 auto;
				padding-top: 50px;
			}
		</style>
	</head>
	<body>
		<?php
		if(isset($_GET)){
			$city=$_GET['city'];
			
			$api_url="http://api.openweathermap.org/data/2.5/weather?q=".$city."&APPID=6d4f64acc7fc507af7c6a877efb1e95f";
			$weather_data=file_get_contents($api_url);
			$json=json_decode($weather_data, TRUE);
			$date=date('d M Y');
			
			$weather_condition=$json['weather'][0]['main'];
			
			echo "The weather of  ".$city."  at  ".$date."  is ".$weather_condition."";
			echo "<br>";
			echo "<a href='index.php'>Back</a>";
		}
		
		?>
	</body>
</html>
