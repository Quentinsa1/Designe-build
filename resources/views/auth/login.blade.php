<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Connexion - Design & Build</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skin/skin-1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templete.css') }}">
</head>
<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wrapers">
        <div id="particles-js" class="page-content dez-login bg-primary-dark">
            <div class="relative z-index3">
                <div class="top-head text-center p-a40 logo-header">
                    <a href="{{ url('/') }}" class="logo-light">
                        <img src="{{ asset('assets/images/IAC1.png') }}" alt="logo">
                    </a>
                </div>
                <div class="login-form style-2">
                    <div class="tab-content nav">
                        <div class="tab-pane active text-center">
                            <form class="p-a30 dez-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <h3 class="form-title m-t0">Connexion </h3>
                                <div class="dez-separator-outer m-b5">
                                    <div class="dez-separator bg-primary style-liner"></div>
                                </div>
                                <p>Entrer votre mail et votre mot de passe.</p>
                                <div class="form-group">
                                    <input name="email" class="form-control" placeholder="Email" type="email" value="{{ old('email') }}" required autofocus>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group">
                                    <input name="password" class="form-control" placeholder="Mot de Passe" type="password" required>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div class="form-group text-left">
                                    <button class="site-button dz-xs-flex m-r5" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="bottom-footer text-center text-white">
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
