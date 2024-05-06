<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Hash password sebelum disimpan ke dalam database
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Simpan data pengguna ke dalam tabel users
        $user = User::create($validatedData);

        // Redirect pengguna ke halaman sukses setelah pendaftaran berhasil
        return redirect()->route('register.success');
    }
}
