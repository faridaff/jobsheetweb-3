<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //menampilkan tulisan
        echo "NIS : 2233276 <br>";
        echo "NAMA : ahmad yunus furqon <br>";
        echo "Alamat : kudu baru genuk semarang <br>";
        echo "Telepon : 083878461096 <br>";
        echo "Email : jordygayabebas@gmail.com <br>";
    
        //menghitung nilai pemprogaman web lanjut,gunakan if dan :
            echo "NIS : 2233276<br>";
            echo "NAMA : Ahmad yunus furqon <br>";
            $n_tugas = 70*20/100;
            $n_uts = 80*35/100;
            $n_uas = 83*35/100;
            echo "Nilai TUGAS : $n_tugas<br>";
            echo "Nilai UTS : $n_uts<br>";
            echo "Nilai USA : $n_uts<br>";
            $n_akhir = $n_tugas + $n_uts + $n_uas;
            echo "Nilai akhir : $n_akhir <br>";
    
            if ($n_akhir >= 85){
                echo "Nilai Huruf : A";
            }elseif ($n_akhir >= 68.5){
                echo "Nilai Huruf : B";
            }elseif ($n_akhir >= 58.5){
                echo "Nilai Huruf : c";
            }elseif ($n_akhir >= 40){
                echo "Nilai Huruf : D";
            }else{
                echo " Nilai Huruf : E";
            }
    ?>
</body>
</html>