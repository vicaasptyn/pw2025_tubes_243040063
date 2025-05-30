<?php

if (isset($_POST["login"])) {
    if ($_POST["username"] == "cici" && $_POST["password"] == "cican") {
        header("Location: ./admin/php/datamobil.php ");
        exit;
    } else {
        $error = true;
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #191970 60%, #4169e1 100%);
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            position: relative;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.97);
            box-shadow: 0 2px 12px rgba(25, 25, 112, 0.08);
            border-radius: 0 0 18px 18px;
        }

        .logo {
            width: 60px;
            border-radius: 50%;
            border: 2.5px solid #191970;
            box-shadow: 0 4px 16px rgba(25, 25, 112, 0.14);
        }

        .navbar-brand {
            font-family: sans-serif;
            font-size: 2rem;
            color: #191970;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .nav-link {
            color: #191970;
            font-weight: 600;
            margin-right: 8px;
            transition: color 0.2s;
        }

        .nav-link.active,
        .nav-link:hover {
            color: #4169e1;
        }

        .card-login {
            background: rgba(255, 255, 255, 0.98);
            border: none;
            border-radius: 28px;
            box-shadow: 0 10px 36px 0 rgba(25, 25, 112, 0.22);
            padding: 2.8rem 2.2rem;
            animation: fadeInUp 1s;
            position: relative;
            z-index: 2;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-title {
            color: #191970;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 1.7rem;
        }

        .btn-primary {
            background: linear-gradient(90deg, #191970 60%, #4169e1 100%);
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 1.1rem;
            border-radius: 12px;
        }

        .btn-primary:hover {
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 8px 22px rgba(25, 25, 112, 0.18);
        }

        .form-label {
            color: #191970;
            font-weight: 600;
        }

        .form-control:focus {
            border-color: #4169e1;
            box-shadow: 0 0 0 0.2rem rgba(65, 105, 225, 0.13);
        }

        .input-group-text {
            background: #f0f4ff;
            border: none;
            color: #4169e1;
            font-size: 1.2rem;
        }

        .login-footer {
            text-align: center;
            margin-top: 1.2rem;
            color: #191970;
            font-size: 1rem;
        }

        .login-footer a {
            color: #4169e1;
            text-decoration: underline;
            font-weight: 700;
            transition: color 0.2s;
        }

        .login-footer a:hover {
            color: #191970;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 0;
        }

        .bubble {
            position: absolute;
            border-radius: 50%;
            opacity: 0.18;
            z-index: 0;
            animation: floatBubble 7s infinite ease-in-out alternate;
        }

        .bubble1 {
            width: 90px;
            height: 90px;
            background: #fff;
            left: 8%;
            top: 12%;
            animation-delay: 0s;
        }

        .bubble2 {
            width: 60px;
            height: 60px;
            background: #4169e1;
            left: 80%;
            top: 18%;
            animation-delay: 1.5s;
        }

        .bubble3 {
            width: 40px;
            height: 40px;
            background: #191970;
            left: 60%;
            top: 80%;
            animation-delay: 2.5s;
        }

        .bubble4 {
            width: 70px;
            height: 70px;
            background: #fff;
            left: 20%;
            top: 70%;
            animation-delay: 3.5s;
        }

        @keyframes floatBubble {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-40px);
            }
        }

        @media (max-width: 576px) {
            .card-login {
                padding: 1.5rem 0.7rem;
            }

            .navbar-brand {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <!-- Decorative bubbles -->
    <div class="bubble bubble1"></div>
    <div class="bubble bubble2"></div>
    <div class="bubble bubble3"></div>
    <div class="bubble bubble4"></div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Driftora</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- card login -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh; position:relative; z-index:1;">
        <div class="card card-login shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Login ke Akun Anda</h5>
                <!-- Tempat pesan error/sukses -->
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger">Username atau password salah!</div>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary w-100 mt-2"><i class="bi bi-box-arrow-in-right me-1"></i>Login</button>
                </form>
                <div class="login-footer mt-3">
                    Belum punya akun? <a href="#">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- wave background -->
    <svg class="wave" viewBox="0 0 1440 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill="#fff" fill-opacity="0.7" d="M0,160L60,154.7C120,149,240,139,360,133.3C480,128,600,128,720,144C840,160,960,192,1080,197.3C1200,203,1320,181,1380,170.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>