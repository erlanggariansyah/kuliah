    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM NILAI</title>
    <style>
        h4 {
            padding-bottom: 26px;
        }

        p {
            padding-bottom: 26px;
        }
    </style>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body class="container">
    <h1>Form Nilai Siswa</h1>
<hr>
<form method="POST" action="form-get-nilai.php">
    <div style="display: flex" class="col-md-12">
        <div class="col-md-2">
        </div>
        <div class="container text-right col-md-4">
            <h4>Nama Siswa</h4>
            <h4>Mata Kuliah</h4>
            <h4>Nilai UTS</h4>
            <h4>Nilai UAS</h4>
            <h4>Nilai Tugas / Praktikum</h4>
        </div>
        <div class="col-md-4">
            <input class="form-control" name="nama">
            <br>
            <select class="form-control" name="matkul" id="matkul">
                <option value="Dasar-dasar Pemrograman" selected>Dasar-dasar Pemrograman</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Pemrograman Web I">Pemrograman Web I</option>
            </select>
            <br>
            <input class="form-control" type="number" name="uts">
            <br>
            <input class="form-control" type="number" name="uas">
            <br>
            <input class="form-control" type="number" name="tugas">
            <br>
            <button class="btn btn-md btn-primary" type="submit">Simpan</button>
        </div>
        <div id="here" class="col-md-2">
            
        </div>
    </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php
if (isset($_POST['nama'])) {
    $status = null;
    $total = (0.3 * $_POST['uts']) + (0.35 * $_POST['uas']) + (0.35 * $_POST['tugas']);
    if ($total > 55) {
        $status = "LULUS";
    } else {
        $status = "TIDAK LULUS";
    }

    $grade = null;
    if ($total >= 0 && $total <= 35) {
        $grade = "E";
    } else if ($total >= 36 && $total <= 55) {
        $grade = "D";
    } else if ($total >= 56 && $total <= 69) {
        $grade = "C";
    } else if ($total >= 70 && $total <= 84) {
        $grade = "B";
    } else if ($total >= 85 && $total <= 100) {
        $grade = "A";
    } else {
        $grade = "I";
    }

    $predikat = null;

    switch ($grade) {
        case 'A':
            $predikat = "SANGAT MEMUASKAN";
            break;
        
        case 'B':
            $predikat = "MEMUASKAN";
            break;
        
        case 'C':
            $predikat = "CUKUP";
            break;
        
        case 'D':
            $predikat = "KURANG";
            break;

        case 'E':
            $predikat = "SANGAT KURANG";
            break;

        case 'I':
            $predikat = "TIDAK ADA";
            break;
        default:
            break;
    }

    echo "Nama  :   ".$_POST['nama'];
    echo "<br/> Matkul  :   ".$_POST['matkul'];
    echo "<br/> UTS :   ".$_POST['uts'];
    echo "<br/> UAS :   ".$_POST['uas'];
    echo "<br/> Tugas   :   ".$_POST['tugas'];    
    echo "<br/> Status  :   ".$status;
    echo "<br/> Grade   :".$grade;
    echo "<br/> Predikat:".$predikat;
}
?>