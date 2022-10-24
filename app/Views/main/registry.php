<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container">
	<div class="row">
		<div class="col">
			<div class="info">
				<center>
					<h2><i class="fas fa-user-edit"></i>&nbsp;&nbsp;<b>FORMULIR PENDAFTARAN<br>SISWA SAUNG INFORMATION TECHNOLOGY</b></h2>
				</center>
				<hr style="border: 1px grey solid;">
			</div><br>

			<form action="<?= base_url('saung/save'); ?>" method="POST">
				<?= csrf_field(); ?>
				<div class="registry">
					<div class="avatar">
						<i class="pencil fas fa-pencil-alt"></i>
						<i class="book fas fa-book-open"></i>
					</div>

					<div class="box-registry">
					<i class="fas fa-stopwatch">
					<input placeholder="Periode Masuk" >
						<input type="date" name="periode_masuk" required></i>
					</div>

					<div class="box-registry">
					<i class="fas fa-stopwatch">
					<input placeholder="Periode Keluar">
						<input type="date" name="periode_lulus" required></i>
					</div>

					<div class="box-registry">
						<i class="fas fa-book"></i>
						<select name="kelas" class="ml-4 form-control">
							<option value="">--Kelas--</option>
							<option value="pagi">Pagi</option>
							<option value="sore">Sore</option>
							<option value="kursus">Kursus</option>
						</select>
					</div>

					<div class="box-registry">
						<i class="fas fa-child"></i>
						<input type="name" placeholder="Nama Lengkap" name="nama" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-book"></i>
						<input type="text" placeholder="Tempat Lahir" name="tempat_lahir" required>
					</div>

					<div class="box-registry">
					<i class="fas fa-calendar-check">
					<input placeholder="Tanggal Lahir">
						<input type="date" name="tanggal_lahir" required></i>
					</div>

					<div class="box-registry">
						<i class="fas fa-house-user"></i>
						<input type="name" placeholder="Alamat" name="alamat" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-venus-mars"></i>
						<select name="jenis_kelamin" class="ml-4 form-control ">
							<option value="">--Pilih Jenis Kelamin--</option>
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>
						</select>
					</div>

					<div class="box-registry">
						<i class="fas fa-pray"></i>
						<select name="agama" class="ml-4 form-control ">
							<option value="">--Pilih agama--</option>
							<option value="islam">Islam</option>
							<option value="kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Konghucu">Konghucu</option>
						</select>
					</div>

					<div class="box-registry">
						<i class="fa fa-clipboard"></i>
						<input type="number" placeholder="NIK" name="nik" required>
					</div>

					<div class="box-registry">
						<i class="fa fa-list-ol"></i>
						<input type="number" placeholder="NISN" name="nisn" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-building"></i>
						<input type="text" placeholder="Asal Institusi/Sekolah" name="asal_sekolah" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-ad"></i>
						<input type="text" placeholder="Asal Jurusan" name="jurusan" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-mars"></i>
						<input type="text" placeholder="Nama Ayah" name="nama_ayah" autofocus required>
					</div>

					<div class="box-registry">
						<i class="fas fa-venus"></i>
						<input type="text" placeholder="Nama Ibu" name="nama_ibu" autofocus required>
					</div>

					<div class="box-registry">
						<i class="fab fa-whatsapp"></i>
						<input type="number" placeholder="No Whatsapp" name="no_hp" required>
					</div>

					<div class="box-registry">
						<i class="fas fa-envelope-open-text"></i>
						<input type="email" placeholder="Email" name="email" autofocus required>
					</div>

					<div class="box-registry">
						<i class="fas fa-users"></i>
						<input type="text" placeholder="Akun Sosial Media" name="sosmed" autofocus required>
					</div>

					<div class="button-class">
						<button type="submit" name="save" class="button btn btn-primary">
							<i class="fas fa-check"></i>&nbsp;&nbsp;Submit
						</button>

						<button onclick=" window.location.href='<?= base_url('registry'); ?>" type="submit" name="cancel" class="button btn btn-danger">
							<i class="fas fa-times"></i>&nbsp;&nbsp;Batal
						</button>
					</div>
				</div><br>
			</form>

		</div>
	</div>
</div>



<?= $this->endSection(); ?>