<?php
  //Multidimensional Array
  echo '<br><br>';
  $Daftar_Buah = [
      ["ID"=> "1","name" => "Stroberi", "color" => "Merah", "stock" => 42, "price" => 25000, "description" => "Buah merah asam manis yang segar"],
      ["ID"=> "2","name" => "Salak", "color" => "Coklat", "stock" => 30, "price" => 18000, "description" => "Buah kulit bersisik dengan rasa buahnya yang manis"],
      ["ID"=> "3","name" => "Semangka", "color" => "Hijau", "stock" => 10, "price" => 18000, "description" => "Buah yang segar karna kadar airnya yang banyak"],
      ["ID"=> "4","name" => "Durian", "color" => "Hijau", "stock" => 8, "price" => 30000, "description" => "Buah aroma yang kuat menjadikan daya tariknya"],
      ["ID"=> "5","name" => "Lemon", "color" => "Kuning", "stock" => 11, "price" => 11000, "description" => "Buah kuning yang asam menyegarkan"],
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
         $data=array('Stroberi'=>array('1','Stroberi','Merah','42','Rp.25.000','Buah merah asam manis yang segar'),
                     'Salak'=>array('2','Salak','Coklat','30','Rp.18.000','Buah kulit bersisik dengan rasa buahnya yang manis'),
                     'Semangka'=>array('3','Semangka','Hijau','10','Rp.18.000','Buah yang segar karna kadar airnya yang banyak'),
                     'Durian'=>array('4','Durian','Hijau','8','Rp.30.000','Buah aroma yang kuat menjadikan daya tariknya'),
                     'Lemon'=>array('5','Lemon','Kuning','11','Rp.11.000','Buah kuning yang asam menyegarkan'),
                    );
          echo "<tr>";
          foreach($data['Stroberi'] as $Daftar_Buah) {
            echo"<td>$Daftar_Buah</td>";
          }
          echo "<tr>";
          foreach($data['Salak'] as $Daftar_Buah) {
            echo"<td>$Daftar_Buah</td>";
          }
          echo "<tr>";
          foreach($data['Semangka'] as $Daftar_Buah) {
            echo"<td>$Daftar_Buah</td>";
          }
          echo "<tr>";
          foreach($data['Durian'] as $Daftar_Buah) {
            echo"<td>$Daftar_Buah</td>";
          }
          echo "<tr>";
          foreach($data['Lemon'] as $Daftar_Buah){
            echo"<td>$Daftar_Buah</td>";
          }
         echo "</tr>"
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>