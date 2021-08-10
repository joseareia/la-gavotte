<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page | LaGavotte - Admin & Dashboard Template</title>

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
                        <form class="form-horizontal" action="{{ route('authenticate') }}" role="form" method="POST" novalidate>
                            @csrf
                            <div class="auth-header">
                                <h1 class="auth-title">Login</h1>
                                <p class="auth-subtitle">Sign In to your account</p>
                                @error ('failed-auth')
                                    <p id="auth-failed" class="auth-subtitle text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="auth-body">
                                <div class="form-group">
                                    <label for="username">your username</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="bi bi-shield-lock-fill"></i></div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit" name="button">Login</button>
                                </div>
                                <br>
                                <div class="form-group text-center">
                                    <a href="{{ route('password.reset') }}" class="auth-ghost-link">Forgot password?</a>
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

<script>
    $(document).ready(function() {
        $("input").change(function() {
            $("#auth-failed").remove();
        });
    });
</script>

</html>
