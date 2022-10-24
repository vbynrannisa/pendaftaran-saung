<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-th-list"></i>&nbsp;&nbsp;<b>SISWA SAUNG IT BUMIAYU</b></h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div><br>

			<?php if (session()->getFlashdata('Pesan')) : ?>
				<div class="alert alert-success" role="alert">
					<?= session()->getFlashdata('Pesan'); ?>
				</div>
			<?php endif; ?>

			<nav class="navbar navbar-light bg-info justify-content-between">
				<form action="" method="POST" class="form-inline" style="margin-top: 10px; margin-bottom: 10px;">
					<form class=" form-inline">
						<div class="input-group">
							<div class="btn-group mr-2" role="group" aria-label="cari">
								<input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Siswa..." aria-label="Search" name="keyword">
							</div>
							<div class="btn-group" role="group" aria-label="tombolCari">
								<button class="btn btn-primary" type="submit" name="submit">Cari</button>
							</div>
						</div>
					</form>
				</form>
				<form class="form-inline">
					<?= $pager->links('saung', 'saung_pagination') ?>
				</form>
			</nav>

			<div style="overflow-x:auto;">
				<table id="table_id" class="table table-striped table-dark mydatatable" width="100%">
					<thead>
						<tr>
							<th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Asal Instansi/Sekolah</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1 + (5 * ($curpage - 1)); ?>
						<?php foreach ($saung as $dt) : ?>
							<tr>
							<th scope="row"><?= $i++; ?></th>
                                <td><?= $dt['nama']; ?></td>
                                <td><?= $dt['jenis_kelamin']; ?></td>
                                <td><?= $dt['jurusan']; ?></td>
                                <td><?= $dt['asal_sekolah']; ?></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?= $this->endSection(); ?>