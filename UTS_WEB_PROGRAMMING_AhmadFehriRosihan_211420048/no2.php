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
<!-- <form action="proses_booking.php" method="post">
  Program  Biaya Inap Hotel
  <br><br>
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="jumlah_kamar_biasa">Jumlah kamar biasa:</label><br>
  <input type="number" id="jumlah_kamar_biasa" name="jumlah_kamar_biasa"><br>
  <label for="jumlah_kamar_VIP">Jumlah kamar VIP:</label><br>
  <input type="number" id="jumlah_kamar_VIP" name="jumlah_kamar_VIP"><br>
  <label for="jumlah_kamar_VIP">lama nginap:</label><br>
  <input type="number" id="nginap" name="nginap"><br>
  <input type="submit" value="Booking">
</form> -->
<div class="mx-auto" style="width: 500px;">
<label for="nama"><h2>PROGRAM  BIAYA NGINAP HOTEL</h2></label><br><br>
<form action="proses_booking.php" method="post" mr="20px">
  <div class="mb-3">
    <label for="exampleInputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah kamar biasa:</label>
    <input type="number" class="form-control" id="jumlah_kamar_biasa" name="jumlah_kamar_biasa" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jumlah kamar VIP:</label>
    <input type="number" class="form-control" id="jumlah_kamar_VIP" name="jumlah_kamar_VIP" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">lama nginap:</label>
    <input type="number" class="form-control" id="nginap" name="nginap" aria-describedby="emailHelp">
  </div>
  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



</body>
</html>



