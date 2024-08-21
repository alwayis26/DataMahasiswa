<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    tr,
    th,
    td {
        font-size: 12px;
    }

    p,
    h1,
    h2,
    h3,
    h4 {
        margin: 0;
    }

    body {
        background-color: #D4D4D4;
    }

    .la {
        margin: 1rem 5rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        background-color: white;
        padding: 1rem;
    }

    .dashboard {
        font-size: 30px;
        font-weight: 500;
    }

    .la a {
        padding: 5px 10px;
        text-decoration: none;
        color: white;
        background-color: #313EE9;
    }

    .la-a {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }

    .la-aa {
        display: flex;
        flex-direction: row;
        gap: 0.5rem;
        align-items: center;
    }

    .in {
        border: 1px solid #D4D4D4;
        padding: 3px 10px;
    }

    input {
        border: 1px solid #DBDBDB;
        border-radius: 5px;
        width: 100%;
        outline-color: #313EE9;
        padding: 5px;
    }

    label {
        color: #616161;
    }

    .tab {
        margin: 5px 0 0 0;
        display: flex;
        flex-direction: row;
        width: 100%;
        gap: 1rem;
    }

    .taba {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        width: 100%;
    }

    .data {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    button {
        padding: 10px 0;
        border: none;
        background-color: #313EE9;
        color: white;
        margin: 10px 0 0 0;
    }

    .su {
        margin: 10px 0 0 0;
    }

    .alert {
        margin: 20px 5rem;
        background-color: #313EE9;
        color: white;
    }
    </style>

    <!-- php -->
    <?php
        include 'loader/koneksi.php';

        $sukses="";
        $error="";
        // INSERT DAN EDIT DATA
        if (isset($_POST['submit'])) {
            $nm = $_POST['nm'];
            $tl = $_POST['tl'];
            $as = $_POST['as'];
            $ea = $_POST['ea'];
            $fa = $_POST['fa'];
            $pr = $_POST['pr'];
            $nt = $_POST['nt'];
            $ni = $_POST['ni'];

            if ($nm && $tl && $as && $ea && $fa && $pr && $nt && $ni) {
                $sql1 = "INSERT INTO mahasiswa
                    (namaMahasiswa,tanggalLahir,asal,email,fakultas,prodi,nomerTelepon,nim)
                    VALUES
                    ('$nm','$tl','$as','$ea','$fa','$pr','$nt','$ni')";
                $q1 = mysqli_query($koneksi, $sql1);
                if ($q1) {
                    echo '<div class="alert alert-success" role="alert" id="sukses">';
                    echo 'Selamat, insert data berhasil';
                    echo '</div>';
                    echo '<script type="text/javascript">
                        setTimeout(function(){
                        window.location.href = "loader/loaderCD.php";
                        }, 5000);
                        </script>';
                } else {
                    $error = "gagal masuk data";
                }
            } else {
                $error = "masukkan data dengan lengkap";
            }
        }
        // INSERT DAN EDIT DATA
    ?>

    <!-- dashboard -->
    <form action="" method="POST">
        <div class="la">
            <p class="dashboard">Insert Data Mahasiswa</p>
            <div class="la-a">
                <div class="la-aa">
                    <a href="loader/loaderCD.php">Dashboard</a>
                    <a href="loader/loaderDE.php">Edit And Delete Data</a>
                </div>
                <div class="la-aa">
                    <a href="">@credit kami/</a>
                </div>
            </div>
            <!-- PESAN ERROR -->
            <script>
            function hideDiv() {
                var div = document.getElementById('error');
                if (div) {
                    div.style.display = 'none';
                }
            }

            // Menghilangkan div setelah 5 detik (5000 milidetik)
            setTimeout(hideDiv, 5000);
            </script>
            <?php
                if ($error) {
                ?>
            <div class="alert alert-danger" role="alert" id="error">
                <?php echo $error ?>
            </div>
            <?php
                }
                ?>
            <!-- PESAN ERROR -->
            <div class="tab">
                <div class="taba">
                    <div class="data">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" name="nm" id="">
                    </div>
                    <div class="data">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tl" id="">
                    </div>
                    <div class="data">
                        <label for="">Asal</label>
                        <input type="text" name="as" id="">
                    </div>
                    <div class="data">
                        <label for="">Email Aktif</label>
                        <input type="text" name="ea" id="">
                    </div>
                </div>
                <div class="taba">
                    <div class="data">
                        <label for="">Fakultas</label>
                        <input type="text" name="fa" id="">
                    </div>
                    <div class="data">
                        <label for="">Prodi</label>
                        <input type="text" name="pr" id="">
                    </div>
                    <div class="data">
                        <label for="">No Telp</label>
                        <input type="text" name="nt" id="">
                    </div>
                    <div class="data">
                        <label for="">NIM</label>
                        <input type="text" name="ni" id="">
                    </div>
                </div>
            </div>
            <button name="submit">Insert Data</button>
        </div>
    </form>
    <!-- dashboard -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
