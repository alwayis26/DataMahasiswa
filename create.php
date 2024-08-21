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

    tr, th, td{
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
    input{
        border: 1px solid #DBDBDB;
        border-radius: 5px;
        width: 100%;
        outline-color: #313EE9;
        padding: 5px;
    }
    label{
        color: #616161;
    }
    .tab{
        margin: 10px 0 0 0;
        display: flex;
        flex-direction: row;
        width: 100%;
        gap: 1rem;
    }
    .taba{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        width: 100%;
    }
    .data{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    button{
        padding: 10px 0;
        border: none;
        background-color: #313EE9;
        color: white;
        margin: 10px 0 0 0;
    }
    </style>

    <!-- dashboard -->
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
        <div class="tab">
            <div class="taba">
                <div class="data">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" name="" id="">
                </div>
                <div class="data">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="" id="">
                </div>
                <div class="data">
                    <label for="">Asal</label>
                    <input type="text" name="" id="">
                </div>
                <div class="data">
                    <label for="">Email Aktif</label>
                    <input type="text" name="" id="">
                </div>
            </div>
            <div class="taba">
                <div class="data">
                    <label for="">Fakultas</label>
                    <input type="text" name="" id="">
                </div>
                <div class="data">
                    <label for="">Prodi</label>
                    <input type="text" name="" id="">
                </div>
                <div class="data">
                    <label for="">No Telp</label>
                    <input type="text" name="" id="">
                </div>
                <div class="data">
                    <label for="">NIM</label>
                    <input type="text" name="" id="">
                </div>
            </div>
        </div>
        <button>Insert Data</button>
    </div>
    <!-- dashboard -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
