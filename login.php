<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Barlow&family=Lato&display=swap" rel="stylesheet">
			<title> Login Page </title>
		<style>
		form{
			color:black;
			font-family: 'Barlow', sans-serif;
			font-size: 15px;
			}
		#linkbutton{
   			text-decoration: none;
    		background-color: #993800;
  			color: whitesmoke;
    		padding: 3px 6px 3px 6px;
    		border: 1px solid burlywood;
    		border-radius:8px;
			}
		Input{
			Width: 200px;
			height: 35px;
			border: ridge 2px;
			padding: 4px 6px 4px 6px;
			font-family: century;
			margin-top: 5px;
			margin-bottom:5px;
			border-radius: 10px;
			}
		#tabel{
			padding: 4px 6px 4px 6px;
			border-radius: 10px;
			background-color: chocolate;
			margin-top: 100px;
			Margin-left: auto;
			Margin-right: auto;
			margin-bottom: auto;
			}
		.heading{
			Font-family: 'Barlow', sans-serif;
			font-size: 35px;
			color: black;
			background-color: ;
			}
		.id{
			Font-family: ocr a std;
			Font-size: 20px;
			color: #fdc794;
		}
		.link-button{
   			text-decoration: none;
    		background-color: whitesmoke;
    		color: black;
    		padding: 2px 10px 2px 10px;
    		border: 1px solid burlywood;
    		border-radius:8px;
}
		
		</style>
		</head>
				<body>
				<body style="background-image: url(Background.jpg); background-size: cover">
					<center><h1 class="heading"> PIANO CENTER </h1></center>
						<form method="POST" action="aksi_login.php">
							<table id="tabel">
							<tr>
								<td class="id">ID<br><input name="username" type="text" placeholder="Your ID"></td>
							</tr>
							<tr>
								<td class="id">Password<br><input name="password" type="password" placeholder="Password"></td>
							</tr>
							<tr></tr>
							<tr>
								<td><input type="submit" value="LOGIN"></td>
							</tr>
							</table>
						</form>	
						<center><a href="index.php" class="link-button">Register</a></center>	
				</body>
	</html>