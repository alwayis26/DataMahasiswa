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
        margin: 2rem 5rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        background-color: white;
        padding: 1rem;
        -webkit-box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
        box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
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

    input {
        border: none;
        outline: none;
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

    .tab {
        margin: 10px 0 0 0;
    }

    @media print{
        .la{
            margin: 2rem 0;
            padding: 1rem;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
        .dasboard{
            display: none;
        }
        a, input{
            display: none;
        }
    }

        /* Tetapkan tinggi maksimum tabel dan tambahkan scroll */
        .table-wrapper {
            max-height: 450px;
            overflow-y: auto;
            position: relative;
        }

        /* Pastikan header tetap di atas dan tidak bergeser */
        .table-wrapper thead th {
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: white;
        }

        /* Gaya untuk tampilan header dan konten */
        tr,
        th,
        td {
            font-size: 12px;
        }

        body {
            background-color: #D4D4D4;
        }

        .la {
            margin: 2rem 5rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            background-color: white;
            padding: 1rem;
            -webkit-box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
            box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
        }
    </style>

    <!-- dashboard -->
    <div class="la">
        <p class="dashboard">Data Mahasiswa</p>
        <div class="la-a">
            <div class="la-aa">
                <a href="loader/loaderDC.php">Insert Data</a>
                <a href="loader/loaderDE.php">Edit And Delete Data</a>
            </div>
            <div class="la-aa">
                <div class="in">
                    <input type="text" name="" id="" placeholder="Cari Data">
                </div>
                <a href="cetak.php" target="_blank">Print PDF</a>
            </div>
        </div>
        <div class="tab" style="max-height: 450px; overflow-y: auto;">
            <form action="" method="post">
                <table class="table table-wrapper">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mahasiswa</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Asal</th>
                            <th scope="col">Email Aktif</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Nomer Telepon</th>
                            <th scope="col">Nim</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- tampil data -->
                            <?php
                                include 'loader/koneksi.php';
                                $sql2 = "SELECT * from mahasiswa";
                                $q2 = mysqli_query($koneksi, $sql2);
                                $urut = 1;
                                while ($r2 = mysqli_fetch_array($q2)) {
                                    $nm = $r2['namaMahasiswa'];
                                    $tl = $r2['tanggalLahir'];
                                    $as = $r2['asal'];
                                    $ea = $r2['email'];
                                    $fa = $r2['fakultas'];
                                    $pr = $r2['prodi'];
                                    $nt = $r2['nomerTelepon'];
                                    $ni = $r2['nim'];
                            ?>
                        <!-- tampil data -->
                        <tr>
                            <th scope="row"><?php echo $urut++?></th>
                            <td><?php echo $nm?></td>
                            <td><?php echo $tl?></td>
                            <td><?php echo $as?></td>
                            <td><?php echo $ea?></td>
                            <td><?php echo $fa?></td>
                            <td><?php echo $pr?></td>
                            <td><?php echo $nt?></td>
                            <td><?php echo $ni?></td>
                        </tr>
                        <!-- tampil data -->
                        <?php
                            }
                        ?>
                        <!-- tampil data -->
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- dashboard -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
