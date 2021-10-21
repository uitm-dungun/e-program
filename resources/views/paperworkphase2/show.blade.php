<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<head>
	<style>
		* {
		  box-sizing: border-box;
		}

		body {
		  font-family: Arial, Helvetica, sans-serif;
		  margin:0;

		}
		
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 10;
		  overflow: hidden;
		  background-color: #D3E2DE;
		}

		li {
		  float: left;
		}
		
		li a:hover {
			color: gray;
		}

		li a, .dropbtn {
		  display: inline-block;
		  color: black;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover, .dropdown:hover .dropbtn {
		  background-color: 52b2bf;
		}

		li.dropdown {
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  text-align: left;
		}

		.dropdown-content a:hover {background-color: #52b2bf;}

		.dropdown:hover .dropdown-content {
		  display: block;
		}

		.active {
		  background-color: #04AA6D;
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
</head>

<body>
	<ul>
	  <li><h3>E-PAPERWORK/KERTAS KERJA</h3></li>
	  <li><a href="#utama">Utama</a></li>
	  <li><a href="#contact">Senarai</a></li>
	  <li><a href="#about">Tiket</a></li>
	  <li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Logged in sebagai PEGAWAI</a>
		<div class="dropdown-content">
		  <a href="#">KERANI</a>
		  <a href="#">PEGAWAI</a>
		</div>
	  </li>
	</ul>
	<br><br>
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
</x-app-layout>