<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<title>Tampilkan Data</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Web Service</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
		</br>
			<div class="card">
				<div class="card-header bg-primary">
					<h3 class="card-title text-light" align="center">TAMPILAN DATA JUDUL SKRIPSI</h3>
				</div>
				<div class="card-body">

				<?php 
				
				if (!$this->session->flashdata('Info')==''){
					echo $this->session->flashdata('Info');
				}
				?>



					<a class="btn btn-info btn-flat" href="<?php echo site_url('welcome/tambah')?>">TAMBAH DATA</a>
					<br><br>


	<table class="table table-striped table-bordered" id="example">
		<thead>
			<tr align="center">
				<th>Nim</th>
				<th>Nama</th>
				<th>Progdi</th>
				<th>Judul</th>
				<th colspan="2">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($skripsi as $tampil) :?> 
			<tr>
				<td><?php echo $tampil->nim?></td>
				<td><?php echo $tampil->nama?></td>
				<td><?php echo $tampil->progdi?></td>
				<td><?php echo $tampil->judul?></td>
				<td><a class="btn btn-info btn-sm" href="<?php echo site_url('welcome/edit/'.$tampil->nim.'')?>">Edit Data</a></td>
				<td><a class="btn btn-danger btn-sm" href="<?php echo site_url('welcome/hapus/'.$tampil->nim.'')?>">Hapus Data</a></td>
			</tr>
		<?php endforeach?>
		</tbody>
		<tfoot>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
		</tfoot>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
<footer>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</footer>
</html>