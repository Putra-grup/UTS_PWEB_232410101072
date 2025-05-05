@extends('layouts.app')

@section('content')
<div class=" bg-gray-200 max-w-xl mx-auto border rounded p-6 shadow-md">
    <h1 class="text-3xl font-bold mb-4 text-center">Profile</h1>
    @if($username)
        <p class="text-xl text-center font-semibold">Selamat datang, <span class="font-semibold">{{ $username }}</span>!</p>
    @else
        <p class="text-xl text-center font-semibold">Selamat datang!</p>
    @endif
    <div class="mt-6 space-y-4">
        <div class="flex items-start">
            <!-- Ikon -->
            <img src="https://cdn-icons-png.flaticon.com/128/9308/9308008.png" alt="Username" class="w-5 h-5 text-gray-600 mr-3 mt-1" fill="none" stroke="currentColor" stroke-width="1.5">
            <!-- Label dan Isi -->
            <div>
                <p class="font-semibold">Username:</p>
                <p>{{ $username ?? 'Tidak tersedia' }}</p>
            </div>
        </div>

        <div class="flex items-start">
            <!-- Ikon -->
            <img src="https://cdn-icons-png.flaticon.com/128/2549/2549872.png" alt="Email" class="w-5 h-5 text-gray-600 mr-3 mt-1" fill="none" stroke="currentColor" stroke-width="1.5">
            <!-- Label dan Isi -->
            <div>
                <p class="font-semibold">Email:</p>
                <p>gordena96@gmail.com</p>
            </div>
        </div>

        <div class="flex items-start">
            <!-- Ikon -->
            <img src="https://cdn-icons-png.flaticon.com/128/6787/6787120.png" alt="Email" class="w-5 h-5 text-gray-600 mr-3 mt-1" fill="none" stroke="currentColor" stroke-width="1.5">
            <!-- Label dan Isi -->
            <div>
                <p class="font-semibold">Telepon:</p>
                <p>+62 822 2895 0022</p>
            </div>
        </div>
    </div>
</div>
@endsection
