
<head>
    <title>From Input MataKuliah</title>
</head>

<body>
    <center>
    <form action="<?= base_url('matakuliah'); ?>"
    method="POST">
    <table>
        <tr>
            <th colspan="3">
                From Input Data MataKuliah
            </th>
        </tr>

        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>

        <tr>
            <th> KODE MK</th>
            <th>:</th>
            <td>
                <input type="text" name="kode" id="kode">
            </td>
        </tr>

        <tr>
            <th> Nama MATKUL</th>
            <th>:</th>
            <td>
                <input type="text" name="nama" id="nama">
            </td>
        </tr>

        <tr>
            <th>SKS</th>
            <th>:</th>
            <td>
                <select name="SKS" id="sks">
                    <option value="">Pilih SKS</option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                </select>
            </td>
        </tr>

        <tr>
            <th colspan="3" align="center">
                <input type="submit" value="submit">
            </th>
        </tr>

    </table>
    </form>
</center>
</body>
</html>