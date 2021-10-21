<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
	  box-sizing: border-box;
	}

	body {
	  font-family: Arial, Helvetica, sans-serif;
	}
	form > label
	{
	  float: left;
	  clear: right;
	}

	form > input
	{
	  float: right;
	}
	@media (max-width: 600px) {
	  nav, article {
		width: 100%;
		height: auto;
	  }
	}
	</style>
</head>
<body>
    <form action="/action_page.php">
	<div>
	<p>Kelulusan Kertas Kerja</p>
	</div>

	<label for="idmeeting"></label>
    <input type="text" id="idmeeting" name="idmeeting" value="#"><br></br>
	<label for="title">Tajuk:</label>
    <input type="text" id="title" name="title"><br></br>
	<label for="date">Tarikh:</label>
    <input type="date" id="datefrom" name="datefrom">- 
    <input type="date" id="dateuntil" name="dateuntil"><br></br>

	<label for="meetingdate">Tarikh Meeting:</label>
	<p align="right">Pilih Tarikh meeting</p>
	<input type="date" id="meetingdate" name="meetingdate"><br>
	</form>
	<br>
	<div align=left>
	<input type="file" id="myFile" name="file"><h5>Muat Turun Dokumen</h5>
	</div>
	<div align=right>
    <input type="button" value="Lulus" align="right">    
    <input type="button" value="Batal" align="right"> 
	
	//<a href="#" class ="btn btn-primary">Click me</a>  
	</div>

</body>
</html>

//cth
<!DOCTYPE html>
<html lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
	  box-sizing: border-box;
	}

	body {
	  font-family: Arial, Helvetica, sans-serif;
	}
	input[type=text], select {
	  width: 100%;
	  padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	}
	.button {
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	}
		
	.lulus {
	  background-color: #52b2bf; 
	  color: white; 
	  border: 2px solid #52b2bf;
	}

	.lulus:hover {
	  background-color: #7ef9ff;
	  color: white;
	}

	.batal {
	  background-color: white; 
	  color: red; 
	  border: 2px solid red;
	}

	.batal:hover {
	  background-color: red;
	  color: white;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	div {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
</style>
<body>

    <form action="/action_page.php">
	<div>
		<h3 style="text-align:left;">Kelulusan Kertas Kerja</h3>
		
		<label for="idmeeting"></label>
		<input type="text" id="idmeeting" name="idmeeting" value="#4012"><br></br>
		
		<label for="title">Tajuk:</label>
		<input type="text" id="title" name="title"><br></br>
		
		<label for="date">Tarikh:</label>
		<input type="date" id="datefrom" name="datefrom"> - 
		<input type="date" id="dateuntil" name="dateuntil"><br></br>

		<label for="meetingdate">Tarikh Meeting:</label>
		<p align="right">Pilih Tarikh meeting</p>
		<input type="date" id="meetingdate" name="meetingdate" align="right"><br>

		<div align=left>
		<input type="file" id="myFile" name="file"><h5>Muat Turun Dokumen</h5>
		<div align=right>
		<input type="button" value="Lulus" align="right">    
		<input type="button" value="Batal" align="right"> 
		
		<button class="button lulus">Lulus</button>
		<button class="button batal">Batal</button>

		/*<a href="#" class ="btn btn-primary">Click me</a>*/  
		</form>
		</div>
	</div>
	

</body>
</html>