<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?= base_url('css/registrystyle.css') ?>">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="info">
                <center>
                    <h2><i class="fas fa-th-list"></i>&nbsp;&nbsp;Kelola Data Siswa Saung IT</h2>
                </center>
                <hr style="border: 1px grey solid;">
            </div><br>

            <?= $this->include('layout/_messages'); ?>
            <?php if (session()->getFlashdata('pesanAdd')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesanAdd'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesanUpdate')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesanUpdate'); ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('pesanDelete')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('pesanDelete'); ?>
                </div>
            <?php endif; ?>

            <nav class="navbar navbar-light bg-info justify-content-between">
                <form action="" method="POST" class="form-inline" style="margin-bottom: 10px;">
                    <form class="form-inline">
                        <div class="input-group">
                            <div class="btn-group mr-2" role="group" aria-label="cari">
                                <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Peserta..." aria-label="Search" name="key">
                            </div>
                            <div class="btn-group" role="group" aria-label="tombolCari">
                                <b>
                                    <button class="btn btn-primary" type="submit" name="submit">Cari</button>
                                </b>
                            </div>
                        </div>
                    </form>
                </form>
                <div class="btn-group btn-group-toggle" style="background:none;">
                    <form>
                        <div class="input-group">
                            <div class="btn-group mr-2" role="group" aria-label="multibutton" style="margin-top: 10px;height: 40px;">
                                <div class="btn-group" role="group" aria-label="add">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#create">
                                        <b>
                                            <i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah
                                        </b>
                                    </button>
                                </div>
                                <div class="btn-group" role="group" aria-label="excel">
                                    <a href="admin/excel" type="button" class="btn btn-success" name="excel">
                                        <b>
                                            <i class="fas fa-file-csv"></i>&nbsp;&nbsp;Excel
                                        </b>
                                    </a>
                                </div>
                                <div class="btn-group" role="group" aria-label="print">
                                    <a href="admin/print" type="button" class="btn btn-light" name="print">
                                        <b>
                                            <i class="fas fa-print"></i>&nbsp;&nbsp;Print
                                        </b>
                                    </a>
                                </div>
                            </div>
                            <div class="btn-group" role="group" aria-label="pagination" style="margin-top: 10px;">
                                <?= $pager->links('saung', 'saung_pagination') ?>
                            </div>
                        </div>
                    </form>
                </div>
            </nav>

            <div style="overflow-x:auto;">
                <table id="table_id" class="table table-striped table-responsive table-dark mydatatable" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Periode Masuk</th>
                            <th scope="col">Periode Lulus</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">NIK</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat Lengkap</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Asal Instansi/Sekolah</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Nama Ayah</th>
                            <th scope="col">Nama Ibu</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">Akun Sosial Media</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($curpage - 1)); ?>
                        <?php foreach ($saung as $dt) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $dt['periode_masuk']; ?></td>
                                <td><?= $dt['periode_lulus']; ?></td>
                                <td><?= $dt['kelas']; ?></td>
                                <td><?= $dt['nama']; ?></td>
                                <td><?= $dt['nik']; ?></td>
                                <td><?= $dt['nisn']; ?></td>
                                <td><?= $dt['tempat_lahir']; ?></td>
                                <td><?= $dt['tanggal_lahir']; ?></td>
                                <td><?= $dt['alamat']; ?></td>
                                <td><?= $dt['jenis_kelamin']; ?></td>
                                <td><?= $dt['agama']; ?></td>
                                <td><?= $dt['jurusan']; ?></td>
                                <td><?= $dt['asal_sekolah']; ?></td>
                                <td><?= $dt['no_hp']; ?></td>
                                <td><?= $dt['nama_ayah']; ?></td>
                                <td><?= $dt['nama_ibu']; ?></td>
                                <td><?= $dt['email']; ?></td>
                                <td><?= $dt['sosmed']; ?></td>
                                <td class="btn-class">
                                    <button type="button" class="edit btn btn-warning btn-sm" data-toggle="modal" data-target="#update"><i class="fas fa-edit"></i>&nbsp;&nbsp;Ubah</button>
                                    <button type="button" class="del btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;Hapus</button>
                                </td>
                            </tr>


                            <!-- EDIT -->
                            <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">UPDATE DATA</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form action="<?= base_url('admin/update/' . $dt['id']); ?>" method="POST">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="UPDATE">
                                            <div class="modal-body bg-dark">

                                                <div class="registry">
                                                    <div class="avatar">
                                                        <i class="pencil fas fa-pencil-alt"></i>
                                                        <i class="book fas fa-book-open"></i>
                                                    </div>

                                                    <div class="box-registry">
						                                <i class="fas fa-stopwatch">
							                            <label for="periode_masuk">Periode Masuk</label>
							                            <input type="date" name="periode_masuk" required></i>
					                                </div>

                                                    <div class="box-registry">
						                                <i class="fas fa-stopwatch">
						                                <label for="periode_masuk">Periode Lulus</label>
							                            <input type="date" name="periode_lulus" required></i>
					                                </div>

                                                    <!-- kelas -->
					                                <div class="box-registry">
                                                        <i class="fas fa-building"></i>
                                                        <select name="kelas" class="ml-4 form-control ">
                                                        <option value="">--Pilih Kelas--</option>
                                                        <?php $kelas = ['pagi', 'sore', 'kursus'] ?>
                                                        <?php foreach ($kelas as $kls) : ?>
                                                        <?php if ($kls == $dt['kelas']) : ?>
                                                        <option value="<?= $kls; ?>" selected><?= $kls; ?></option>
                                                        <?php else : ?>
                                                        <option value="<?= $kls; ?>"><?= $kls; ?></option>
                                                        <?php endif; ?>
                                                        <?php endforeach; ?>
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
						                                <label for="tanggal_lahir">Tanggal Lahir</label>
							                            <input type="date" name="tanggal_lahir" required></i>
					                                </div>

					                                <div class="box-registry">
						                                <i class="fas fa-house-user"></i>
						                                <input type="name" placeholder="Alamat Lengkap" name="alamat" required>
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
                                                    <i class="fas fa-child"></i>
                                                    <select name="agama" class="ml-4 form-control ">
                                                    <option value="">--Pilih agama--</option>
                                                    <?php $agama = ['islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu']; ?>
                                                    <?php foreach ($agama as $ag) : ?>
                                                    <?php if ($ag == $dt['agama']) : ?>
                                                    <option value="<?= $ag; ?>" selected><?= $ag; ?></option>
                                                    <?php else : ?>
                                                    <option value="<?= $ag; ?>"><?= $ag; ?></option>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    </select>
                                                </div>

					                            <div class="box-registry">
						                            <i class="fa fa-clipboard"></i>
						                            <input type="number" placeholder="NIK" name="nik" required>
					                            </div>

					                            <div class="box-registry">
						<                           i class="fa fa-list-ol"></i>
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

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="button-class">
                                                        <button type="submit" name="update" class="btn btn-primary">
                                                            <i class="fas fa-check"></i>&nbsp;&nbsp;Ubah
                                                        </button>

                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                                            <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- DELETE -->
                            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">HAPUS DATA</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form action="<?= base_url('admin/delete/' . $dt['id']); ?>" method="POST">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <div class="modal-body bg-dark">
                                                <div class="avatar">
                                                    <i class="delicon far fa-trash-alt"></i>
                                                    <i class="book fas fa-book-open"></i>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="button-class">
                                                    <button type="submit" name="delete" class="btn btn-primary">
                                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Hapus
                                                    </button>

                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- ADD -->
            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color:black;" class="modal-title" id="exampleModalLabel">CREATE DATA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?= base_url('admin/save') ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="modal-body bg-dark">
                                <div class="avatar">
                                    <i class="pencil fas fa-pencil-alt"></i>
                                    <i class="book fas fa-book-open"></i>
                                </div>
                                <div class="form-group">
                                    <div class="box-registry">
                                        <i class="fas fa-stopwatch">
                                            <label for="periode_masuk">Periode Masuk</label>
                                            <input type="date" name="periode_masuk" required></i>
                                    </div>

                                    <div class="box-registry">
						                <i class="fas fa-stopwatch">
						                    <label for="periode_masuk">Periode Lulus</label>
							                <input type="date" name="periode_lulus" required></i>
					                </div>

                                    <?php $kelas = ['pagi', 'sore', 'kursus'] ?>
                                    <div class="box-registry">
                                        <i class="fas fa-book"></i>
                                        <select name="kelas" class="ml-4 form-control ">
                                            <option value="">--Pilih Kelas--</option>
                                            <?php foreach ($kelas as $k) : ?>
                                                <!-- if old vavlue is true -->
                                                <?php if (old('kelas') == $k) : ?>
                                                    <option value="<?= $k; ?>" selected><?= $k; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $k ?>"><?= $k ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-child"></i>
                                        <input type="name" placeholder="Nama Lengkap" name="nama" value="<?= old('nama') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-book"></i>
                                        <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" value="<?= old('tempat_lahir') ?>" required>
                                    </div>

                                    <div class="box-registry">
						                <i class="fas fa-calendar-check">
						                <label for="tanggal_lahir">Tanggal Lahir</label>
							            <input type="date" name="tanggal_lahir" required></i>
					                </div>

                                    <div class="box-registry">
                                        <i class="fas fa-house-user"></i>
                                        <input type="name" placeholder="Alamat Lengkap" name="alamat" value="<?= old('alamat') ?>" required>
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
                                        <select name="agama" class="ml-4 form-control" required>
                                            <option value="">--Pilih agama--</option>
                                            <?php $agama = ['islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu']; ?>
                                            <?php foreach ($agama as $a) : ?>
                                                <!-- if old is true -->
                                                <?php if (old('agama') == $a) : ?>
                                                    <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $a; ?>"><?= $a; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fa fa-clipboard"></i>
                                        <input type="number" placeholder="NIK" name="nik" value="<?= old('nik') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fa fa-list-ol"></i>
                                        <input type="number" placeholder="NISN" name="nisn" value="<?= old('nisn') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-building"></i>
                                        <input type="text" placeholder="Asal Institusi/Sekolah" name="asal_sekolah" value="<?= old('asal_sekolah') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-ad"></i>
                                        <input type="text" placeholder="Asal Jurusan" name="jurusan" value="<?= old('jurusan') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-mars"></i>
                                        <input type="text" placeholder="Nama Ayah" name="nama_ayah" value="<?= old('nama_ayah') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-venus"></i>
                                        <input type="text" placeholder="Nama Ibu" name="nama_ibu" value="<?= old('nama_ibu') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fab fa-whatsapp"></i>
                                        <input type="text" placeholder="No Whatsapp" name="no_hp" value="<?= old('no_hp') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <input type="email" placeholder="Email" name="email" value="<?= old('email') ?>" required>
                                    </div>

                                    <div class="box-registry">
                                        <i class="fas fa-users"></i>
                                        <input type="text" placeholder="Akun Sosial Media" name="sosmed" value="<?= old('sosmed') ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="button-class">
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <i class="fas fa-check"></i>&nbsp;&nbsp;Tambah
                                    </button>

                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" class="button btn btn-danger">
                                        <i class="fas fa-times"></i>&nbsp;&nbsp;Batal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>