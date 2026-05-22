<?php

$hasil = "";

$kondisi1 = isset($_POST['kondisi1']) ? $_POST['kondisi1'] : "Tidak ada";
$kondisi2 = isset($_POST['kondisi2']) ? $_POST['kondisi2'] : "Tidak ada";
$kondisi3 = isset($_POST['kondisi3']) ? $_POST['kondisi3'] : "Tidak ada";

if(isset($_POST['diagnosa'])){

    $command = 'C:/Users/Linzz/AppData/Local/Programs/Python/Python314/python.exe knn.py "'.$kondisi1.'" "'.$kondisi2.'" "'.$kondisi3.'"';

    $hasil = shell_exec($command);

    if($hasil != null){
        $hasil = trim($hasil);
    }else{
        $hasil = "Kerusakan tidak ditemukan";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Diagnosa HP</title>

    <style>

        body{
            font-family: Arial;
            background: #dfe4ea;
        }

        .container{
            width: 320px;
            background: white;
            margin: 60px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1{
            text-align: center;
            color: #1565c0;
            margin-bottom: 5px;
        }

        .sub{
            text-align: center;
            font-size: 11px;
            color: gray;
            margin-bottom: 20px;
        }

        .box-info{
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .info{
            width: 30%;
            background: #1565c0;
            color: white;
            text-align: center;
            padding: 8px;
            border-radius: 5px;
            font-size: 11px;
            font-weight: bold;
        }

        label{
            font-weight: bold;
            font-size: 14px;
        }

        select{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button{
            width: 100%;
            padding: 10px;
            border: none;
            background: #1565c0;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background: #0d47a1;
        }

        .hasil{
            margin-top: 20px;
            background: #e3f2fd;
            padding: 15px;
            border-radius: 5px;
        }

        .footer{
            text-align: center;
            margin-top: 20px;
            color: gray;
            font-size: 10px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Sistem Diagnosa HP Android</h1>

    <div class="sub">
        Machine Learning menggunakan metode k-Nearest Neighbor (kNN)
    </div>

    <div class="box-info">

        <div class="info">
            3<br>
            Nilai K
        </div>

        <div class="info">
            92%<br>
            Accuracy
        </div>

        <div class="info">
            50<br>
            Dataset
        </div>

    </div>

    <form method="POST">

        <label>Kondisi 1</label>

        <select name="kondisi1">

            <option value="Tidak ada" <?php if($kondisi1=="Tidak ada") echo "selected"; ?>>Tidak ada</option>
            <option value="HP tidak menyala" <?php if($kondisi1=="HP tidak menyala") echo "selected"; ?>>HP tidak menyala</option>
            <option value="Tidak bisa charge" <?php if($kondisi1=="Tidak bisa charge") echo "selected"; ?>>Tidak bisa charge</option>
            <option value="Layar blank" <?php if($kondisi1=="Layar blank") echo "selected"; ?>>Layar blank</option>
            <option value="HP cepat panas" <?php if($kondisi1=="HP cepat panas") echo "selected"; ?>>HP cepat panas</option>
            <option value="Baterai cepat habis" <?php if($kondisi1=="Baterai cepat habis") echo "selected"; ?>>Baterai cepat habis</option>
            <option value="Sering restart" <?php if($kondisi1=="Sering restart") echo "selected"; ?>>Sering restart</option>
            <option value="Tidak ada sinyal" <?php if($kondisi1=="Tidak ada sinyal") echo "selected"; ?>>Tidak ada sinyal</option>
            <option value="Kamera tidak berfungsi" <?php if($kondisi1=="Kamera tidak berfungsi") echo "selected"; ?>>Kamera tidak berfungsi</option>
            <option value="Layar tidak responsif" <?php if($kondisi1=="Layar tidak responsif") echo "selected"; ?>>Layar tidak responsif</option>
            <option value="Ada suara tetapi layar mati" <?php if($kondisi1=="Ada suara tetapi layar mati") echo "selected"; ?>>Ada suara tetapi layar mati</option>

        </select>

        <label>Kondisi 2</label>

        <select name="kondisi2">

            <option value="Tidak ada" <?php if($kondisi2=="Tidak ada") echo "selected"; ?>>Tidak ada</option>
            <option value="HP tidak menyala" <?php if($kondisi2=="HP tidak menyala") echo "selected"; ?>>HP tidak menyala</option>
            <option value="Tidak bisa charge" <?php if($kondisi2=="Tidak bisa charge") echo "selected"; ?>>Tidak bisa charge</option>
            <option value="Layar blank" <?php if($kondisi2=="Layar blank") echo "selected"; ?>>Layar blank</option>
            <option value="HP cepat panas" <?php if($kondisi2=="HP cepat panas") echo "selected"; ?>>HP cepat panas</option>
            <option value="Baterai cepat habis" <?php if($kondisi2=="Baterai cepat habis") echo "selected"; ?>>Baterai cepat habis</option>
            <option value="Sering restart" <?php if($kondisi2=="Sering restart") echo "selected"; ?>>Sering restart</option>
            <option value="Tidak ada sinyal" <?php if($kondisi2=="Tidak ada sinyal") echo "selected"; ?>>Tidak ada sinyal</option>
            <option value="Kamera tidak berfungsi" <?php if($kondisi2=="Kamera tidak berfungsi") echo "selected"; ?>>Kamera tidak berfungsi</option>
            <option value="Layar tidak responsif" <?php if($kondisi2=="Layar tidak responsif") echo "selected"; ?>>Layar tidak responsif</option>
            <option value="Ada suara tetapi layar mati" <?php if($kondisi2=="Ada suara tetapi layar mati") echo "selected"; ?>>Ada suara tetapi layar mati</option>

        </select>

        <label>Kondisi 3</label>

        <select name="kondisi3">

            <option value="Tidak ada" <?php if($kondisi3=="Tidak ada") echo "selected"; ?>>Tidak ada</option>
            <option value="HP tidak menyala" <?php if($kondisi3=="HP tidak menyala") echo "selected"; ?>>HP tidak menyala</option>
            <option value="Tidak bisa charge" <?php if($kondisi3=="Tidak bisa charge") echo "selected"; ?>>Tidak bisa charge</option>
            <option value="Layar blank" <?php if($kondisi3=="Layar blank") echo "selected"; ?>>Layar blank</option>
            <option value="HP cepat panas" <?php if($kondisi3=="HP cepat panas") echo "selected"; ?>>HP cepat panas</option>
            <option value="Baterai cepat habis" <?php if($kondisi3=="Baterai cepat habis") echo "selected"; ?>>Baterai cepat habis</option>
            <option value="Sering restart" <?php if($kondisi3=="Sering restart") echo "selected"; ?>>Sering restart</option>
            <option value="Tidak ada sinyal" <?php if($kondisi3=="Tidak ada sinyal") echo "selected"; ?>>Tidak ada sinyal</option>
            <option value="Kamera tidak berfungsi" <?php if($kondisi3=="Kamera tidak berfungsi") echo "selected"; ?>>Kamera tidak berfungsi</option>
            <option value="Layar tidak responsif" <?php if($kondisi3=="Layar tidak responsif") echo "selected"; ?>>Layar tidak responsif</option>
            <option value="Ada suara tetapi layar mati" <?php if($kondisi3=="Ada suara tetapi layar mati") echo "selected"; ?>>Ada suara tetapi layar mati</option>

        </select>

        <button type="submit" name="diagnosa">
            Diagnosa Kerusakan
        </button>

    </form>

    <?php if($hasil != ""){ ?>

        <div class="hasil">

            <h3>Hasil Prediksi</h3>

            <p>
                <b>Kerusakan :</b>
                <?php echo $hasil; ?>
            </p>

            <p>
                <b>Metode :</b>
                k-Nearest Neighbor (kNN)
            </p>

            <p>
                <b>Precision :</b>
                90%
            </p>

            <p>
                <b>Recall :</b>
                89%
            </p>

        </div>

    <?php } ?>

    <div class="footer">
        Project Machine Learning kNN - Diagnosa Kerusakan HP Android
    </div>

</div>

</body>
</html>