<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="mx-auto" style="width: 500px;">
<label for="nama"><h2>Penunggak Pajak Kendaraan</h2></label><br><br>
<form action="prosespajak.php" method="post" mr="20px">
  <div class="mb-3">
    <label for="exampleInputNama" class="form-label">Nama Karyawan</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
    <select id="jkelamin" name="jkelamin">
    <option value="1000000">Pria</option>
    <option value="13000000">Wanita</option>
</select>
  </div>

  <div class="mb-3">
  <label for="status_karyawan">Status Karyawan:</label>
        <select name="status_karyawan">
            <option value="tetap">Tetap</option>
            <option value="tidak_tetap">Tidak Tetap</option>
        </select>
        <br>
  </div>
  
  <div class="mb-3">
  <label for="status_menikah">Status Menikah:</label>
        <input type="radio" name="status_menikah" value="true" checked>Menikah
        <input type="radio" name="status_menikah" value="false">Belum Menikah
        <br>
  </div>
  
  <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" name="gaji_pokok" value="3500000">
        <br>    
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

