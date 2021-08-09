<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reset Password</title>

    <!-- General CSS -->
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/auth.css') }}>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="app bg-light">
    <div class="container">
        <div class="row align-items-center justify-content-center auth">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-block">
                        <form class="form-horizontal" role="form" method="POST" novalidate>
                            <div class="auth-header">
                                <h1 class="auth-title">Reset Password</h1>
                                <p class="auth-subtitle">Send password reset e-mail</p>
                            </div>
                            <div class="auth-body">
                                <div class="form-group">
                                    <label for="email">your e-mail</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your e-mail">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit" name="button">Send password reset link</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- General JS -->
<script src="{{ asset('js/app.js') }}"></script>

</html>
