<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register|SPKPTL</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('formregister/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('formregister/css/style.css') }}">
</head>
<body>

<div class="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                        @csrf

                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="username">
                        </div>

                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password" required autocomplete="new-password">
                        </div>

                        <div class="form-group form-button">
                            <button type="submit" name="signup" id="signup" class="form-submit">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ asset('formregister/images/registerlogo.png') }}" alt="sign up image"></figure>
                    <a href="{{ route('login') }}" class="signup-image-link">I am already a member</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JS -->
<script src="{{ asset('formregister/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('formregister/js/main.js') }}"></script>
</body>
</html>
