<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi perhitungan diskon</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center"><marquee width="60%" direction="left" height="100px"><u><b>
                 SELAMAT DATANG DI APLIKASI DISKON </h2></marquee></u></b>
                <form method="post" class="border rounded bg-secondary p-2">
                    <h3 class="text-center"><marquee width="60%" direction="left" height="100px">
                    !>> SILAHKAN DICOBA... <<!</h3></marquee>
                    <label class="form-label"><u>Harga Barangmu (RP.)</label></u>
                    <input type="number"class="form-control" placeholder="Masukan harga barang..." name="harga" step="0,01" autocomplete="off">
                    <label class="form-label"><u>Diskon Barang(RP.)</label></u>
                 <input type="number"class="form-control" placeholder="Masukan diskon barang..." name="diskon" step="0,01" autocomplete="off">
                    <button type="submit"name="hitung"class="btn btn-light w-100 mt-2"><b>Hitung</button></b>
                    <button type="reset"name="reset"class="btn btn-light w-100 mt-2"><b>Hapus</button></b>
                </form>

                 <?php

                 if (isset($_POST['hitung'])){
                    $harga = $_POST['harga'];
                    $diskon = $_POST['diskon'];
                    
                    if($harga < 0){
                        echo "<script>alert('Harga tidak boleh negatif!')</script>";
                    }elseif($diskon < 0 || $diskon > 100){
                        echo "<script>alert('Diskon harus 1-100!')</script>";
                    }else{
                        $nilai_diskon = $harga * ($diskon/100);
                        $total_harga = $harga - $nilai_diskon ;?>

                        <div name="huspa" class="border rounded bg-light p-2">
                            <p>Harga barang : <b>Rp. <?php echo number_format($harga,2,',','.')?></b></p>
                            <p>Total harga diskon <?php echo $diskon?> : <b>Rp. <?php echo number_format($nilai_diskon,2,',','.')?></b></p>
                            <button id="reset" onclick="hapus()"class="btn btn-secondary w-100 mt-2">reset</button>
                        </div>
                    <?php }
                 }?>

            </div>
        </div>
                </div>
                <p class="text-center"><u><b> || >>> UKK-REKAYASA PERANGKAT LUNAK ||VEBBY BHANI SAPUTRA||0074601172 << ||</u></b></p>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    function hapus(){
        var huspa = document.getElementByName("huspa");
        huspa.remove();
    }
 </script>

</body>
</html>