<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SocialLogin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class SocialLoginController extends Controller
{
    public function toProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    public function handleCallback($driver)
    {
        try {
            // Menggunakan stateless untuk menghindari penggunaan sesi
            $user = Socialite::driver($driver)->stateless()->user();

            // Mencari akun pengguna berdasarkan provider dan provider_id
            $user_account = SocialLogin::where('provider', $driver)
                                       ->where('provider_id', $user->getId())
                                       ->first();

            if ($user_account) {
                // Jika akun pengguna ditemukan, login pengguna dan regenerasi sesi
                Auth::login($user_account->user);
                Session::regenerate();
                return redirect()->intended('dashboard');
            }

            // Jika pengguna tidak ditemukan, cari berdasarkan email
            $db_user = User::where('email', $user->getEmail())->first();

            if ($db_user) {
                // Jika pengguna ditemukan berdasarkan email, buat entri SocialLogin baru
                SocialLogin::create([
                    'provider' => $driver,
                    'provider_id' => $user->getId(),
                    'user_id' => $db_user->id
                ]);
            } else {
                // Jika pengguna tidak ditemukan, buat pengguna baru dan entri SocialLogin
                $db_user = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => bcrypt(rand(1000, 9999)) // Password acak
                ]);

                SocialLogin::create([
                    'provider' => $driver,
                    'provider_id' => $user->getId(),
                    'user_id' => $db_user->id
                ]);
            }

            // Login pengguna baru atau yang sudah ada
            Auth::login($db_user);
            Session::regenerate();

            return redirect()->intended('dashboard');

        } catch (\Exception $e) {
            // Tangani pengecualian jika terjadi kesalahan
            return redirect('/login')->with('error', 'Unable to login using ' . $driver . '!');
        }
    }
}
