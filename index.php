<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LalunaMart | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Nunito:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * { font-family: 'Nunito', sans-serif; }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #AFBBFD, #E6E9FF);
        }

        .page {
            display: flex;
            min-height: 100vh;
        }

        /* ===== SIDE DECOR ===== */
        .side-decor {
            flex: 1;
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, #AFBBFD, #E6E9FF);
        }

        .blob {
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: radial-gradient(circle, #6C7AE0, #ffffff);
            top: -140px;
            left: -100px;
            opacity: 0.6;
        }

        .blob.second {
            width: 300px;
            height: 300px;
            bottom: -100px;
            left: 60px;
            background: radial-gradient(circle, #9FA9F5, #ffffff);
        }

        .side-text {
            position: absolute;
            bottom: 40px;
            left: 40px;
            color: #3F3D75;
            max-width: 300px;
        }

        .side-text h2 {
            font-weight: 700;
        }

        .side-text p {
            font-size: 14px;
            opacity: .9;
        }

        /* ===== LOGIN AREA ===== */
        .login-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 380px;
            background: #fff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0,0,0,.1);
            text-align: center;
            animation: fadeUp .8s ease;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card h2 {
            font-weight: 700;
            color: #3F3D75;
        }

        .login-card p {
            font-size: 13px;
            color: #6A6AA0;
            margin-bottom: 25px;
        }

        .form-control {
            height: 42px;
            border-radius: 12px;
            font-family: 'Comic Neue', sans-serif;
        }

        .form-control:focus {
            border-color: #6C7AE0;
            box-shadow: 0 0 0 0.15rem rgba(108,122,224,.35);
        }

        .btn-login {
            width: 100%;
            background: #6C7AE0;
            border: none;
            border-radius: 14px;
            padding: 10px;
            color: #fff;
            font-weight: 600;
            transition: .3s;
            font-family: 'Comic Neue', sans-serif;
        }

        .btn-login:hover {
            background: #5A67C9;
        }

        .alert {
            font-size: 13px;
            border-radius: 12px;
            padding: 8px 12px;
        }

        @media (max-width: 768px) {
            .side-decor { display: none; }
        }
    </style>
</head>

<body>
<div class="page">

    <!-- SIDE DECOR -->
    <div class="side-decor">
        <div class="blob"></div>
        <div class="blob second"></div>

        <div class="side-text">
            <h2>LalunaMart</h2>
            <p>
                Sistem Informasi Penjualan <br>
                Kelola transaksi dengan mudah & cepat ✨
            </p>
        </div>
    </div>

    <!-- LOGIN -->
    <div class="login-wrapper">
        <div class="login-card">

            <h2>Selamat Datang 👋</h2>
            <p>Silakan login untuk melanjutkan</p>

            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert alert-danger'>Login gagal! Username atau password salah.</div>";
                } elseif ($_GET['pesan'] == "logout") {
                    echo "<div class='alert alert-success'>Anda berhasil logout.</div>";
                } elseif ($_GET['pesan'] == "belum_login") {
                    echo "<div class='alert alert-warning'>Silakan login terlebih dahulu.</div>";
                }
            }
            ?>

            <form method="post" action="login.php">
                <div class="form-group text-left">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group text-left">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-login mt-3">Log in</button>
            </form>

        </div>
    </div>

</div>
</body>
</html>
