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
<form action="hitung_pengeluaran.php" method="post" >
  <label for="jumlah_hp">Jumlah HP yang dibeli:</label><br>
  <input type="number" id="jumlah_hp" name="jumlah_hp"><br>

  <label for="merk_hp">input merk HP sebanyak jumlah HP yang dibeli</label><br>
  <label for="merk_hp">Merk HP:</label><br>
  <select id="merk_hp" name="merk_hp[]">
    <option value="1000000">Samsung ultra Rp.1.000.000</option>
    <option value="13000000">Iphone 13 Rp.13.000.000</option>
    <option value="3000000">Xiomi note 4 Rp.3.000.000</option>
    <option value="4000000">Xiomi note 10 Rp.4.000.000</option>
    <option value="5400000">Xiomi foco f4 Rp.5.400.000</option>
    <option value="800000">samsung j1 Rp.800.000</option>
  </select><br>
  <select id="merk_hp" name="merk_hp[]">
    <option value="1000000">Samsung ultra Rp.1.000.000</option>
    <option value="13000000">Iphone 13 Rp.13.000.000</option>
    <option value="3000000">Xiomi note 4 Rp.3.000.000</option>
    <option value="4000000">Xiomi note 10 Rp.4.000.000</option>
    <option value="5400000">Xiomi foco f4 Rp.5.400.000</option>
    <option value="800000">samsung j1 Rp.800.000</option>
  </select><br>
  <select id="merk_hp" name="merk_hp[]">
    <option value="1000000">Samsung ultra Rp.1.000.000</option>
    <option value="13000000">Iphone 13 Rp.13.000.000</option>
    <option value="3000000">Xiomi note 4 Rp.3.000.000</option>
    <option value="4000000">Xiomi note 10 Rp.4.000.000</option>
    <option value="5400000">Xiomi foco f4 Rp.5.400.000</option>
    <option value="800000">samsung j1 Rp.800.000</option>
  </select><br>
  <!-- input merk HP sebanyak jumlah HP yang dibeli -->

  <input type="submit" value="Hitung">
</form> 
</body>
</html>

