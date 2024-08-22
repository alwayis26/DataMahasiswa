<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html='<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 8px;
        text-align: center;
    }
</style>
<h1>Data Mahasiswa</h1>
<p>Data berikut merupakan data real time pada database kampus mengajar</p>
    <table class="table">
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
        <tbody>';
        $koneksi = mysqli_connect("localhost", "root", "", "datamahasiswa");
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
    $html.='<tr>
                <th scope="row">'.$urut++.'</th>
                <td>'.$nm.'</td>
                <td>'.$tl.'</td>
                <td>'.$as.'</td>
                <td>'.$ea.'</td>
                <td>'.$fa.'</td>
                <td>'.$pr.'</td>
                <td>'.$nt.'</td>
                <td>'.$ni.'</td>
            </tr>';
        }
    $html.='</tbody>';
$html.='</table>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>
