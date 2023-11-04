<html>
    <head>
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="8">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>nama siswa</th>
                <th>:</th>
                <td>
                    <?php echo $_POST ['nama']; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?php echo $_POST ['nis']; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?php echo $_POST ['kelas']; ?>
                </td>
            </tr>
            <tr>
                <td>tanggal lahir</td>
                <td>:</td>
                <td>
                    <?php echo $_POST['tgl']; ?>
                </td>
            </tr>
            <tr>
                <td>tempat lahir</td>
                <td>:</td>
                <td>
                    <?php echo $_POST ['tp']; ?>
                </td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td>
                    <?php echo $_POST ['alamat']; ?>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?php echo $_POST ['JK']; ?>
                </td>
            </tr>
            <tr>
                <td>agama</td>
                <td>:</td>
                <td>
                    <?php echo $_POST ['agama'] ; ?>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <a href="<?= base_url('datasiswa'); 
?>">Kembali</a>
                    </td>
                    </tr>
        </table>
    </center>
</body>
</html>