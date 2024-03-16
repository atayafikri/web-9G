<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
    <h1>List Tugas dan Informasi</h1>
	
	<table class="table table-dark table-striped" border="1">
        <tr>
		    <th>No</th>
		    <th>Tugas</th>
		    <th>Hari</th>
		    <th>Mata Pelajaran</th>
		    <th>OPSI</th>
		</tr>
		<?php 
		include "koneksi.php";
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tugas");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
		    <td><?php echo $no++; ?></td>
			<td><?php echo $d['tugas']; ?></td>
			<td><?php echo $d['hari']; ?></td>
			<td><?php echo $d['mata pelajaran']; ?></td>
			<td>
			    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
			    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			</td>
		</tr>
		<?php 
		}
		?>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>