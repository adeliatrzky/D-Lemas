<html>
<head>
    <title>Form Input Datasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>"
method="post">
<table>
    <tr>
        <th colspan="8">
            Form Input Data Siswa
        </th>
    </tr>
    <tr>
        <td colspan="8">
            <hr>
        </td>
    </tr>
    <tr>
        <th>Nama Siswa</th>
        <td>:</td>
        <td>
            <input type="text" name="nama" >
        </td>
    </tr>
    <tr>
        <th>NIS</th>
        <td>:</td>
        <td>
            <input type="text" name="nis" >
        </td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>:</td>
        <td>
            <input type="text" name="kelas" >
        </td>
    </tr>
    <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td>
            <input type="text" name="tgl" >
        </td>
    </tr>
    <tr>
        <th>Tempat Lahir</th>
        <td>:</td>
        <td>
            <input type="text" name="tp" >
        </td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td>:</td>
        <td>
            <input type="text" name="alamat" >
        </td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
            <input type="radio" name="JK">
            <label value="Laki-Laki">Laki-Laki</label> 
            <input type="radio" name="JK">
            <label value="Perempuan">Perempuan</label>
        </td>
    </tr>
    <tr>
        <th>Agama</th>
        <td>:</td>
        <td>
            <select name="agama">
                <option value="">Pilih </option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="budha">Budha</option>
                <option value="hindu">Kristen</option>
                <option value="protestan">Protestan</option>
                <option value="khonghucu">Khonghucu</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="8" align="center">
            <input type="submit" value="submit">
        </td>
    </tr>
</table>
</form>
 </center>
</body>
</html>