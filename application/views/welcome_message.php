<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Mahasiswa IPB</title>

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
		padding: 50px 75px 50px 75px;
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
    padding: 10px 18px;
    font-size: 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;

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
	</style>
</head>
<body>

<div id="container">
	<h1 style="font-size:4vw">Data <br><br><br> Mahasiswa <br><br><br> Institut Pertanian Bogor</h1>

	<div id="body">
		<a style="font-size:20px" href="<?php echo site_url('welcome/form_input') ?>">Tambah Data</a><br><br>
		<table border="1">
			<tr style="background-color:#FFC09F;">
				<td>No</td>
				<td>Nama Lengkap</td>
				<td>NIM</td>
				<td>Fakultas</td>
				<td>Jurusan</td>
				<td>Opsi</td>
			</tr>
			<?php 
			$no = 1;
			foreach ($hasil as $r ){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['nama_lengkap'] ?></td>
				<td><?php echo $r['nim'] ?></td>
				<td><?php echo $r['fakultas'] ?></td>
				<td><?php echo $r['jurusan'] ?></td>
				<td>
					<a href="<?php echo site_url('welcome/form_edit/'.$r['kode_user']) ?>">Edit </a>	 
					<a href="<?php echo site_url('welcome/delete/'.$r['kode_user']) ?>" onclick="return confirm('Yakin ingin hapus data?')">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
<footer id="footer" class="text text-center">
	<p><small>Copyright &copy;2018, Muhammad ALif Nurrofli Lubis</small></p>
</footer>
</body>
</html>