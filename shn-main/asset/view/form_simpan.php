<html>

<head>
  <title>Tambah Data</title>
  <link rel="stylesheet" href="../css/simpan.css">
</head>

<body>
  <center>
    <h1>Tambah Data</h1>
    <center>
      <form method="post" action="../controller/proses_simpan.php" enctype="multipart/form-data">

        <section class="base">
          <div>
            <label>Nama Karyawan</label>
            <input type="text" name="Nama Karyawan" />
          </div>
          <div>
            <label>No Rekening</label>
            <input type="text" name="No Rekening" autofocus="" required="" />
          </div>
          <div>
            <label>Gaji</label>
            <td>
              <input type="radio" name="Gaji" value="Rp 500.000"> Rp 500.000
              <input type="radio" name="Gaji" value="Rp 1.500.000"> Rp 1.500.000
              <input type="radio" name="Gaji" value="Rp 3.000.000"> Rp 3.000.000 
            </td>
          </div>
          <div>
            <label>Foto</label>
            <input type="file" name="Foto" required="" />
          </div>

          <div>
            <button type="submit" value="Simpan">Simpan Data</button>
            <a href="../../index.php"><button type="button" value="Batal">Batal</button></a>
          </div>
        </section>
      </form>
</body>

</html>