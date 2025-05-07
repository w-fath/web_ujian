<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Al-Manar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login Portal Madrasah Al-Manar">
    <meta name="author" content="Madrasah Al-Manar">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/guru.css') }}">

    <style>
        .auth-main-col {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="app-auth-body mx-auto">
                <div class="app-auth-branding mb-4">
                    <a class="app-logo">
                        <img class="logo-icon me-2" src="{{asset ('assets/img/logo.png')}}" alt="Madrasah Al-Manar">
                    </a>
                </div>
                <div class="auth-form-container text-start">
                    <h2 class="auth-heading text-center mb-4">Guru, Login Dulu !</h2>
                    <form class="auth-form login-form" method="POST" action="{{ route('guru.login') }}">
                        @csrf
                        <div class="email mb-3">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" name="email" type="text" class="form-control signin-email @error('email') is-invalid @enderror" placeholder="Email" required autofocus value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="password mb-3">
                            <label class="sr-only" for="password">Password</label>
                            <input id="password" name="password" type="password" class="form-control signin-password @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="extra mt-3 row justify-content-between">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password text-end">
                                        <a href="{{ route('info') }}">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
                        </div>
                    </form>

                    <div class="auth-option text-center pt-5">Belum Punya Akun? <a class="text-link" href="{{ route('info') }}">Sign Up</a>.</div>
                </div>
            </div>

            <footer class="app-auth-footer">
                <div class="container text-center py-3">
                    <small class="copyright">© <script>
                            document.write(new Date().getFullYear())
                        </script> Alumni Al-Manar. All rights reserved.</small>
                </div>
            </footer>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder"></div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>