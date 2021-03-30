<?php
include 'conn.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <?php

    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">';
?>
    <title>EAI SCRAPPING </title>
</head>

<body>
<br>
    <h1 align="center">DAFTAR HARGA LAPTOP</h1><br>


    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist" aria-orientation="vertical"
            style="position: fixed; margin-top:48px;">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"
                style="width:100px; height:200px;">ASUS</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"
                style="width:100px; height:200px;">HP</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent" style="margin-left: 140px;">


            <!-- HALAMAN LAPTOP ASUS -->
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <!-- CARD LAPTOP ASUS -->
                <div class="row row-cols-2 row-cols-md-4 g-4 mr-auto ml-10" style="width: 1200px;">
                <?php 
                $query="SELECT * FROM tbl_laptop_asus ORDER BY produk_gambar ASC";
                $result = mysqli_query($con, $query);
                
                if(mysqli_num_rows($result) > 0)
                {
                    while($row =mysqli_fetch_array($result))
                    {
                        
                        echo '<div class="col">';
                        echo    '<div class="card h-100">';
                        echo        '<img src="'.$row["produk_gambar"].'"
                                    class="card-img-top" alt="...">';
                        echo        '<div class="card-body">';
                        echo            '<h5 class="card-title">' .$row["produk_nama"]. '</h5>';
                        echo            '<p class="card-text">' .$row["produk_spesifikasi"]. '</p>';
                        echo            '<h5 class="card-title">' .$row["produk_harga"]. '</h5>';
                        echo        '</div>';
                        echo    '</div>';
                        echo '</div>';      
                    }
                }     
                ?>
                   </div>
            </div>

            <!-- HALAMAN LAPTOP HP -->
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <!-- CARD LAPTOP HP -->
                <div class="row row-cols-2 row-cols-md-4 g-4 mr-auto ml-10" style="width: 1200px;">
                <?php 
                $query="SELECT * FROM tbl_laptop_hp ORDER BY produk_gambar ASC";
                $result = mysqli_query($con, $query);
                
                if(mysqli_num_rows($result) > 0)
                {
                    while($row =mysqli_fetch_array($result))
                    {
                        
                        echo '<div class="col">';
                        echo    '<div class="card h-100">';
                        echo        '<img src="'.$row["produk_gambar"].'"
                                    class="card-img-top" alt="...">';
                        echo        '<div class="card-body">';
                        echo            '<h5 class="card-title">' .$row["produk_nama"]. '</h5>';
                        echo            '<p class="card-text">' .$row["produk_spesifikasi"]. '</p>';
                        echo            '<h5 class="card-title">' .$row["produk_harga_name"]. '</h5>';
                        echo        '</div>';
                        echo    '</div>';
                        echo '</div>';
                        
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">';
        echo '</script>';

    echo '<!-- Option 2: Separate Popper and Bootstrap JS -->';
    echo '<!--';
    echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>';
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>';
    echo '-->';
  ?>
</body>

</html>