<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Simulasi login
        return redirect()->route('dashboard', ['username' => $request->username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        $dataList = [
            ['Id' => 1, 'Kategori' => 'Promo', 'Nama' => 'Sepatu Lari NIKE AIR ZOOM PEGASUS 41', 'Tipe' => 'Air Zoom Pegasus 41', 'Diskon' => 'Rp. 100.000', 'Warna' => 'Black', 'Harga Sebelumnya' => 'Rp. 450.000', 'Harga Sekarang' => 'Rp. 350.000'],
            ['Id' => 2, 'Kategori' => 'Promo', 'Nama' => 'Sepatu Basket NIKE BOOK ! EP Flagstaff', 'Tipe' => 'Book 1 Ep Flagstaff', 'Diskon' => 'Rp. 80.000', 'Warna' => 'Fir', 'Harga Sebelumnya' => 'Rp. 480.000', 'Harga Sekarang' => 'Rp. 400.000'],
            ['Id' => 3, 'Kategori' => 'Promo', 'Nama' => 'Sepatu Basket ADIDAS Harden Vol. 8 South Beach', 'Tipe' => 'Harden Vol. 8 South Beach', 'Diskon' => 'Rp. 40.000', 'Warna' => 'Pink', 'Harga Sebelumnya' => 'Rp. 420.000', 'Harga Sekarang' => 'Rp. 380.000'],
            ['Id' => 4, 'Kategori' => 'Baru', 'Nama' => 'Sepatu Basket Wanita AIR JORDAN wmns 5 Retro Low', 'Tipe' => 'Wmns 5 Retro Low Expression', 'Diskon' => '-', 'Warna' => 'Pink', 'Harga Sebelumnya' => '-', 'Harga Sekarang' => 'Rp. 420.000'],
            ['Id' => 5, 'Kategori' => 'Baru', 'Nama' => 'Pakaian Basket LI-NING Your Own Way Wade Tee', 'Tipe' => 'Your Own Way Wade Tee', 'Diskon' => '-', 'Warna' => 'Black', 'Harga Sebelumnya' => '-', 'Harga Sekarang' => 'Rp. 500.000'],
            ['Id' => 6, 'Kategori' => 'Baru', 'Nama' => 'Sepatu Basket NIKE Original', 'Tipe' => 'Giannis Immortality 4 Ep', 'Diskon' => '-', 'Warna' => 'Dusty Cactus', 'Harga Sebelumnya' => '-', 'Harga Sekarang' => 'Rp. 1.199.000'],
        ];
        return view('pengelolaan', compact('dataList'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
