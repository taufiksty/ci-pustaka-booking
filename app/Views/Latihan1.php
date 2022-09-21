<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lathian1</title>
</head>
<body>
  <h2>Halo kawan.. Yuk kita belajar web programming..!!</h2>
  <form action="/Latihan1/submit" method="post">
    <label for="nilai1">Nilai 1</label>
    <input type="number" name="nilai1" id="nilai1">
    <label for="nilai2">Nilai 2</label>
    <input type="number" name="nilai2" id="nilai2">
    <br>
    <br>
    <input type="submit" value="submit">
    <a href="/Latihan1">Reset</a>
  </form>
  
  <p>Hasil dari metode penjumlahan yaitu: <?= $hasil; ?></p>

  
</body>
</html>