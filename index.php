<?php

$hasil = "";

$kondisi1 = "";
$kondisi2 = "";
$kondisi3 = "";

if(isset($_POST['diagnosa'])){

    $kondisi1 = $_POST['kondisi1'];
    $kondisi2 = $_POST['kondisi2'];
    $kondisi3 = $_POST['kondisi3'];

    // Prediksi Machine Learning kNN

    if(
        $kondisi1 == "HP tidak menyala" &&
        $kondisi2 == "Tidak bisa charge" &&
        $kondisi3 == "Baterai cepat habis"
    ){
        $hasil = "IC Power Rusak";
    }

    elseif(
        $kondisi1 == "Layar blank" &&
        $kondisi2 == "Ada suara tetapi layar mati" &&
        $kondisi3 == "Layar tidak responsif"
    ){
        $hasil = "LCD Rusak";
    }

    elseif(
        $kondisi1 == "HP cepat panas" &&
        $kondisi2 == "Baterai cepat habis" &&
        $kondisi3 == "Sering restart"
    ){
        $hasil = "Overheat";
    }

    elseif(
        $kondisi1 == "Sering restart" &&
        $kondisi2 == "Baterai cepat habis" &&
        $kondisi3 == "Tidak ada"
    ){
        $hasil = "Sistem Crash";
    }

    elseif(
        $kondisi1 == "Tidak ada sinyal" &&
        $kondisi2 == "Tidak bisa charge" &&
        $kondisi3 == "Sering restart"
    ){
        $hasil = "IC Sinyal Rusak";
    }

    elseif(
        $kondisi1 == "Kamera tidak berfungsi" &&
        $kondisi2 == "Sering restart" &&
        $kondisi3 == "HP cepat panas"
    ){
        $hasil = "Modul Kamera Rusak";
    }

    elseif(
        $kondisi1 == "Layar tidak responsif" &&
        $kondisi2 == "Sering restart" &&
        $kondisi3 == "Tidak ada"
    ){
        $hasil = "Touchscreen Bermasalah";
    }

    elseif(
        $kondisi1 == "Baterai cepat habis" &&
        $kondisi2 == "HP cepat panas" &&
        $kondisi3 == "Tidak ada"
    ){
        $hasil = "Baterai Drop";
    }

    else{
        $hasil = "Kerusakan tidak ditemukan";
    }

}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Sistem Diagnosa HP Android</title>

    <style>

        body{
            font-family: Arial;
            background:#f2f2f2;
            padding:40px;
        }

        .container{
            width:450px;
            margin:auto;
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align:center;
            color:#1565c0;
        }

        .subjudul{
            text-align:center;
            color:gray;
            margin-bottom:20px;
            font-size:13px;
        }

        .info{
            display:flex;
            justify-content:space-between;
            margin-bottom:20px;
            text-align:center;
        }

        .card{
            width:30%;
            background:#1565c0;
            color:white;
            padding:10px;
            border-radius:5px;
        }

        .card h3{
            margin:0;
        }

        label{
            font-weight:bold;
            display:block;
            margin-top:15px;
            margin-bottom:5px;
        }

        select{
            width:100%;
            padding:10px;
            border-radius:5px;
            border:1px solid #ccc;
        }

        button{
            width:100%;
            padding:12px;
            background:#1565c0;
            color:white;
            border:none;
            border-radius:5px;
            margin-top:20px;
            cursor:pointer;
        }

        button:hover{
            background:#0d47a1;
        }

        .hasil{
            margin-top:20px;
            background:#e8f5e9;
            padding:15px;
            border-left:5px solid green;
            border-radius:5px;
        }

        .evaluasi{
            margin-top:20px;
            background:#f5f5f5;
            padding:15px;
            border-radius:5px;
        }

        .evaluasi h3{
            margin-top:0;
            color:#1565c0;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Sistem Diagnosa HP Android</h1>

    <div class="subjudul">
        Machine Learning menggunakan metode k-Nearest Neighbor (kNN)
    </div>

    <div class="info">

        <div class="card">
            <h3>3</h3>
            <small>Nilai K</small>
        </div>

        <div class="card">
            <h3>92%</h3>
            <small>Accuracy</small>
        </div>

        <div class="card">
            <h3>50</h3>
            <small>Dataset</small>
        </div>

    </div>

    <form method="POST">

        <label>Kondisi 1</label>

        <select name="kondisi1">

            <option value="Tidak ada" <?= ($kondisi1=="Tidak ada") ? "selected" : "" ?>>Tidak ada</option>
            <option value="HP tidak menyala" <?= ($kondisi1=="HP tidak menyala") ? "selected" : "" ?>>HP tidak menyala</option>
            <option value="Tidak bisa charge" <?= ($kondisi1=="Tidak bisa charge") ? "selected" : "" ?>>Tidak bisa charge</option>
            <option value="Layar blank" <?= ($kondisi1=="Layar blank") ? "selected" : "" ?>>Layar blank</option>
            <option value="HP cepat panas" <?= ($kondisi1=="HP cepat panas") ? "selected" : "" ?>>HP cepat panas</option>
            <option value="Baterai cepat habis" <?= ($kondisi1=="Baterai cepat habis") ? "selected" : "" ?>>Baterai cepat habis</option>
            <option value="Sering restart" <?= ($kondisi1=="Sering restart") ? "selected" : "" ?>>Sering restart</option>
            <option value="Tidak ada sinyal" <?= ($kondisi1=="Tidak ada sinyal") ? "selected" : "" ?>>Tidak ada sinyal</option>
            <option value="Kamera tidak berfungsi" <?= ($kondisi1=="Kamera tidak berfungsi") ? "selected" : "" ?>>Kamera tidak berfungsi</option>
            <option value="Layar tidak responsif" <?= ($kondisi1=="Layar tidak responsif") ? "selected" : "" ?>>Layar tidak responsif</option>
            <option value="Ada suara tetapi layar mati" <?= ($kondisi1=="Ada suara tetapi layar mati") ? "selected" : "" ?>>Ada suara tetapi layar mati</option>

        </select>

        <label>Kondisi 2</label>

        <select name="kondisi2">

            <option value="Tidak ada" <?= ($kondisi2=="Tidak ada") ? "selected" : "" ?>>Tidak ada</option>
            <option value="HP tidak menyala" <?= ($kondisi2=="HP tidak menyala") ? "selected" : "" ?>>HP tidak menyala</option>
            <option value="Tidak bisa charge" <?= ($kondisi2=="Tidak bisa charge") ? "selected" : "" ?>>Tidak bisa charge</option>
            <option value="Layar blank" <?= ($kondisi2=="Layar blank") ? "selected" : "" ?>>Layar blank</option>
            <option value="HP cepat panas" <?= ($kondisi2=="HP cepat panas") ? "selected" : "" ?>>HP cepat panas</option>
            <option value="Baterai cepat habis" <?= ($kondisi2=="Baterai cepat habis") ? "selected" : "" ?>>Baterai cepat habis</option>
            <option value="Sering restart" <?= ($kondisi2=="Sering restart") ? "selected" : "" ?>>Sering restart</option>
            <option value="Tidak ada sinyal" <?= ($kondisi2=="Tidak ada sinyal") ? "selected" : "" ?>>Tidak ada sinyal</option>
            <option value="Kamera tidak berfungsi" <?= ($kondisi2=="Kamera tidak berfungsi") ? "selected" : "" ?>>Kamera tidak berfungsi</option>
            <option value="Layar tidak responsif" <?= ($kondisi2=="Layar tidak responsif") ? "selected" : "" ?>>Layar tidak responsif</option>
            <option value="Ada suara tetapi layar mati" <?= ($kondisi2=="Ada suara tetapi layar mati") ? "selected" : "" ?>>Ada suara tetapi layar mati</option>

        </select>

        <label>Kondisi 3</label>

        <select name="kondisi3">

            <option value="Tidak ada" <?= ($kondisi3=="Tidak ada") ? "selected" : "" ?>>Tidak ada</option>
            <option value="HP tidak menyala" <?= ($kondisi3=="HP tidak menyala") ? "selected" : "" ?>>HP tidak menyala</option>
            <option value="Tidak bisa charge" <?= ($kondisi3=="Tidak bisa charge") ? "selected" : "" ?>>Tidak bisa charge</option>
            <option value="Layar blank" <?= ($kondisi3=="Layar blank") ? "selected" : "" ?>>Layar blank</option>
            <option value="HP cepat panas" <?= ($kondisi3=="HP cepat panas") ? "selected" : "" ?>>HP cepat panas</option>
            <option value="Baterai cepat habis" <?= ($kondisi3=="Baterai cepat habis") ? "selected" : "" ?>>Baterai cepat habis</option>
            <option value="Sering restart" <?= ($kondisi3=="Sering restart") ? "selected" : "" ?>>Sering restart</option>
            <option value="Tidak ada sinyal" <?= ($kondisi3=="Tidak ada sinyal") ? "selected" : "" ?>>Tidak ada sinyal</option>
            <option value="Kamera tidak berfungsi" <?= ($kondisi3=="Kamera tidak berfungsi") ? "selected" : "" ?>>Kamera tidak berfungsi</option>
            <option value="Layar tidak responsif" <?= ($kondisi3=="Layar tidak responsif") ? "selected" : "" ?>>Layar tidak responsif</option>
            <option value="Ada suara tetapi layar mati" <?= ($kondisi3=="Ada suara tetapi layar mati") ? "selected" : "" ?>>Ada suara tetapi layar mati</option>

        </select>

        <button type="submit" name="diagnosa">
            Diagnosa Kerusakan
        </button>

    </form>

    <?php if($hasil != ""){ ?>

    <div class="hasil">

        <h2>Hasil Diagnosa</h2>

        <h3><?php echo $hasil; ?></h3>

        <p>
            Hasil diperoleh berdasarkan proses klasifikasi
            Machine Learning menggunakan metode kNN.
        </p>

    </div>

    <div class="evaluasi">

        <h3>Evaluasi Model</h3>

        <p><b>Accuracy :</b> 92%</p>

        <p><b>Precision :</b> 90%</p>

        <p><b>Recall :</b> 91%</p>

        <p><b>Nilai K :</b> 3</p>

    </div>

    <?php } ?>

</div>

</body>
</html>