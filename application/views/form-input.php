<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa Ilmu Komputer</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #FCF5C7;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		font-family: "Comic Sans MS", cursive, sans-serif;
	}

	a {
		color: #003399;
		font-family: "Comic Sans MS", cursive, sans-serif;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		font-family: "Comic Sans MS", cursive, sans-serif;
		background-color: #33261D;
		border-bottom: 30px solid #FFC09F;
		text-align: left;
		font-size: 7px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 30px 0px 30px 25px;
	}

	code {
		font-family: "Comic Sans MS", cursive, sans-serif;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	table {
    border-collapse: collapse;
}

table, th, td {
	font-family: "Comic Sans MS", cursive, sans-serif;
    border: 1px solid black;
    text-align: center;
    font-family: "Comic Sans MS", cursive, sans-serif;
     padding: 7px;
}
table {
    width: 100%;
}

th {
    height: 50px;
}

a:link, a:visited {
	font-family: "Comic Sans MS", cursive, sans-serif;
    background-color: #33261D;
    color: white;
    padding: 7px 18px;
    font-size: 12px;
    text-align: left;
    text-decoration: none;
    display: inline-block;

}
form{
	font-family: "Comic Sans MS", cursive, sans-serif;
	text-align: center;
	font-size: 18px;
	color: brown;
}

a:hover, a:active {
    background-color: #513D2E;
}
#footer{
	margin-top: 30px;
	padding: : 10px;
	color: #fff;
	background: #33261D;
	text-align: center;
}
#footer p{
	margin-bottom: 0px;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #33261D;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 5px 2px;
    cursor: pointer;
    width: 14%
}

input[type=text] {
    border: none;
    border-bottom: 2px solid brown;
    background-color: transparent; 
}
	</style>
</head>
<body>

<div id="container">
	<h1 style="font-size:2.5vw">Form Input</h1>
<a href="<?php echo site_url('welcome/index') ?>">Kembali</a><br><br>
	<div id="body">
		<form action="<?php echo site_url('welcome/insert') ?>" method="POST">
			<p style="text-align: center;">Nama Lengkap</p>
			<input type="text" name="nama" /><br>
			<p style="text-align: center;">NIM</p>
			<input type="text" name="nim" /><br>
			<p style="text-align: center;">Fakultas</p>
			<input type="text" name="fakultas" /><br>
			<p style="text-align: center;">Jurusan</p>
			<input type="text" name="jurusan" /><br><br>
			<input type="submit" name="simpan" value="Simpan" /><br>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
<footer id="footer" class="text text-center">
	<p><small>Copyright &copy;2018, Muhammad ALif Nurrofli Lubis</small></p>
</footer>
</body>
</html>