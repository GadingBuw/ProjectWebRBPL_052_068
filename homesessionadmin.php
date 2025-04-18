<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:wght@700&family=Poppins:wght@600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="style.css"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="shortcut icon" href="durian.jpg">
    <title>Home | DurianGo</title>
</head>

<body>

    <?php
    session_start();
    if (empty($_SESSION['username'])) {
        header("location:login.php?pesan=belum_login");
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding: 0px;">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto " style="font-family: Poppins; font-size:13px; color:white;">
                <a class="nav-link" href="#aboutus">Tentang Kami</a>
            </div>
        </div>
    </nav>

    <div class="editnav">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href=""><img src="durian.jpg" alt="" style="height: 40px; margin-right: 1px;"></a>
            <a class="navbar-brand" href="" style="color:white ; font-family:Poppins;">DurianGo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <li class="nav-item" style="margin-left: 100px;">

                        <form class="form-inline" action="searchprodukadmin.php" method="POST">
                            <input class="form-control mr-sm-0" type="text" name="search" placeholder="Cari Produk Disini" aria-label="Search" style="border-top-right-radius: 0px ; border-bottom-right-radius: 0px; margin-right: 0px; width: 450px;">
                            <button type="submit" style="border-top-right-radius: 7px; border-bottom-right-radius: 7px;
                    padding-top: 7px; padding-left: 10px; padding-right: 10px; padding-bottom: 7px; border:none; margin-left: 0px;display:flex"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" fill="gray" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg></button>
                        </form>
                </div>

                <div class="navbar-nav ml-auto" style="font-family: Poppins;font-size:14px;">
                    <a href="inboxadmin.php" style="margin-right: 13px;margin-top:7px;text-decoration:none; color:white;">Inbox </a>

                    <a href="tambahproduk.php" style="margin-right: 13px;margin-top:7px;text-decoration:none; color:white;">Tambah Produk </a>


                    <span style="color:blueviolet;"> Welcome Admin,

                        <?php
                        echo $_SESSION['username'];
                        ?>
                        <a class="btn btn-danger" style="margin-left: 16px;" href="logout.php" role="button">Logout</a>


                    </span>


                </div>
            </div>
        </nav>
    </div>




    <center>
        <div class="editcarro container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="https://www.rwgenting.com/content/dam/approved/rw-genting/web/event/durian-festival/durian_1920X600.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Festival Durian Pacitan</h5>
                            <p>Nantikan Festival Durian terseru di Pacitan pada tanggal 19 Desember 2025</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://assets.digination.id/crop/0x0:0x0/x/photo/2021/05/03/2101259160.png " style="height:300px; object-fit: cover;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Promo Diskon Bulan Ramadhan</h5>
                            <p>Nikmati potongan harga hingga 30% untuk semua jenis durian. Hanya berlaku pada Bulan Ramadhan 2025!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.durianharvests.com/wp-content/uploads/2018/08/Durian-Photo.jpg" style="height:300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Durian Musang King, Si Raja Buah</h5>
                            <p>Langsung dari kebun pilihan. Daging tebal, rasa legit, dan aroma menggoda. Coba sekarang sebelum kehabisan!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i0.wp.com/gallery.yearofthedurian.com/photos/i-VXk2Q7j/0/L/i-VXk2Q7j-L.jpg?w=1100" style="height:300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Datang Terbatas: Durian Pelangi</h5>
                            <p>Langka, eksotis, dan cuma ada minggu ini! Stok sangat terbatas, siapa cepat dia dapat!</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </center>

    <h2 class="container" style="margin-bottom: 6px; margin-left: 190px; font-family: Poppins;">Populer Akhir Akhir Ini</h2>


    <div class="editmedia container">

        <div class="media-scroller container">

            <?php

            include 'konek.php';
            $query = mysqli_query($konek, "select * from tambahproduk");
            while ($data = mysqli_fetch_array($query)) { ?>





                <div class="media-element" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                    <img src="<?php echo $data['gambar']; ?>" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center><?php echo $data['stok']; ?></center>
                        </div>
                        <b class="subtitlemedia"> <?php echo $data['judul']; ?></b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;"><?php echo $data['deskripsi']; ?><br></div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ;color: rgb(17, 17, 17);">Mulai dari Rp. <?php echo $data['harga']; ?></div> <br>
                    <a href=updateproduk.php?id=<?php echo $data['id']; ?> style="text-decoration:none;text-align: center;padding:9px; font-size:16px;margin-left: 50px;margin-right: 50px;margin-bottom:15px; background-color: blueviolet ; border-style:none; font-family: Poppins; color:white;border-radius:10px;">Update Produk</a>
                    <a href=hapusproduk.php?id=<?php echo $data['id']; ?> style="text-decoration:none;text-align: center;padding:9px; font-size:16px;margin-left: 50px;margin-right: 50px;margin-bottom:15px; background-color: red ; border-style:none; font-family: Poppins; color:white;border-radius:10px;">Hapus Produk</a>


                </div>

            <?php } ?>

        </div>


    </div>


    <div class="editmidmedia " style=" background-image: url('https://media.istockphoto.com/id/968935456/id/vektor/abstrak-kemewahan-mengaburkan-abu-abu-gelap-dan-gradien-hitam-digunakan-sebagai-dinding.jpg?s=612x612&w=0&k=20&c=PL_auLcm2relxm2izvfsX8aOBKCZm2E36KVVvaDTUcQ=');
; margin-left: 0px; margin-right: 0px; margin-top: 100px; margin-bottom: 100px; padding: 50px; display: flex; gap: 30px; ">

        <h2 style="margin-bottom: 30px; margin-left: 17px; color: white; font-size: 50px; font-family: Poppins;">Pre-Order Durian Langka Dimulai Hari Ini!</h2>

        <img src="https://4.bp.blogspot.com/-BU_MhjlzF5w/VwY2yCxjOkI/AAAAAAAAHPE/WaiAcIxFCEE9CdZWmJXL8y_8M9Tg4ZGtg/s1600/black%2Bthorn%2B-phot%2BDurian%2BKing-%2BFb.jpg" alt="">
        <img src="https://duriandelivery.com.sg/wp-content/uploads/2017/12/DSC01669-scaled.jpg" alt="">

    </div>

    <h2 style="margin-bottom: 6px; margin-left: 220px; font-family: Poppins;">Produk Pilihan</h2>
    <h3 style="margin-bottom: 6px; margin-left: 220px; font-family: Poppins;">(Untuk Order produk pilihan hubungi sosial media kami di bawah)</h3>
<br>
    <div class="editmedia container">

        <div class="media-scroller">

            <a href="keranjangsession.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://img.freepik.com/premium-photo/durian-fruit-visual-photo-album-full-ripe-delicious-moments-durian-lovers_563241-25057.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>Stok<br>
                                18</center>
                        </div>
                        <b class="subtitlemedia"> Durian Musang King Premium</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Rasa legit, creamy, dan pahit khas Malaysia <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.650.000</div>
                </div>
            </a>

            <a href="keranjangsession.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://img.freepik.com/premium-photo/durian-fruit-visual-photo-album-full-ripe-delicious-moments-durian-lovers_563241-25057.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>Stok<br>
                                10</center>
                        </div>
                        <b class="subtitlemedia"> Durian Montong Super Jumbo</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Daging tebal, biji kecil, rasa manis legit <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.599.800</div>
                </div>
            </a>
            <a href="keranjangsession.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://img.freepik.com/premium-photo/durian-fruit-visual-photo-album-full-ripe-delicious-moments-durian-lovers_563241-25057.jpg" alt="">
                    <div style="display: flex;">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>Stok<br>
                                20</center>
                        </div>
                        <b class="subtitlemedia"> Durian Pelangi – Edisi Langka</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Warna unik, rasa eksotis dari Sulawesi <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.239.500</div>
                </div>
            </a>

            <a href="keranjangsession.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://img.freepik.com/premium-photo/durian-fruit-visual-photo-album-full-ripe-delicious-moments-durian-lovers_563241-25057.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>Stok<br>
                                31</center>
                        </div>
                        <b class="subtitlemedia"> Durian Kupas Frozen (Siap Santap)</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Cocok untuk disimpan lama di freezer <br><br></div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.170.000</div>
                </div>
            </a>

            <a href="keranjangsession.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://img.freepik.com/premium-photo/durian-fruit-visual-photo-album-full-ripe-delicious-moments-durian-lovers_563241-25057.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>Stok<br>
                                12</center>
                        </div>
                        <b class="subtitlemedia"> Paket Durian Mix (Isi 3 Varian)</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Campuran Montong, Musang King, dan Petruk <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.571.000</div>
                </div>
            </a>

            <a href="keranjangsession.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://img.freepik.com/premium-photo/durian-fruit-visual-photo-album-full-ripe-delicious-moments-durian-lovers_563241-25057.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>Stok<br>
                                50</center>
                        </div>
                        <b class="subtitlemedia"> Durian Lokal Super Manis – Varian Petruk</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Bibit asli dari Jepara, rasa manis legit dan aroma kuat <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.191.500</div>
                </div>
            </a>

        </div>


    </div>
    <div class="footer" id="aboutus" style="background-color: black; margin-left: 0px; margin-right: 0px; margin-top:100px; padding: 30px; display: flex; text-align: center;">



        <table class="table table-borderless responsive-2" style="color: white; font-size: 10px; text-align: left; margin-left: 300px; margin-right: 300px; overflow-x:auto;">
            <thead>
                <tr>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width:300px;">Tentang DurianGo</li>
                    </th>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 160px;">Media Partner</li>
                    </th>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 160px;">Lokasi Toko</li>
                    </th>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 160px;">Social Media</li>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="text-align: justify;">Selamat datang di DurianGo. DurianGO adalah platform penjualan durian online yang berlokasi di Pacitan dan melayani pengiriman untuk wilayah Pacitan dan sekitarnya. Kami menghadirkan durian segar langsung dari kebun pilihan dengan kualitas terbaik, siap antar sampai ke pintu rumah Anda. Dengan sistem pemesanan yang mudah dan pelayanan yang cepat, DurianGO hadir sebagai solusi praktis bagi para pecinta durian yang ingin menikmati rasa durian lokal tanpa repot keluar rumah. Kepuasan pelanggan adalah prioritas kami—karena kami tahu, durian enak harus dinikmati dengan cara yang simpel dan terpercaya.</td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group">Dana</li>
                            <li class="list-group">Gopay</li>
                            <li class="list-group">OVO</li>


                        </ul>

                    </td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group">Jl. Iskandar Dinata, Ngampel, Ploso, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63515</li>

                        </ul>
                    </td>
                    <td>
                        <ul class="list-group">
                        <a href="https://wa.me/6282228298607" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                    <path d="M13.601 2.326A7.946 7.946 0 0 0 8.002 0C3.58 0 0 3.58 0 8a7.946 7.946 0 0 0 1.186 4.18L0 16l4.088-1.071A7.946 7.946 0 0 0 8.001 16c4.422 0 8-3.58 8-8 0-2.123-.824-4.118-2.399-5.674zM8.001 14.542a6.547 6.547 0 0 1-3.317-.89l-.237-.138-2.426.636.648-2.363-.154-.243A6.545 6.545 0 0 1 1.458 8c0-3.613 2.934-6.542 6.544-6.542 1.747 0 3.39.682 4.625 1.916A6.521 6.521 0 0 1 14.542 8c0 3.61-2.929 6.542-6.541 6.542z"/>
                                    <path d="M11.167 9.335c-.2-.1-1.18-.583-1.363-.65-.183-.067-.317-.1-.45.1-.134.2-.517.65-.633.784-.117.134-.233.15-.433.05a5.468 5.468 0 0 1-1.6-.983 6.004 6.004 0 0 1-1.116-1.383c-.117-.2-.017-.3.083-.4.084-.084.2-.217.3-.333.1-.117.134-.2.2-.333.067-.134.034-.25-.017-.35-.05-.1-.45-1.084-.617-1.484-.163-.4-.334-.35-.45-.35h-.384a.732.732 0 0 0-.533.25 2.227 2.227 0 0 0-.7 1.667c0 .983.717 1.933.817 2.067.1.134 1.416 2.2 3.417 3.017.483.2.85.317 1.133.4.475.15.908.134 1.25.083.383-.05 1.18-.483 1.35-.95.167-.467.167-.867.117-.95-.05-.083-.184-.133-.383-.233z"/>
                                    </svg>
                            </a>
                            <li class="list-group" style="margin-bottom: 10px; width: 100px;">

                                <a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-facebook" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg></a>
                            </li>
                            <li class="list-group" style="margin-bottom: 10px;"><a href="https://www.instagram.com/accounts/login/"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-instagram" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg></a> </li>
                            <li class="list-group" style="margin-bottom: 10px;"> <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiaWQifQ%3D%3D%22%7D"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-twitter" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg></a> </li>


                        </ul>
                    </td>

            </tbody>
        </table>


    </div>

    <div class="editmidmedia" style="background-color: rgb(40, 40, 40); padding: 9px; color: white; font-size: 9px; font-family: Poppins;">


        <center>&copy;DurianGo</center>

    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>