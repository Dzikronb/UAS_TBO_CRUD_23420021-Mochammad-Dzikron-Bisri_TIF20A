<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create</title>
</head>
<body style="background-color: #1a2228;"><center>
	<div style="width: 315px; height: 360px;border: 15px solid grey; padding: 50px; margin-top: 90px;">
	<h3 style="color:white;">Create New Data</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<br></br>
	<table cellspacing="9">
		<tr>
			<td style="color:white;">ID Pegawai</td>
			<td>:</td>
			<td><input type="text" name="idpegawai"></td>
		</tr>
		<tr>
			<td style="color:white;">Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		<tr>
			<td style="color:white;" style="height: 40px;">Jabatan</td>
			<td>:</td>
			<td>
				<select name="jabatan">
				<option value="pilih">-Pilihan-</option>
				<option value="Teller">Teller</option>
				<option value="Customer Service">Customer Service</option>
				<option value="Staff Back Office">Staff Back Office</option>
				<option value="Account Officer">Account Officer</option>
				<option value="Sales Officer">Sales Officer</option>
				<option value="Founding Officer">Founding Officer</option>
				<option value="Auditor">Auditor</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="color:white;">Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
		    <td style="color:white;" style="height: 40px;">Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jeniskelamin">
				<option value="pilih">-Pilihan-</option>
				<option value="laki-laki">Laki-Laki</option>
				<option value="perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="color:white;" style="height: 40px;">Agama</td>
			<td>:</td>
			<td>
				<select name="agama">
				<option value="pilih">-Pilihan-</option>
				<option value="Islam">Islam</option>
				<option value="Protestan">Protestan</option>
				<option value="Katolik">Katolik</option>
				<option value="Hindu">Hindu</option>
				<option value="Buddha">Buddha</option>
				<option value="Khonghucu">Khonghucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="color:white;">No.Hp</td>
			<td>:</td>
			<td><input type="text" name="nohp"></td>
		</tr>
		<tr>
			<td style="color:white;">Email</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
	</table>
    
	<button style=" margin-left: 100px; background-color: #FF2400;"><a href="<?php echo base_url('/home') ?>" style="border-radius: 2px; text-decoration: none; color: black;" >Back</a></button>
	<button type="submit" style=" margin-right: 60px; background-color: #00FF00;"><a style="border-radius: 2px; text-decoration: none; color: black;" >Submit</a></button></div></center></form>
</body>
</html>