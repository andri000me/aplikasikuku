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
		
<form action="<?php echo site_url('welcome/simpan_edit')?>" method="POST">
	<h1 align="center">FORM EDIT DATA</h1>
		<?php foreach ($data_edit as $data_edit): ?>

	<input type="text" name="nim" hidden value="<?php echo $data_edit->nim ?>">
	<label for="basic-url">NIM MAHASISWA</label>
	<div class="input-group mb-3">
	 <input type="text" name="nim" class="form-control" placeholder="NIM MAHASISWA" required value="<?php echo $data_edit->nim?>">
	</div>

	<label for="basic-url">NAMA MAHASISWA</label>
	<div class="input-group mb-3">
	 <input type="text" name="nama" class="form-control" placeholder="NAMA MAHASISWA" required value="<?php echo $data_edit->nama?>">
	</div>

	<label for="basic-url">PROGRAM STUDI</label>
	<div class="input-group mb-3">

		<select name="progdi" class="form-control" required>
			<option value="<?php echo $data_edit->progdi?>"><?php echo $data_edit->progdi?></option>
			<option holder>Pilih Program Studi</option>
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Sistem Informasi">Sistem Informasi</option>
			<option value="Management Informatika">Management Informatika</option>

		</select>
	</div>

	<label for="basic-url">JUDUL SKRIPSI</label>
	<div class="input-group mb-3">
	 <input type="text" name="judul" class="form-control" placeholder="JUDUL" required value="<?php echo $data_edit->judul?>">
	</div>

	<div class="input-group mb-3">
	 <button class="btn btn-primary btn-flat btn-block">SIMPAN</button>
	</div>

	<?php endforeach?>
</form>

<a class="btn btn-info btn-flat btn-block" href="<?php echo site_url('welcome')?>">KEMBALI</a>

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