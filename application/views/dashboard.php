<?php  $this->load->view('templates/header')?>
<title>Dashboard</title>

<style>
.minus{
    transform: rotate(-45deg);
}
</style>

<body style="background-image:url('https://cdn.wallpapersafari.com/48/28/Z7sNdR.jpg');">
    <h1 style="text-align:center; color:white;">Kalkulator</h1>
<div class="container mt-3">
    <div class="row" style="margin-right:350px; margin-left:350px;">
 <a type="button" class="btn btn-primary" href="index.php/Penjumlahan"><i class="icon-plus"></i>&nbsp Penjumlahan</a>
 <hr>
    <a type="button" class="btn btn-warning" href="index.php/Pengurangan"><i class="icon-minus"></i>&nbsp Pengurangan</a>
    <hr><a type="button" class="btn btn-success" href="index.php/Perkalian"><i class="icon-remove"></i>&nbspPerkalian</a>
    <hr><a type="button" class="btn btn-danger " href="index.php/Pembagian">&nbspPembagian</a>
    <hr><a type="button" class="btn btn-light" href="index.php/Perpangkatan"><i class="icon"></i>&nbspPerpangkatan</a>
    <hr><a type="button" class="btn btn-dark" href="index.php/Modulo"><i class="icon-percent"></i>&nbsp Modulo</a>

</div>
</div>


<?php  $this->load->view('templates/footer')?>