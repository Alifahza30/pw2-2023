<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>

    <?php

    // variable untul menangkap data
    $nama = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];

    $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

    //Tampilan data variable
    echo '<br>Nama Lengkap: '. $nama;
    echo '<br>Mata kuliah: '. $matkul;
    echo '<br>Nilai UTS: '. $uts;
    echo '<br>Nilai UAS: '. $uas;
    echo '<br>Nilai Tugas: ' . $tugas;
    echo '<hr>';
    echo '<br>Nilai Total: ' . $total_nilai;
    echo '<hr>';
    

    ?>
</body>
</html>
        
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>

    <?php

    // variable untul menangkap data
    $nama = $_POST['nama_lengkap'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];

    $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

    //Tampilan data variable
    echo '<br>Nama Lengkap: '. $nama;
    echo '<br>Mata kuliah: '. $matkul;
    echo '<br>Nilai UTS: '. $uts;
    echo '<br>Nilai UAS: '. $uas;
    echo '<br>Nilai Tugas: ' . $tugas;
    echo '<hr>';
    echo '<br>Nilai Total: ' . $total_nilai;
    echo '<hr>';
    

    ?>
</body>
</html>
        
>>>>>>> c97ba02a298fc2d24e16b09fb261c799acae80b6
