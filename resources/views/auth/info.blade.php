<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reset Password</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Reset Password">
    <meta name="author" content="Madrasah Al-Manar">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
        }

        .auth-main-col {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 600px;
            padding: 2rem;
        }

        .app-auth-body {
            width: 100%;
            text-align: center;
        }

        .btn-contact {
            background-color: #198754;
            color: white;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            border-radius: 30px;
            border: none;
            transition: all 0.3s;
        }

        .btn-contact:hover {
            background-color: #157347;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .auth-option {
            margin-top: 2rem;
            font-size: 1rem;
        }

        .auth-option a {
            color: #198754;
            text-decoration: none;
            font-weight: 500;
        }

        .auth-option a:hover {
            text-decoration: underline;
        }

        .copyright {
            margin-top: 3rem;
            color: #6c757d;
        }
    </style>
</head>

<body class="">
    <div class="row g-0 app-auth-wrapper">
        <div class="auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4">
                        <a class="app-logo" href="index.html">
                            <img class="logo-icon" src="{{ asset('assets/img/sad.gif') }}" alt="Madrasah Al-Manar">
                        </a>
                    </div>
                    <h2 class="auth-heading text-center mb-4">Laporkan Masalah</h2>

                    <div class="auth-intro mb-4 text-center">
                        Jika Anda mengalami kendala seperti:<br>
                        - Kehilangan Kartu Tanda Siswa (KTS)<br>
                        - Belum Memiliki Akun<br>
                        - Lupa password<br>
                        - Mengubah password<br>
                        - Masalah teknis lainnya<br><br>
                        Silakan hubungi Administrator madrasah.
                    </div>

                    <div class="auth-form-container text-center">
                        <form class="auth-form resetpass-form">
                            <div class="text-center">
                                <button type="submit" class="btn btn-contact">
                                    <i class="fas fa-headset me-2"></i> Chat Admin
                                </button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5">
                            <a href="{{ route('login') }}"><i class="fas fa-long-arrow-alt-left text-link"></i>Kembali Ke Form Login</a>
                        </div>
                    </div>
                </div>

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <small class="copyright">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script> Madrasah Al-Manar. All rights reserved.
                        </small>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>