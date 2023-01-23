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
    <form method="post" action="proseswisata.php">
    <div class="mx-auto" style="width: 500px;">
    <label for="kota">Pilih Kota:</label>
        <select name="kota[]">
            <option value="Lampung">Lampung</option>
            <option value="Jakarta">Jakarta</option>
            <option value="Bandung">Bandung</option>
        </select>
        <br>
  </div>

  <div class="mx-auto" style="width: 500px;">
    <label for="kota">Pilih Kota:</label>
    <label for="biaya_tol">Biaya Tol:</label>
        <input type="number" name="biaya_tol">
        <br>
  </div>

  <div class="mx-auto" style="width: 500px;">
  <label for="biaya_hotel">Biaya Hotel:</label>
        <input type="number" name="biaya_hotel">
        <br>
  </div> 
        
  <div class="mx-auto" style="width: 500px;">
  <label for="biaya_tempat_wisata">Biaya Tempat Wisata:</label>
        <input type="number" name="biaya_tempat_wisata">
        <br>
        <input type="submit" value="Hitung">
  </div> 
        
    </form>
</body>
</html>

