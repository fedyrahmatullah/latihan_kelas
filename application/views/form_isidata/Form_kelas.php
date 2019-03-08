<html>
<head>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css'); ?>">
</head>
<!-- Default form contact -->
<body>
	<form method="POST" action="<?= site_url('Form_kelas/insertData'); ?>" class="text-center border border-light p-5">

			<p class="h4 mb-4">Form data diri kalean bahaha</p>
			<?php if($this->session->flashdata('kunci')): ?>
			<div class="alert alert-<?=$this->session->flashdata('kunci');?>" role="alert">
				<?= $this->session->flashdata('pesan'); ?>
			</div>
			<?php endif; ?>
			<!-- username -->
			<input type="text" name="username" class="form-control mb-4" placeholder="ISI Username kamu anjeng">

			<!-- password -->
			<input type="text" name="password" class="form-control mb-4" placeholder="ISI Password kamu kucing">

			<!-- Name -->
			<input type="text" name="nama" class="form-control mb-4" placeholder="Name">

			<!-- Email -->
			<input type="email" name="email" class="form-control mb-4" placeholder="E-mail">
			
			<!-- hobi -->
			<input type="text" name="hobi" class="form-control mb-4" placeholder="Hobimu">

			<!-- alamat -->
			<div class="form-group">
					<textarea class="form-control rounded-0" name="alamat" rows="3" placeholder="Alamat loe"></textarea>
			</div>
			
			<!-- Message -->
			<div class="form-group">
					<textarea class="form-control rounded-0" name="deskripsi" rows="3" placeholder="Deskripsikan dirimu"></textarea>
			</div>



			<!-- Send button -->
			<button class="btn btn-info btn-block" type="submit">kirim bosku</button>

	</form>
</body>
</html>
<!-- Default form contact -->