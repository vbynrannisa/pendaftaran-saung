<?php
header("Content-type: application/vnc-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa Saung Information Technology.xls");
?>

<html>

<body>
    <table width="100%">
        <thead>
            <tr>
                <th scope="col"></th>
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
                <th scope="col">Asal Instansi</th>
                <th scope="col">No Hp</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Email</th>
                <th scope="col">Akun Sosial Media</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($saung as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style=" text-align: left;"><?= $dt->periode_masuk; ?></td>
                    <td style=" text-align: left;"><?= $dt->periode_lulus; ?></td>
                    <td style=" text-align: left;"><?= $dt->kelas; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>
                    <td style="text-align: left;"><?= $dt->nik; ?></td>
                    <td style=" text-align: left;"><?= $dt->nisn; ?></td>
                    <td style=" text-align: left;"><?= $dt->tempat_lahir; ?></td>
                    <td style=" text-align: left;"><?= $dt->tanggal_lahir; ?></td>
                    <td style=" text-align: left;"><?= $dt->alamat; ?></td>
                    <td style=" text-align: left;"><?= $dt->jenis_kelamin; ?></td>
                    <td style=" text-align: left;"><?= $dt->agama; ?></td>
                    <td style=" text-align: left;"><?= $dt->jurusan; ?></td>
                    <td style=" text-align: left;"><?= $dt->asal_sekolah; ?></td>
                    <td style=" text-align: left;"><?= $dt->no_hp; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama_ayah; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama_ibu; ?></td>
                    <td style="text-align: left;"><?= $dt->email; ?></td>
                    <td style=" text-align: left;"><?= $dt->sosmed; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>