<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | SPKLPTL</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="formregister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="formregister/css/style.css">
    <style>
        /* Custom styles for the buttons */
        .forgot-password-link {
            text-decoration: none;
            color: #6366F1; /* Adjust color as needed */
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password-link:hover {
            color: #4F46E5; /* Adjust hover color as needed */
        }

        .login-button {
            background-color: #6366F1; /* Adjust background color as needed */
            color: #FFFFFF; /* Adjust text color as needed */
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #4F46E5; /* Adjust hover background color as needed */
        }
    </style>
</head>
<body>

<div class="main">
    <!-- Sign in Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="formregister/images/loginlogo.png" alt="sign up image"></figure>
                    <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>
                    <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                        @csrf

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" :value="old('email')" required autofocus autocomplete="email" />
                            <!-- Error Messages -->
                            @error('email')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password" />
                            <!-- Error Messages -->
                            @error('password')
                            <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                            <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>

                        <!-- Forgot Password Link -->
                        <div class="flex items-center justify-end mt-4">
                         @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                             {{ __('Forgot your password?') }}
                            </a>
                         @endif
                         </div>

                        <!-- Submit Button -->
                        <div class="form-group form-button">
                            <button type="submit" class="login-button"> {{ __('Log in') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- JS -->
<script src="formregister/vendor/jquery/jquery.min.js"></script>
<script src="formregister/js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
