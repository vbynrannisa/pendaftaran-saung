<html>

<body>
    <center>
        <h2 style="margin-top:50px;">
            Data Siswa Saung Information Tecnology
        </h2>
        <p style="margin-top:-10px;">
            Jl. Raya Dukuh Bandung Bumiayu, Kecamatan Bumiayu, Kabupaten Brebes
        </p>
    </center>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Asal Instansi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($saung as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>
                    <td style=" text-align: left;"><?= $dt->jenis_kelamin; ?></td>
                    <td style=" text-align: left;"><?= $dt->kelas; ?></td>
                    <td style=" text-align: left;"><?= $dt->jurusan; ?></td>
                    <td style=" text-align: left;"><?= $dt->asal_sekolah; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>