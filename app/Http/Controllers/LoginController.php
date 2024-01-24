<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Method Landingpage Login
    public function index(){
        return view('auth.login');
    }

    // Method Authentifikasi Login
    public function authenticate(Request $request){
        // Proses validasi data input dari form login
        $validatedData = $request->validate([
            'nama'      => ['required', 'max:50', 'min:3'],
            'sim'       => ['required', 'max:16', 'min:14'],
            'password'  => ['required']
        ]);

        // Jika proses validasi data berhasil
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate(); // Untuk menghindari teknik hacking session fixation

            return redirect()->intended('/'); //Redirect ke url tertentu memalui authentification middleware
        } 

        // Return ke halaman sebelumnya jika proses validasi data gagal 
        return back()->with('login_failed', 'Login gagal! Silahkan login kembali!');
    }

    // Method Logout & Clear Session
    public function logout(Request $request){
        // Logout
        Auth::logout();

        $request->session()->invalidate(); // Agar session sebelumnya tidak dapat dipakai kembali setelah logout

        $request->session()->regenerateToken(); // Membuat kembali token agar tidak dibajak

        // Redirect kepage home
        return redirect('/');
    }
}
