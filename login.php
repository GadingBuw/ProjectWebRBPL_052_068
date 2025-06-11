<!doctype html>
<html lang="en">

<head>

    <style>
        body {
            background-color: white;
        }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="shortcut icon" href="DurianGO.png">

    <title>LOGIN | DurianGo</title>
</head>

<body>

    <div class="logohome" style="margin-top: 20px; margin-bottom:100px;">
        <center> <img src="DurianGO.png" alt="" style="height: 40px; margin-right: 5px;">
            <a style="color: black; font-family: Abril Fatface">DurianGo</a>
        </center>

    </div>

    <section class="container" style="margin-left: 100px;">
        <div style="display: flex; gap: 50px;">


            <div class="imglogin" style="margin-left:200px; margin-right:0px; margin-top:70px;">
                <center>

                    <img src="logologin.png" alt="" width="300px">

                </center>


            </div>

            <div class="logincont">

                <h2 style="font-family: Poppins;margin-left: 130px;">Masuk Ke Akunmu</h2>

                <div class="login">
                    <center>
                    </center>
                    <br>

                    <div class="textlogincheck">

                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "Login gagal! username dan password salah!";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "Anda telah berhasil logout";
                            } else if ($_GET['pesan'] == "belum_login") {
                                echo "Anda harus login untuk mengakses halaman admin ";
                            }
                        }


                        ?>
                    </div>


                    <form method="POST" action="cek_login.php">
                        Username : <br>
                        <input type="text" style="border-radius: 8px; width : 400px; height: 40px; margin-bottom:10px; border-width:1px;" name="username"> <br>
                        Password : <br>
                        <input type="password" style="border-radius: 8px; width : 400px; height: 40px;border-width: 1px;" name="password" id="inputPassword">
                        <br>
                        <br>

                        <button class="btn btn-warning " type="submit " style="background-color: rgb(255, 233, 65);border-color: rgb(26, 26, 26); width : 400px; height: 40px;border-radius: 8px; margin-bottom:10px; border-style:none;">LOGIN</button>
                        <center>

                            <input style="margin-bottom: 30px;" type="checkbox" onclick="myFunction()">Tampilkan Password

                            <script>
                                function myFunction() {
                                    var x = document.getElementById("inputPassword");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                            <br>

                        </center>

                    </form>


                </div>

                <div style="margin-top:12px;margin-left:57px ;font-family:Poppins;font-size:13px;color:black;">
                    <center><a>Tidak punya akun? <a href='register.php'>Sign up</a></center><br>
                    <center><a>Kembali ke <a href='index.php'>Home?</a></center>

                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>