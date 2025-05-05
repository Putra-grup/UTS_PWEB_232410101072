@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Pengelolaan Data</h1>

<div class="mb-4 flex justify-end">
    <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded">
        + Tambah Data
    </button>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
        <thead class="bg-gray-200 text-black">
            <tr>
                <th class="px-6 py-3 text-center border border-gray-300">Id</th>
                <th class="px-6 py-3 text-center border border-gray-300">Kategori</th>
                <th class="px-6 py-3 text-center border border-gray-300">Nama</th>
                <th class="px-6 py-3 text-center border border-gray-300">Tipe</th>
                <th class="px-6 py-3 text-center border border-gray-300">Diskon</th>
                <th class="px-6 py-3 text-center border border-gray-300">Harga Sebelumnya</th>
                <th class="px-6 py-3 text-center border border-gray-300">Harga Sekarang</th>
                <th class="px-6 py-3 text-center border border-gray-300">Kelola Data</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($dataList as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Id'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Kategori'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Nama'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Tipe'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Diskon'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Harga Sebelumnya'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">{{ $item['Harga Sekarang'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-300">
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-3 rounded mr-2">
                        Edit
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded">
                        Hapus
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

