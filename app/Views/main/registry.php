<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-user-edit"></i><b>FORMULIR PENDAFTARAN<br>SISWA SAUNG INFORMATION TECHNOLOGY</b></h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div>

			<?= view('Myth\Auth\Views\_message_block') ?>
	
			<form action="<?= base_url('saung/save'); ?>" method="POST">
				<?= csrf_field(); ?>
				<div class="form-group row gap-0">

					<label for="periode_masuk" class="col-md-2 col-form-label">Periode Masuk</label>
					<div class="col-md-10">
						<input type="date" class="form-control" name="periode_masuk" id="periode_masuk" value="<?= old('periode_masuk') ?>" required placeholder="Periode Masuk">
					</div>
				</div>

				<div class="form-group row">
					<label for="periode_lulus" class="col-md-2 col-form-label">Periode lulus</label>
					<div class="col-md-10">
						<input type="date" class="form-control" name="periode_lulus" id="periode_lulus" value="<?= old('periode_lulus') ?>" required placeholder="Periode Lulus">
					</div>
				</div>

				<div class="form-group row">
					<label for="periode_masuk" class="col-md-2 col-form-label">Jenis Kelas</label>
					<div class="col-md-10">

						<select name="kelas" class="form-control" value="<?= old('kelas') ?>">
							<option value="">--Kelas--</option>
							<option value="pagi">Pagi</option>
							<option value="sore">Sore</option>
							<option value="kursus">Kursus</option>
						</select>

					</div>
				</div>

				<div class="form-group row">
					<label for="nama" class="col-md-2 col-form-label">Nama Lengkap</label>
					<div class="col-md-10">
						<input type="name" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= old('nama') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="tempat_lahir" class="col-md-2 col-form-label">Tempat Lahir</label>
					<div class="col-md-10">
						<input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= old('tempat_lahir') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="tanggal_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
					<div class="col-md-10">
						<input type="date" class="form-control" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" required></i>
					</div>
				</div>

				<div class="form-group row">
					<label for="alamat" class="col-md-2 col-form-label">Alamat Lengkap</label>
					<div class="col-md-10">
						<input class="form-control" type="name" placeholder="Alamat" name="alamat" value="<?= old('alamat') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
					<div class="col-md-10">
						<select name="jenis_kelamin" class="form-control" value="<?= old('jenis_kelamin') ?>">
							<option value="">--Pilih Jenis Kelamin--</option>
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="agama" class="col-md-2 col-form-label">Agama</label>
					<div class="col-md-10">
						<select name="agama" class="form-control" value="<?= old('agama') ?>">
							<option value="">--Pilih agama--</option>
							<option value="islam">Islam</option>
							<option value="kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label for="nik" class="col-md-2 col-form-label">NIK</label>
					<div class="col-md-10">
						<input class="form-control" type="number" placeholder="NIK" name="nik" value="<?= old('nik') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="nisn" class="col-md-2 col-form-label">NISN</label>
					<div class="col-md-10">
						<input class="form-control" type="number" placeholder="NISN" name="nisn" value="<?= old('nisn') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="asal_sekolah" class="col-md-2 col-form-label">Asal Sekolah</label>
					<div class="col-md-10">
						<input class="form-control" type="text" placeholder="Asal Institusi/Sekolah" name="asal_sekolah" value="<?= old('asal_alamat') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="jurusan" class="col-md-2 col-form-label">Asal Jurusan</label>
					<div class="col-md-10">
						<input class="form-control" type="text" placeholder="Asal Jurusan" name="jurusan" value="<?= old('jurusan') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="nama_ayah" class="col-md-2 col-form-label">Nama Ayah</label>
					<div class="col-md-10">
						<input class="form-control" type="text" placeholder="Nama Ayah" name="nama_ayah" value="<?= old('nama_ayah') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="nama_ibu" class="col-md-2 col-form-label">Nama Ibu</label>
					<div class="col-md-10">
						<input class="form-control" type="text" placeholder="Nama Ibu" name="nama_ibu" value="<?= old('nama_ibu') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="no_hp" class="col-md-2 col-form-label">No HP</label>
					<div class="col-md-10">
						<input class="form-control" type="number" placeholder="No Whatsapp" name="no_hp" value="<?= old('no_hp') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="email" class="col-md-2 col-form-label">E-mail</label>
					<div class="col-md-10">
						<input class="form-control" type="email" placeholder="Email" name="email" value="<?= old('email') ?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="sosmed" class="col-md-2 col-form-label">Sosial Media</label>
					<div class="col-md-10">
						<input class="form-control" type="text" placeholder="Akun Sosial Media" name="sosmed" value="<?= old('sosmed') ?>" required>
					</div>
				</div>

				<div class="form-group row justify-content-center">
					<button type="submit" name="save" class="button btn btn-primary">
						<i class="fas fa-check"></i>Submit
					</button>

					<button onclick=" window.location.href='<?= base_url('registry'); ?>" type="submit" name="cancel" class="button btn btn-danger">
						<i class="fas fa-times"></i>Batal
					</button>
				</div>
		</div><br>
		</form>

	</div>
</div>
</div>



<?= $this->endSection(); ?>