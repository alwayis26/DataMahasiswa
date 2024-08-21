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
        justify-content: center;
        align-items: center;
        background-color: #313EE9;
        padding: 1rem;
        -webkit-box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
        box-shadow: -1px 0px 80px -32px rgba(0, 0, 0, 0.75);
        height: 37rem;
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

    .loader {
        width: 48px;
        height: 48px;
        border: 5px solid #FFF;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        position: relative;
        animation: pulse 1s linear infinite;
    }

    .loader:after {
        content: '';
        position: absolute;
        width: 48px;
        height: 48px;
        border: 5px solid #FFF;
        border-radius: 50%;
        display: inline-block;
        box-sizing: border-box;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        animation: scaleUp 1s linear infinite;
    }

    @keyframes scaleUp {
        0% {
            transform: translate(-50%, -50%) scale(0)
        }

        60%,
        100% {
            transform: translate(-50%, -50%) scale(1)
        }
    }

    @keyframes pulse {

        0%,
        60%,
        100% {
            transform: scale(1)
        }

        80% {
            transform: scale(1.2)
        }
    }
    </style>

    <!-- dashboard -->
    <div class="la">
        <span class="loader"></span>
    </div>
    <!-- dashboard -->

    <script>
        setTimeout(function() {
            window.location.href = "../dashboard.php";
        }, 2000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
