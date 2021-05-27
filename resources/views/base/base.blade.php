<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <title>@yield('judul')</title>
</head>
<style>
    body {
        background-color: #f2dfda;
    }
    tr:nth-child(even) {
        background-color: #ffcdab;
    }
    tr:nth-child(odd) {
        background-color: white;
    }
    /* tr:hover {
        background-color: #9ddfd3;
    } */
    th {
        background-color: #ffa45c;
    }
    .btn {
        background-color: #493a36; 
        color: white; 
        /* border: 2px solid #4CAF50; */
    }
    .btn:hover {
        background-color: #ffa45c;
        color: black;
    }
    

</style>
<body>
    <!-- <div class="container" style="margin-top:20px;"> -->
        <!-- <nav class="navbar navbar-expand-lg default navbar-dark" style="background-color: #ffa45c; height:65px;"> 
            <h4 style="color:white;">Data Warehouse Penjualan Kutus-Kutus</h4> -->
            <!-- <a class="navbar-brand" href="/">Home</a> -->
            <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
                <!-- <div class="navbar-nav">
                    <a class="nav-link active" href="/perproduk">Per-Produk</a>
                    <a class="nav-link active" href="/pereseller">Per-Reseller</a>
                    <a class="nav-link active" href="/pertanggal">Per-Tanggal</a>
                    <a class="nav-link active" href="/restanggal">Reseller+Tanggal</a>
                    <a class="nav-link active" href="/prodtanggal">Tanggal+Produk</a>
                    <a class="nav-link active" href="/resprod">Reseller+Produk</a>
                </div> -->
            <!-- </div> -->
        <!-- </nav> -->
        <nav class="navbar navbar-expand-lg default navbar-light" style="background-color: #493a36;"> 
            <a class="navbar-brand" href="/"><img src="/assets/image/logo.png" height="50" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link btn" style="color:white;" href="/perproduk">Per-Produk </a>
                    <a class="nav-link btn" style="color:white;" href="/pereseller">Per-Reseller </a>
                    <a class="nav-link active btn" style="color:white;" href="/pertanggal">Per-Tanggal </a>
                    <a class="nav-link btn" style="color:white;" href="/restanggal">Reseller+Tanggal </a>
                    <a class="nav-link btn" style="color:white;" href="/prodtanggal">Tanggal+Produk </a>
                    <a class="nav-link btn" style="color:white;" href="/resprod">Reseller+Produk </a>
                </div>
            </div>
            <h4 style="color:white;">Data Warehouse Penjualan Kutus-Kutus</h4>
        </nav>

    <!-- </div> -->
    <div class="container">
        <div class="card" style="margin-top:20px;">
        <!-- <nav class="navbar navbar-expand-lg default navbar-light" style="background-color: #ffa45c;"> 
            <a class="navbar-brand" href="/"><h4>Home</h4></a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active btn" href="/perproduk">Per-Produk </a>
                    <a class="nav-link active btn" href="/pereseller">Per-Reseller </a>
                    <a class="nav-link active btn" href="/pertanggal">Per-Tanggal </a>
                    <a class="nav-link active btn" href="/restanggal">Reseller+Tanggal </a>
                    <a class="nav-link active btn" href="/prodtanggal">Tanggal+Produk </a>
                    <a class="nav-link active btn" href="/resprod">Reseller+Produk </a>
                </div>
            </div>
        </nav> -->
            <div class="card-header text-center" style="background:white;padding-top:30px;">
                <h3>@yield('header')</h3>
            </div>
            <div class="card-body" style="background:white;">
                <table class="table table-bordered table-hover">
                    @yield('konten')
                </table>
            </div>
        </div>
        @yield('paginate')
    </div>
</body>

</html>