<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
     <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
</head>
<body style="background-color: #1a2228;"><br></br>
     <img src="Logo.png" align="left" style="width:180px;height:180px;margin-left: 18px ;">
     <img src="Garuda.png" align="right" style="width:170px;height:170px; margin-right: 30px ;">
     <center><div style="" ><h1 style="color:lightblue;">DATA PEGAWAI</h1>

     <h1 style="color :red;">BANK <span style="color:white">INDO</span>NESIA</h1></center></div>
     <hr style="size: 500px;"></hr>
     <br></br>
     <h3 style="margin-left: 10%;"><a href="<?php echo base_url('/home/create') ?>" style="padding: 0.5%; background-color:#00FF00; color:black; border-radius: 2px; text-decoration: none;" >Tambah Data</a></h3>
     <center><table align="center" border="2" cellspacing="2" width="80%">
     	<tr style="text-align: center;font-weight: bold; background-color: darkgrey;">
     		<td>No</td>
               <td>Id Pegawai</td>
     		<td>Nama Pegawai</td>
               <td>Jabatan</td>
     		<td>Alamat</td>
     		<td>Jenis Kelamin</td>
     		<td>Agama</td>
     		<td>No.Hp</td>
     		<td>Email</td>
     		<td>Opsi</td>
     	</tr>


          <?php 
               $count = 0;
               foreach ($queryAllPgw as $row) {
                    $count = $count + 1;
           ?>
     	<tr style="background-color: white; text-align: center;">
     		<td><?php echo $count ?></td>
               <td><?php echo $row->idpegawai; ?></td>
     		<td><?php echo $row->nama; ?></td>
               <td><?php echo $row->jabatan; ?></td>
     		<td><?php echo $row->alamat; ?></td>
     		<td><?php echo $row->jeniskelamin; ?></td>
     		<td><?php echo $row->agama; ?></td>
     		<td><?php echo $row->nohp; ?></td>
     		<td><?php echo $row->email; ?></td>
     		<td style="text-align: center;"><a href="<?php echo base_url('/home/update') ?>/<?php echo $row->idpegawai ?>">Update</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->idpegawai ?>">Delete</a></td>
     	</tr>  
          <?php }  ?>

     </table></center>
</body>
</html>